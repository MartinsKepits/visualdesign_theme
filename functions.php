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
    wp_enqueue_script('viewer_js', get_template_directory_uri() . '/node_modules/viewerjs/dist/viewer.min.js');
    wp_enqueue_style('viewer_css', get_template_directory_uri() . '/node_modules/viewerjs/dist/viewer.min.css');
    wp_enqueue_script('jquery_viewer_js', get_template_directory_uri() . '/node_modules/jquery-viewer/dist/jquery-viewer.min.js');

    // Navigation JS
    wp_enqueue_script('navbar_js', get_template_directory_uri() . '/assets/js/sections/navbar.js');

    // Project Gallery JS
    wp_enqueue_script('project_gallery_js', get_template_directory_uri() . '/assets/js/sections/project-gallery.js');

    // Category
    wp_enqueue_script('category_js', get_template_directory_uri() . '/assets/js/sections/category.js');

    // Home Hero
    wp_enqueue_script('home_hero_js', get_template_directory_uri() . '/assets/js/sections/home-hero.js');

    // Block Reviews
    wp_enqueue_script('block_reviews_js', get_template_directory_uri() . '/assets/js/blocks/block-reviews.js');
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

// Add theme support for post featured image
add_theme_support('post-thumbnails');
