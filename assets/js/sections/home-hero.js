"use strict";

$(document).ready(function () {
  function calculateWidth(height) {
    var aspectRatio = 16 / 9;
    var width = aspectRatio * height;
    return width;
  }

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

  if (slickSliderBreakpoint) {
    const slideWidth = calculateWidth(window.screen.height - 125);
    $(".block-hero .slick-slide").width(slideWidth);
  }

  $(".slide-img").click((e) => {
    $(e.target).children(".slide-view-btn").toggleClass("active");
  });
});
