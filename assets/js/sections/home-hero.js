"use strict";

$(document).ready(function () {
  const slickSliderBreakpoint = window.screen.width > 1920;
  let variableWidthVal = false;

  if (slickSliderBreakpoint) {
    variableWidthVal = true;
  }

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

  if (slickSliderBreakpoint) {
    $(".block-hero .slick-slide").width(1920);
  }

  $(".slide-img").click((e) => {
    $(e.target).children(".slide-view-btn").toggleClass("active");
  });
});
