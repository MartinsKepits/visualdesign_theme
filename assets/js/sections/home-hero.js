"use strict";

$(document).ready(function () {
    const windowWidth = window.innerWidth;
    const isLargeScreen = windowWidth > 1919;
    const variableWidthVal = isLargeScreen;

    $(".block-hero").slick({
        centerMode: true,
        centerPadding: isLargeScreen ? "60px" : "30px",
        slidesToShow: 1,
        arrows: true,
        dots: false,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 7000,
        variableWidth: variableWidthVal,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: "30px",
                },
            },
        ],
    });

    if (isLargeScreen) {
        $(".block-hero .slick-slide").width(
            Math.min(
                $(".block-hero .slick-slide img").width(),
                windowWidth - 100
            )
        );
    }

    // View project functionality
    function toggleSlideViewProjectBtn() {
        $(this).children(".slide-view-btn").toggleClass("active");
    }

    $(".quick-slide .slide-img").click(toggleSlideViewProjectBtn);
    $(".block-hero").on("afterChange", function (event, slick, currentSlide) {
        $(".quick-slide .slide-img").off();
        $(".slide-view-btn").removeClass("active");
        $(".slick-slide").removeClass("quick-slide");
        $(".slick-active").addClass("quick-slide");

        $(".quick-slide .slide-img").click(toggleSlideViewProjectBtn);
    });
});
