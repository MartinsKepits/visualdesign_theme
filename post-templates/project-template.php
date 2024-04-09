<?php

/**
 * Template Name: Project Template
 * Template Post Type: post
 */
?>

<?php get_header(); ?>

<!-- Main Content Start -->
<?php
$current_lang = pll_current_language('slug');

$project_page_fields = get_field('project_page_fields');
?>
<main role="main">
    <div class="project-hero-wrapper container-fluid animate__animated animate__fadeIn">
        <div class="project-content-wrapper container">
            <div class="project-content col-sm-4">
                <?php the_title('<h1 class="project-title">', '</h1>'); ?>
                <?php if ($project_page_fields['project_year']) : ?>
                    <span class="project-year"><?= $project_page_fields['project_year']; ?></span>
                <?php endif; ?>
                <?php if ($project_page_fields['project_desc']) : ?>
                    <hr class="hr" />
                    <p class="project-desc"><?= $project_page_fields['project_desc']; ?></p>
                <?php endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 order-2 order-sm-1">
                <div class="project-content">
                    <?php the_title('<h1 class="project-title">', '</h1>'); ?>
                    <?php if ($project_page_fields['project_year']) : ?>
                        <span class="project-year"><?= $project_page_fields['project_year'] ?></span>
                    <?php endif; ?>
                    <?php if ($project_page_fields['project_desc']) : ?>
                        <hr class="hr" />
                        <p class="project-desc"><?= $project_page_fields['project_desc'] ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-7 order-1 order-sm-2" <?php if ($project_page_fields['project_main_img']) : ?>style="background: url(<?= $project_page_fields['project_main_img'] ?>) no-repeat center top/cover" <?php endif; ?>></div>
        </div>
    </div>
    <div class="container">
        <div id="project-gallery" class="project-gallery row g-3 animate__animated animate__fadeIn">
            <?php if ($project_page_fields['project_img_one']) : ?>
                <a href="<?= $project_page_fields['project_img_one']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_one']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_two']) : ?>
                <a href="<?= $project_page_fields['project_img_two']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_two']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_three']) : ?>
                <a href="<?= $project_page_fields['project_img_three']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_three']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_four']) : ?>
                <a href="<?= $project_page_fields['project_img_four']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_four']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_five']) : ?>
                <a href="<?= $project_page_fields['project_img_five']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_five']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_six']) : ?>
                <a href="<?= $project_page_fields['project_img_six']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_six']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_seven']) : ?>
                <a href="<?= $project_page_fields['project_img_seven']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_seven']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eight']) : ?>
                <a href="<?= $project_page_fields['project_img_eight']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_eight']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_nine']) : ?>
                <a href="<?= $project_page_fields['project_img_nine']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_nine']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_ten']) : ?>
                <a href="<?= $project_page_fields['project_img_ten']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_ten']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eleven']) : ?>
                <a href="<?= $project_page_fields['project_img_eleven']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_eleven']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_twelve']) : ?>
                <a href="<?= $project_page_fields['project_img_twelve']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_twelve']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_thirteen']) : ?>
                <a href="<?= $project_page_fields['project_img_thirteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_thirteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_fourteen']) : ?>
                <a href="<?= $project_page_fields['project_img_fourteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_fourteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_fifteen']) : ?>
                <a href="<?= $project_page_fields['project_img_fifteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_fifteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_sixteen']) : ?>
                <a href="<?= $project_page_fields['project_img_sixteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_sixteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_seventeen']) : ?>
                <a href="<?= $project_page_fields['project_img_seventeen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_seventeen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eighteen']) : ?>
                <a href="<?= $project_page_fields['project_img_eighteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_eighteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_nineteen']) : ?>
                <a href="<?= $project_page_fields['project_img_nineteen']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_nineteen']['url']; ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_twenty']) : ?>
                <a href="<?= $project_page_fields['project_img_twenty']['url']; ?>" data-ngthumb="<?= $project_page_fields['project_img_twenty']['url']; ?>"></a>
            <?php endif; ?>

            <?php if ($project_page_fields['project_video_one']) : ?>
                <a href="<?= $project_page_fields['project_video_one'] ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_video_two']) : ?>
                <a href="<?= $project_page_fields['project_video_two'] ?>"></a>
            <?php endif; ?>
            <?php if ($project_page_fields['project_video_three']) : ?>
                <a href="<?= $project_page_fields['project_video_three'] ?>"></a>
            <?php endif; ?>
        </div>
    </div>
    </div>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>