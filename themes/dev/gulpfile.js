'use strict';

var gulp = require('gulp'),
	prefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	modernizr = require('gulp-modernizr'),
	concat = require('gulp-concat'),
	sass = require('gulp-sass'),
	cssmin = require('gulp-clean-css'),
	imagemin = require('gulp-imagemin'),
	newer = require('gulp-newer'),
	csso = require('gulp-csso'),
	gcmq = require('gulp-group-css-media-queries'),
	rename = require('gulp-rename'),
	del = require('del');

// Clean assets
// function clean() {
// 	return del(['./build/']);
// }


// CSS task
function css() {
	return gulp
		.src('./src/scss/**/*.scss')
		.pipe(sass())
        .pipe(csso())
		.pipe(prefixer())
		.pipe(gcmq())
	      .pipe(cssmin())
	      .pipe(rename({
			dirname: '',
			basename: 'main',
			prefix: '',
			suffix: '.min',
			extname: '.css'
		}))
		.pipe(gulp.dest('../test/build/css'));
}
// Awesome task
function awesome_css() {
    return gulp
        .src('./node_modules/@fortawesome/fontawesome-free/css/all.css')
        .pipe(gcmq())
        .pipe(cssmin())
        .pipe(rename({
            dirname: '',
            basename: 'fa',
            prefix: '',
            suffix: '.min',
            extname: '.css'
        }))
        .pipe(gulp.dest('../test/build/css'));
}
function awesome_fonts() {
	return gulp
		.src('./node_modules/@fontawesome/fontawesome-free/fa-fwebfonts/*{woff,woff2}', { allowEmpty: true })
		.pipe(gulp.dest('../test/build/fa-webfonts'));
}

// JS task
function scripts() {
	return gulp
		.src(['./src/js/*.js'])
		.pipe(concat('main.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('../test/build/js'));
}

// Optimize Images
function images() {
	return gulp
		.src('./src/img/*')
		.pipe(newer('../test/build/img'))
		.pipe(
			imagemin([
				imagemin.gifsicle({ interlaced: true }),
				imagemin.jpegtran({ progressive: true }),
				imagemin.optipng({ optimizationLevel: 5 }),
				imagemin.svgo({
					plugins: [
						{
							removeViewBox: false,
							collapseGroups: true
						}
					]
				})
			])
		)
		.pipe(gulp.dest('../test/build/img'));
}

// Watch files
function watchFiles() {
	gulp.watch('./src/scss/**/*', css);
	gulp.watch('./src/js/*.js', scripts);
	gulp.watch('./src/img/**/*', images);
}

// Define complex tasks
const js = gulp.series(scripts);
const watch = gulp.series(watchFiles);
// const build = gulp.series(clean, gulp.parallel(css, mainPage_css, awesome_css, awesome_fonts, js, images));
const build = gulp.series(gulp.parallel(css, awesome_css, awesome_fonts, js, images));

// Export tasks
exports.images = images;
exports.css = css;
exports.awesome_css = awesome_css;
exports.awesome_fonts = awesome_fonts;
exports.js = js;
// exports.clean = clean;
exports.watch = watch;
exports.default = build;
