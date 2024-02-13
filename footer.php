<?php

/**
 * The template for displaying the footer
 *
 *  Contains the closing of the #content div and all content after.
 *
 */
?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col footer-col-1">
                <?php
                $phone_number = get_theme_mod('phone_number', '');
                $mail_info = get_theme_mod('mail_info', '');

                if ($phone_number || $mail_info) : ?>
                    <h2 class="footer-heading"><?= pll__('Contacts'); ?></h2>
                    <ul class="footer-contacts">
                        <?php if ($phone_number) : ?>
                            <li class="contacts-item contact-phone">
                                <i class="fa-solid fa-phone"></i><a href="tel:<?= $phone_number ?>"><?= $phone_number ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if ($mail_info) : ?>
                            <li class="contacts-item contact-email">
                                <i class="fa-solid fa-envelope"></i><a href="mailto:<?= $mail_info ?>"><?= $mail_info ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="col footer-col-2">
                <?php
                $facebook_link = get_theme_mod('facebook_link', '');
                $linkedin_link = get_theme_mod('linkedin_link', '');
                $twitter_link = get_theme_mod('twitter_link', '');
                $instagram_link = get_theme_mod('instagram_link', '');

                if ($facebook_link || $linkedin_link || $twitter_link || $instagram_link) : ?>
                    <div class="footer-social-btns">
                        <?php if ($facebook_link) : ?>
                            <a href="<?= esc_url($facebook_link) ?>" target="_blank" class="social-btn facebook">
                                <i class="fa-brands fa-square-facebook"></i>
                            </a>
                        <?php endif; ?>
                        <?php if ($linkedin_link) : ?>
                            <a href="<?= esc_url($linkedin_link) ?>" target="_blank" class="social-btn linkedin">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        <?php endif; ?>
                        <?php if ($twitter_link) : ?>
                            <a href="<?= esc_url($twitter_link) ?>" target="_blank" class="social-btn twitter">
                                <i class="fa-brands fa-square-x-twitter"></i>
                            </a>
                        <?php endif; ?>
                        <?php if ($instagram_link) : ?>
                            <a href="<?= esc_url($instagram_link) ?>" target="_blank" class="social-btn instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>© <?= date('Y'); ?> <?= pll__('Visual Design. All Rights Reserved.'); ?></p>
        <p><?= pll__('Website created by Mārtiņš Ķepīts'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>