"use strict";

$(document).ready(function () {
    const $partnersSlider = $("#partners-slider");

    $partnersSlider.slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 2000,
        speed: 500,
        dots: false,
        cssEase: "linear",
        responsive: [
            {
                breakpoint: 2000,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    updatePartnerInfo($partnersSlider.find(".slick-current"));

    if ($(window).width() > 600) {
        $partnersSlider.on("mouseenter", "a", function () {
            updatePartnerInfo($(this));
        });
    }

    $partnersSlider.on(
        "afterChange",
        function (event, slick, currentSlide, nextSlide) {
            updatePartnerInfo(
                $partnersSlider.find(
                    '.slick-slide[data-slick-index="' + currentSlide + '"]'
                )
            );
        }
    );

    function updatePartnerInfo($currentSlide) {
        $("#partner-title").text($currentSlide.data("title"));
        $("#partner-link").attr("href", $currentSlide.attr("href"));
    }
});
