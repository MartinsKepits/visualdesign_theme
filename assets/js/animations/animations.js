"use strict";

$(document).ready(function () {
    // Function to check if element is in viewport
    function isInViewport(element) {
        var elementTop = element.offset().top;
        var elementHeight = element.outerHeight();
        var scrollTop = $(window).scrollTop();
        var windowHeight = $(window).height();

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
    if ($(window).width() < 575) {
        $(".collection-box").addClass("animate__animated animate__fadeIn");
    } else {
        // Trigger animation on page load
        addAnimationIfVisible();
    }

    // Attach scroll event listener to the window
    $(window).on("scroll", function () {
        if ($(window).width() > 575) {
            addAnimationIfVisible();
        }
    });
});
