<?php

// Add to theme Styles, JS
function visualdesign_theme()
{
    // CSS
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/dist/css/style.css');

    // JQUERY v3.7.1
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery-3.7.1.min.js');

    // Slick Carousel
    wp_enqueue_script('slick_carousel_js', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js');

    // Viewer and JQuery Viewer
    wp_enqueue_script('viewer_js', get_template_directory_uri() . '/node_modules/viewerjs/dist/viewer.js');
    wp_enqueue_style('viewer_css', get_template_directory_uri() . '/node_modules/viewerjs/dist/viewer.css');
    wp_enqueue_script('jquery_viewer_js', get_template_directory_uri() . '/node_modules/jquery-viewer/dist/jquery-viewer.js');

    // Navigation JS
    wp_enqueue_script('navbar_js', get_template_directory_uri() . '/assets/js/sections/navbar.js');
}
add_action('wp_enqueue_scripts', 'visualdesign_theme');

// Add new fields for Social links, Contacts
require_once get_template_directory() . '/includes/social-links-customizations.php';
require_once get_template_directory() . '/includes/contacts-customizations.php';

// Translations
$translations_file = get_template_directory() . '/translations.php';
if (file_exists($translations_file)) {
    include_once($translations_file);
}
