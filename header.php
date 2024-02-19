<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main content.
 *
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-logo" href="<?= esc_url(home_url('/')); ?>" aria-label="Visual Design Logo">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/logo_2024.webp" alt="Visual Design Logo" />
            </a>

            <div class="navbar-toggle">
                <div class="line line-1"></div>
                <div class="line line-transition line-2"></div>
                <div class="line line-3"></div>
            </div>

            <div class="navbar-menu">
                <div class="navbar-menu-header">
                    <a class="navbar-menu-logo" href="<?= esc_url(home_url('/')); ?>" aria-label="Visual Design Logo">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/logo_2024.webp" alt="Visual Design Logo" />
                    </a>

                    <div class="navbar-toggle">
                        <div class="line line-1"></div>
                        <div class="line line-transition line-2"></div>
                        <div class="line line-3"></div>
                    </div>
                </div>
                <?php if (pll_current_language('name') === 'EN') : ?>
                    <?php wp_nav_menu(array(
                        'menu' => 'Main EN',
                        'container_class' => 'menu-links',
                        'menu_class' => 'navbar-nav ms-auto'
                    )); ?>
                <?php elseif (pll_current_language('name') === 'LV') : ?>
                    <?php wp_nav_menu(array(
                        'menu' => 'Main LV',
                        'container_class' => 'menu-links',
                        'menu_class' => 'navbar-nav ms-auto'
                    )); ?>
                <?php elseif (pll_current_language('name') === 'RU') : ?>
                    <?php wp_nav_menu(array(
                        'menu' => 'Main RU',
                        'container_class' => 'menu-links',
                        'menu_class' => 'navbar-nav ms-auto'
                    )); ?>
                <?php endif; ?>
                <div class="menu-languages">
                    <div class="languages-inner">
                        <div class="language-active"><?= pll_current_language('name'); ?></div>
                        <div class="languages-options">
                            <div class="languages-options-inner">
                                <?php
                                $languages = pll_the_languages(array('raw' => 1, 'hide_current' => 1));
                                foreach ($languages as $lang) :
                                ?>
                                    <a href="<?= $lang['url']; ?>"><?= $lang['name']; ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-menu-footer">
                    <div class="menu-footer-bottom">
                        <div class="footer-languages">
                            <div class="current-lang"><?= pll_current_language('name'); ?></div>
                            <?php
                            $languages = pll_the_languages(array('raw' => 1, 'hide_current' => 1));
                            foreach ($languages as $lang) :
                            ?>
                                <a href="<?= $lang['url']; ?>"><?= $lang['name']; ?></a>
                            <?php endforeach; ?>
                        </div>
                        <?php
                        $facebook_link = get_theme_mod('facebook_link', '');
                        $linkedin_link = get_theme_mod('linkedin_link', '');
                        $twitter_link = get_theme_mod('twitter_link', '');
                        $instagram_link = get_theme_mod('instagram_link', '');

                        if ($facebook_link || $linkedin_link || $twitter_link || $instagram_link) : ?>
                            <div class="navbar-menu-social-btns">
                                <?php if ($facebook_link) : ?>
                                    <a href="<?= esc_url($facebook_link) ?>" target="_blank" aria-label="Facebook" class="social-btn facebook">
                                        <i class="fa-brands fa-square-facebook"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($linkedin_link) : ?>
                                    <a href="<?= esc_url($linkedin_link) ?>" target="_blank" aria-label="LinkedIn" class="social-btn linkedin">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($twitter_link) : ?>
                                    <a href="<?= esc_url($twitter_link) ?>" target="_blank" aria-label="Twitter" class="social-btn twitter">
                                        <i class="fa-brands fa-square-x-twitter"></i>
                                    </a>
                                <?php endif; ?>
                                <?php if ($instagram_link) : ?>
                                    <a href="<?= esc_url($instagram_link) ?>" target="_blank" aria-label="Instagram" class="social-btn instagram">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="navbar-menu-bg"></div>
        </div>
    </nav>