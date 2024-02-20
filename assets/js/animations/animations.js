"use strict";

$(document).ready(function () {
    const screenWidth = $(window).width();

    // Function to check if element is in viewport
    function isInViewport(element) {
        let elementTop = element.offset().top;
        let elementHeight = element.outerHeight();
        let scrollTop = $(window).scrollTop();
        let windowHeight = $(window).height();

        return (
            elementTop + elementHeight > scrollTop &&
            elementTop < scrollTop + windowHeight
        );
    }

    // Function to add animation class if element is in viewport
    function addAnimationIfVisible() {
        $(".collection-box").each(function () {
            var $this = $(this);
            if (isInViewport($this)) {
                $this.addClass("animate__animated animate__fadeInUp");
            }
        });
    }

    // Initial animation for small screens
    if (screenWidth < 1025) {
        $(".collection-box").addClass("animate__animated animate__fadeIn");
    }

    // Attach scroll event listener to the window
    $(window).on("scroll", function () {
        if (screenWidth > 1024) {
            addAnimationIfVisible();
        }
    });
});
