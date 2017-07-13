jQuery(document).ready(function ($) {
    $("#owl-home").owlCarousel({
        autoPlay: 5000,
        items: 1,
        itemsDesktop: [1199, 1],
        itemsDesktopSmall: [979, 1],
        itemsMobile: [979, 1],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
            "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
        ]
    });

    $("#owl-customer").owlCarousel({
        autoPlay: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [768, 3],
        itemsMobile: [480, 1],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ]
    });

    $("#owl-customer-action").owlCarousel({
        autoPlay: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4],
        itemsMobile: [979, 4],
        itemsMobile: [480, 1],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ]
    });

    $("#owl-customer-past").owlCarousel({
        autoPlay: false,
        items: 4,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [979, 4],
        itemsMobile: [979, 4],
        itemsMobile: [480, 1],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ]
    });

    $("#owl-dichvu").owlCarousel({
        autoPlay: false,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsMobile: [979, 2],
        itemsMobile: [480, 1],
        navigation: true,
        pagination: false,
        navigationText: [
            "<i class='fa fa-angle-left' aria-hidden='true'></i>",
            "<i class='fa fa-angle-right' aria-hidden='true'></i>"
        ]
    });


    $("#owl-company").owlCarousel({
        autoPlay: false,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 1]
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    $('.nav-mobile').click(function () {
        $('#menu-minhlong').toggle("slide");
    });
});