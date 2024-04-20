"use strict";

$(document).ready(function () {
    const tagSelect = ".tag-select";
    const selectOptions = ".select-options";
    const tagSelected = ".tag-selected";
    const tagSelectedText = ".tag-selected-text";
    const selectButton = ".select-button";
    const projectSearch = "#project-search";
    let typingTimer;
    const typingInterval = 1000;

    if ($(window).width() > 576) {
        $(tagSelected).width($(selectOptions).width());
    }

    $(tagSelected).on("click", function () {
        $(tagSelect).toggleClass("select-active");
        $(selectOptions).toggle();
    });

    $(selectButton).click(function () {
        $(tagSelectedText).text($(this).text());
        $(selectOptions).hide();
        $("#tag-filter").val($(this).data("value"));
        $("#tag-filter-form").submit();
    });

    $(document).on("click", function (e) {
        if (
            !$(tagSelect).is(e.target) &&
            $(tagSelect).has(e.target).length === 0
        ) {
            $(tagSelect).removeClass("select-active");
            $(selectOptions).hide();
        }
    });

    $(projectSearch).on("input", function () {
        var inputValue = $(this).val().trim();
        clearTimeout(typingTimer);
        if (inputValue !== "") {
            typingTimer = setTimeout(function () {
                $("#search-form").submit();
            }, typingInterval);
        }
    });

    $(projectSearch).on("keydown", function () {
        clearTimeout(typingTimer);
    });
});
