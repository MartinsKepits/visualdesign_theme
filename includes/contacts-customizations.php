<?php

// Add Contacts Info section and settings to the customizer
function contacts_customize_register($wp_customize)
{
    // Add Contacts Info section
    $wp_customize->add_section('contacts_info_section', array(
        'title' => __('Contacts Info', 'text-domain'),
        'priority' => 40,
    ));

    // Add Phone Number Setting
    $wp_customize->add_setting('phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('phone_number', array(
        'label' => __('Phone Number', 'text-domain'),
        'section' => 'contacts_info_section',
        'type' => 'text',
    ));

    // Add Mail Setting
    $wp_customize->add_setting('mail_info', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('mail_info', array(
        'label' => __('Email', 'text-domain'),
        'section' => 'contacts_info_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'contacts_customize_register');
