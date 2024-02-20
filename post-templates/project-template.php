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
        <div id="project-images" class="project-images row g-3 animate__animated animate__fadeIn">
            <?php if ($project_page_fields['project_img_one']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_one']['url']; ?>" alt="<?= $project_page_fields['project_img_one']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_two']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_two']['url']; ?>" alt="<?= $project_page_fields['project_img_two']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_three']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_three']['url']; ?>" alt="<?= $project_page_fields['project_img_three']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_four']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_four']['url']; ?>" alt="<?= $project_page_fields['project_img_four']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_five']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_five']['url']; ?>" alt="<?= $project_page_fields['project_img_five']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_six']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_six']['url']; ?>" alt="<?= $project_page_fields['project_img_six']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_seven']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_seven']['url']; ?>" alt="<?= $project_page_fields['project_img_seven']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eight']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_eight']['url']; ?>" alt="<?= $project_page_fields['project_img_eight']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_nine']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_nine']['url']; ?>" alt="<?= $project_page_fields['project_img_nine']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_ten']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_ten']['url']; ?>" alt="<?= $project_page_fields['project_img_ten']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eleven']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_eleven']['url']; ?>" alt="<?= $project_page_fields['project_img_eleven']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_twelve']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_twelve']['url']; ?>" alt="<?= $project_page_fields['project_img_twelve']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_thirteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_thirteen']['url']; ?>" alt="<?= $project_page_fields['project_img_thirteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_fourteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_fourteen']['url']; ?>" alt="<?= $project_page_fields['project_img_fourteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_fifteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_fifteen']['url']; ?>" alt="<?= $project_page_fields['project_img_fifteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_sixteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_sixteen']['url']; ?>" alt="<?= $project_page_fields['project_img_sixteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_seventeen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_seventeen']['url']; ?>" alt="<?= $project_page_fields['project_img_seventeen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_eighteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_eighteen']['url']; ?>" alt="<?= $project_page_fields['project_img_eighteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_nineteen']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_nineteen']['url']; ?>" alt="<?= $project_page_fields['project_img_nineteen']['alt']; ?>"></div>
            <?php endif; ?>
            <?php if ($project_page_fields['project_img_twenty']) : ?>
                <div class="image col-xl-4 col-lg-4 col-md-6 col-sm-12 px-2"><img src="<?= $project_page_fields['project_img_twenty']['url']; ?>" alt="<?= $project_page_fields['project_img_twenty']['alt']; ?>"></div>
            <?php endif; ?>
        </div>
    </div>
    </div>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>