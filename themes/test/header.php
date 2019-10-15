<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head();
		$themePath = get_template_directory_uri();
		?>

        <!-- Include fonts in HEAD for fast render. -->
        <style type="text/css" rel="stylesheet">@font-face{font-family:mont;src:url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.eot);src:url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.eot?#iefix) format('embedded-opentype'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.woff2) format('woff2'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.woff) format('woff'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.ttf) format('truetype'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-bold-webfont.svg#montbold) format('svg');font-weight:400;font-style:normal}@font-face{font-family:mont;src:url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.eot);src:url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.eot?#iefix) format('embedded-opentype'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.woff2) format('woff2'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.woff) format('woff'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.ttf) format('truetype'),url(<?php echo $themePath ?>/wp-content/themes/test/build/fonts/mont-heavy-webfont.svg#montheavy) format('svg');font-weight:700;font-style:normal}</style>

	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
                <div class="container header--wrap">
                    <!-- logo -->
                    <div class="header--logo">
                        <a href="<?php echo home_url() ?>">
                            <img src="<?php echo getImgUrl('site_logotype', 'full'); ?>">
                            <span class="site-name"><?php echo carbon_get_theme_option('site_name') ?></span>
                        </a>
                    </div>
                    <!-- /logo -->
                    <div class="header--phone">
                        <a href="tel:<?php echo carbon_get_theme_option('phone') ?>"><?php echo carbon_get_theme_option('phone') ?></a>
                    </div>
                </div>
			</header>
            <!-- /header -->
            <section class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="navigation--search col-md-3">
                            <?php get_search_form() ?>
                        </div>
                        <!-- nav -->
                        <nav class="nav col-md-9" role="navigation">
                            <?php theme_nav(); ?>
                        </nav>
                        <!-- /nav -->
                    </div>
                </div>
            </section>

      <!-- /header -->
      <section class="navigation-mobile">
        <div class="container">
          <div class="row">
            <div class="navigation--search col-6 justify-content-start">
                <?php get_search_form() ?>
            </div>

            <div class="nav col-6 justify-content-end">
              <button class="hamburger hamburger--slider" type="button" data-toggle="collapse" data-target="#mobileNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="hamburger-box">
                  <span class="hamburger-inner"></span>
                </span>
              </button>
            </div>
            <div class="col-12 justify-content-center">
              <nav class="nav col-md-12 collapse navbar-collapse" role="navigation" id="mobileNav">
                  <?php theme_mobile_nav(); ?>
              </nav>
            </div>
          </div>
        </div>
      </section>
