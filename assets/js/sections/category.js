"use strict";

$(document).ready(function () {
    const elements = {
        tagSelect: ".tag-select",
        selectOptions: ".select-options",
        tagSelected: ".tag-selected",
        tagSelectedText: ".tag-selected-text",
        selectButton: ".select-button",
        projectSearch: "#project-search",
        projects: "#projects",
        noProjectsFoundText: ".no-projects-found-text",
        pagination: "#pagination",
        paginationBtn: ".pagination-button",
    };

    const {
        tagSelect,
        selectOptions,
        tagSelected,
        tagSelectedText,
        selectButton,
        projectSearch,
        projects,
        noProjectsFoundText,
        pagination,
        paginationBtn,
    } = elements;

    const postsPerPage = 5;
    const categoryId = $("#project-filters").data("category-id");
    let pageNumber = 1;
    let totalPosts = 0;

    if ($(projects).length > 0) {
        // Make tag select all elements same width
        $(tagSelected).width($(selectOptions).width());

        // Open / Close tag select
        $(tagSelected).on("click", function () {
            $(tagSelect).toggleClass("select-active");
            $(selectOptions).toggle();
        });

        // Close tag select on outside click
        $(document).on("click", function (e) {
            if (
                !$(tagSelect).is(e.target) &&
                $(tagSelect).has(e.target).length === 0
            ) {
                $(tagSelect).removeClass("select-active");
                $(selectOptions).hide();
            }
        });

        // Select button click
        $(selectButton).on("click", function () {
            const tagId = $(this).data("tag-id");
            const tagName = $(this).text();

            $(tagSelectedText).text(tagName);
            $(tagSelect).removeClass("select-active");
            $(selectOptions).hide();
            $(projectSearch).val("");

            pageNumber = 1;

            const newParams = new URLSearchParams(window.location.search);
            newParams.set("page", pageNumber);
            newParams.set("category", categoryId);
            newParams.set("tagName", tagName);

            if (tagId !== null && !isNaN(tagId)) {
                newParams.set("tag", tagId);
            } else {
                newParams.delete("tag");
            }

            newParams.delete("search");

            history.replaceState(
                {},
                "",
                `${window.location.pathname}?${newParams.toString()}`
            );

            fetchPostsForCategory(tagId);
        });

        // Search input change
        $(projectSearch).on("input", function (el) {
            $(tagSelectedText).text(
                $('.select-button[data-filter*="*"]').text()
            );
            pageNumber = 1;

            saveSearchInputValue(this);

            const newParams = new URLSearchParams(window.location.search);
            newParams.set("page", pageNumber);
            newParams.set("category", categoryId);
            newParams.delete("tagName");
            newParams.delete("tag");
            newParams.set("search", $(el.target).val().toLowerCase());

            history.replaceState(
                {},
                "",
                `${window.location.pathname}?${newParams.toString()}`
            );

            fetchPostsForCategory(null, $(el.target).val().toLowerCase());
        });

        // Page number click
        $(pagination).on("click", paginationBtn, function () {
            const btnPageNumber = $(this).data("page");

            $(paginationBtn).removeClass("current-page");
            $(this).addClass("current-page");

            if (pageNumber === btnPageNumber) {
                return;
            }

            pageNumber = btnPageNumber;

            const newParams = new URLSearchParams(window.location.search);
            newParams.set("page", pageNumber);

            history.replaceState(
                {},
                "",
                `${window.location.pathname}?${newParams.toString()}`
            );

            let { tagId } = extractParamsFromURL();

            fetchPostsByCategoryAndTagOrTitle(tagId)
                .then((posts) => {
                    fetchAdditionalDetails(posts);
                })
                .catch((error) => {
                    console.error("Error fetching posts:", error);
                });
        });

        handlePageLoadAndRenderPosts();
    }

    // ORDER 1
    function handlePageLoadAndRenderPosts() {
        pageNumber =
            parseInt(new URLSearchParams(window.location.search).get("page")) ||
            1;
        let { tagId, tagName, searchVal } = extractParamsFromURL();

        fetchPostsForCategory(tagId, searchVal);

        if (tagName) {
            $(tagSelectedText).text(tagName);
        }
    }

    // ORDER 2
    function fetchPostsForCategory(tagId, searchVal) {
        if (!searchVal) {
            removeSearchInputValue("project-search");
            $(projectSearch).val("");
        } else {
            $(projectSearch).val(getSearchInputValue("project-search"));
        }

        fetchTotalPostsForCategory(tagId, searchVal)
            .then((total) => {
                totalPosts = total;
                const totalPages = Math.ceil(totalPosts / postsPerPage);

                generatePaginationButtons(totalPages);

                fetchPostsByCategoryAndTagOrTitle(tagId, searchVal)
                    .then((posts) => {
                        fetchAdditionalDetails(posts);
                    })
                    .catch((error) => {
                        console.error("Error fetching posts:", error);
                    });
            })
            .catch((error) => {
                console.error("Error fetching total posts:", error);
            });
    }

    // ORDER 3
    // Fetch total number of posts for the category...
    function fetchTotalPostsForCategory(tagId, searchVal) {
        var apiUrl = "https://visualdesign.lv/wp-json/wp/v2/posts";
        const params = new URLSearchParams();

        params.set("categories", categoryId);

        if (tagId !== null && !isNaN(tagId)) {
            params.set("tags", tagId);
        }

        if (searchVal) {
            params.set("search", searchVal);
        }

        apiUrl += "?" + params.toString();

        return fetch(apiUrl)
            .then((response) => response.headers.get("X-WP-Total"))
            .catch((error) => {
                console.error("Error fetching total posts:", error);
            });
    }

    // ORDER 5
    // Fetch Posts by Category and Tag / Title
    function fetchPostsByCategoryAndTagOrTitle(tagId, searchVal) {
        var apiUrl = "https://visualdesign.lv/wp-json/wp/v2/posts";
        const params = new URLSearchParams();

        params.append("categories", categoryId);

        if (tagId !== null && !isNaN(tagId)) {
            params.append("tags", tagId);
        }

        if (searchVal) {
            params.append("search", searchVal);
        }

        params.append("page", pageNumber);
        params.append("per_page", postsPerPage);

        apiUrl += "?" + params.toString();

        return fetch(apiUrl)
            .then((response) => response.json())
            .catch((error) => {
                console.error("Error fetching posts:", error);
            });
    }

    // ORDER 6
    // Fetch Post aditional Details
    function fetchAdditionalDetails(posts) {
        let promises = [];

        posts.forEach((post) => {
            let featuredMediaUrl = fetchFeaturedMedia(post.featured_media);
            let tagNames = fetchTagNames(post.tags);

            promises.push(
                Promise.all([featuredMediaUrl, tagNames])
                    .then((values) => {
                        post.featured_media_url = values[0];
                        post.tag_names = values[1];
                    })
                    .catch((error) =>
                        console.error(
                            "Error fetching additional details:",
                            error
                        )
                    )
            );
        });

        Promise.all(promises).then(() => {
            renderProjects(posts);
        });
    }

    // ORDER 7
    // Fetch Post thumbnail image url
    function fetchFeaturedMedia(mediaId) {
        var apiUrl = "https://visualdesign.lv/wp-json/wp/v2/media/" + mediaId;

        return fetch(apiUrl)
            .then((response) => response.json())
            .then((media) => media.source_url)
            .catch((error) =>
                console.error("Error fetching featured media:", error)
            );
    }

    // ORDER 8
    // Fetch Post tag names
    function fetchTagNames(tagIds) {
        let promises = [];

        tagIds.forEach((tagId) => {
            var apiUrl = "https://visualdesign.lv/wp-json/wp/v2/tags/" + tagId;

            let promise = fetch(apiUrl)
                .then((response) => response.json())
                .then((tag) => tag.name)
                .catch((error) =>
                    console.error("Error fetching tag name:", error)
                );

            promises.push(promise);
        });

        return Promise.all(promises);
    }

    // ORDER 9
    // Render project thumbnails in DOM
    function renderProjects(posts) {
        $(projects).empty();

        if (posts.length === 0) {
            $(noProjectsFoundText).addClass("show-no-projects-found");
        } else {
            $(noProjectsFoundText).removeClass("show-no-projects-found");
        }

        posts.forEach((post) => {
            let tagsHtml = post.tag_names
                .map((tagName) => `<div class="project-tag">${tagName}</div>`)
                .join("");

            let projectItemHtml = `
                <a class="project col-xl-4 col-lg-4 col-md-6 col-sm-12" href="${post.link}">
                    <div class="project-img-wrapper">
                        <img class="project-img" src="${post.featured_media_url}" alt="${post.title.rendered}">
                        <div class="project-img-bg">
                            <span>View Project</span>
                        </div>
                    </div>
                    <div class="project-info">
                        <div class="project-title">${post.title.rendered}</div>
                        <div class="project-tags">${tagsHtml}</div>
                    </div>
                </a>
            `;

            $(projects).append(projectItemHtml);
        });
    }

    // ORDER 4
    // Generate pagination Butttons
    function generatePaginationButtons(totalPages) {
        let buttonsHtml = "";
        for (let i = 1; i <= totalPages; i++) {
            if (i === pageNumber) {
                buttonsHtml += `<button class="pagination-button current-page" data-page="${i}">${i}</button>`;
            } else {
                buttonsHtml += `<button class="pagination-button" data-page="${i}">${i}</button>`;
            }
        }
        $(pagination).html(buttonsHtml);
    }

    // Extract Params from URL
    function extractParamsFromURL() {
        const urlParams = new URLSearchParams(window.location.search);
        const tagId = urlParams.get("tag");
        const tagName = urlParams.get("tagName");
        const searchVal = urlParams.get("search");
        return { tagId, tagName, searchVal };
    }

    // Save input value to localStorage
    function saveSearchInputValue(element) {
        var id = $(element).attr("id");
        var inputValue = $(element).val();
        localStorage.setItem(id, inputValue);
    }

    // Get input value from localStorage
    function getSearchInputValue(element) {
        var storedValue = localStorage.getItem(element);
        return storedValue ? storedValue : "";
    }

    // Remove input value from loacalStorage
    function removeSearchInputValue(element) {
        localStorage.removeItem(element);
    }
});
