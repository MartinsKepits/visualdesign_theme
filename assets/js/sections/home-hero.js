"use strict";

$(document).ready(function () {
    $(".block-hero").slick({
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 1,
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 7000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: "30px",
                },
            },
        ],
    });

    $(".slide-img").click((e) => {
        $(e.target).children(".slide-view-btn").toggleClass("active");
    });
});
