"use strict";

$(document).ready(function () {
    const tagSelect = ".tag-select";
    const selectOptions = ".select-options";
    const tagSelected = ".tag-selected";
    const tagSelectedText = ".tag-selected-text";
    const selectButton = ".select-button";
    const projectSearch = "#project-search";
    const project = ".project";
    const noProjectsFoundText = ".no-projects-found-text";

    $(tagSelected).on("click", function () {
        $(tagSelect).toggleClass("select-active");
        $(selectOptions).toggle();
    });

    $(selectButton).click(function () {
        $(tagSelectedText).text($(this).text());
        $(tagSelect).removeClass("select-active");
        $(selectOptions).hide();
        $(noProjectsFoundText).removeClass("show-no-projects-found");
        $(projectSearch).val("");
        $(project).hide().filter($(this).attr("data-filter")).show();
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

    $(projectSearch).on("input", (el) => {
        $(tagSelectedText).text($('.select-button[data-filter*="*"]').text());
        $(project).removeClass("show-project");
        $(noProjectsFoundText).removeClass("show-no-projects-found");

        $(project)
            .hide()
            .filter(function () {
                let projectText = $(this).text().toLowerCase();
                return (
                    projectText.indexOf($(el.target).val().toLowerCase()) > -1
                );
            })
            .show()
            .addClass("show-project");

        if ($(".project.show-project").length < 1) {
            $(noProjectsFoundText).addClass("show-no-projects-found");
        }
    });
});
