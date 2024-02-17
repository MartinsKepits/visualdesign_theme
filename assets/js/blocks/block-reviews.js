"use strict";

$(document).ready(function () {
    $("#block-reviews-items").slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        responsive: [
            {
                breakpoint: 798,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    let reviewHeight = 0;
    $(".review-wrapper").each(function () {
        if (reviewHeight < $(this).height()) {
            reviewHeight = $(this).height();
        }
    });
    $(".review-wrapper").height(reviewHeight);
});
