<?php

// Add Social Links section and settings to the customizer
function theme_customize_register($wp_customize)
{
    // Add Social Links section start
    $wp_customize->add_section('social_links_section', array(
        'title' => __('Social Links', 'text-domain'),
        'priority' => 30,
    ));

    // Add Facebook Setting
    $wp_customize->add_setting('facebook_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_link', array(
        'label' => __('Facebook Link', 'text-domain'),
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    // Add Linked In Setting
    $wp_customize->add_setting('linkedin_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('linkedin_link', array(
        'label' => __('Linked In Link', 'text-domain'),
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    // Add Twitter Setting
    $wp_customize->add_setting('twitter_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter_link', array(
        'label' => __('Twitter Link', 'text-domain'),
        'section' => 'social_links_section',
        'type' => 'text',
    ));

    // Add Instagram Setting
    $wp_customize->add_setting('instagram_link', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('instagram_link', array(
        'label' => __('Instagram Link', 'text-domain'),
        'section' => 'social_links_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'theme_customize_register');
