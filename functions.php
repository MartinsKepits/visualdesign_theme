<?php

// Add to theme Styles, JS
function visualdesign_theme()
{
    // CSS
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/dist/css/style.min.css');

    // JQUERY v3.7.1
    wp_enqueue_script('jquery_js', get_template_directory_uri() . '/assets/js/vendor/jquery/jquery-3.7.1.min.js');

    // Slick Carousel
    wp_enqueue_script('slick_carousel_js', get_template_directory_uri() . '/node_modules/slick-carousel/slick/slick.min.js');

    // nanogallery2
    // wp_enqueue_script('nanogallery2_js', get_template_directory_uri() . '/node_modules/nanogallery2/dist/jquery.nanogallery2.min.js');
    // wp_enqueue_style('nanogallery2_js_css', get_template_directory_uri() . '/node_modules/nanogallery2/dist/css/nanogallery2.min.css');
    wp_enqueue_script('nanogallery2_js', get_template_directory_uri() .  '/assets/js/vendor/nanogallery2/dist/jquery.nanogallery2.min.js');
    wp_enqueue_style('nanogallery2_js_css', get_template_directory_uri() . '/assets/js/vendor/nanogallery2/dist/css/nanogallery2.min.css');

    // Animate.css
    wp_enqueue_style('animatecss_css', get_template_directory_uri() . '/node_modules/animate.css/animate.min.css');

    // All js from assets/js files
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.min.js');
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

function numberToText($number)
{
    $numberText = array(
        0 => 'zero',
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
    );

    if (array_key_exists($number, $numberText)) {
        return $numberText[$number];
    }
}
