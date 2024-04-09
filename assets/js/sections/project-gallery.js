$(document).ready(function () {
    $("#project-gallery").nanogallery2({
        thumbnailBorderHorizontal: 0,
        thumbnailBorderVertical: 0,
        thumbnailGutterWidth: 15,
        thumbnailGutterHeight: 15,
        thumbnailWidth: 600,
        thumbnailHeight: "auto",
        galleryDisplayMode: "rows",
        viewerGallery: "none",
        thumbnailLabel: {
            display: false,
        },
        viewerToolbar: {
            display: false,
        },
        viewerTools: {
            topLeft: "pageCounter",
            topRight: "zoomButton, fullscreenButton, closeButton",
        },
        galleryTheme: {
            thumbnail: { background: "#231f20" },
        },
        viewerTheme: { background: "rgba(0,0,0,0.5)", barColor: "#FFFFFF" },
    });
});
