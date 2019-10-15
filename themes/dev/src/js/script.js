(function ($, root, undefined) {

    $(function () {

        'use strict';

        $('.home--slider-wrap').slick({
            arrows: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplaySpeed: 5000,
            adaptiveHeight: true,
            appendArrows: $('.slider-nav'),
            prevArrow: '<span class="left-arrow"><i class="fas fa-caret-left"></i></span>',
            nextArrow: '<span class="right-arrow"><i class="fas fa-caret-right"></i></span>'
        });

        $('.navigation-mobile .hamburger').on('click', function () {
            $(this).toggleClass( "is-active" );
        });

    });

})(jQuery, this);
