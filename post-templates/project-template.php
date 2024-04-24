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
            <?php 
            for ($i = 1; $i <= 20; $i++) :
                $image_key = 'project_img_' . numberToText($i);
                if (isset($project_page_fields[$image_key]) && $project_page_fields[$image_key]) :
            ?>
                    <a href="<?= $project_page_fields[$image_key]['url']; ?>" data-ngthumb="<?= $project_page_fields[$image_key]['url']; ?>"></a>
            <?php
                endif;
            endfor;
            ?>

            <?php 
            for ($i = 1; $i <= 3; $i++) :
                $video_key = 'project_video_' . numberToText($i);
                if (isset($project_page_fields[$video_key]) && $project_page_fields[$video_key]) :
            ?>
                    <a href="<?= $project_page_fields[$video_key]; ?>"></a>
            <?php
                endif;
            endfor;
            ?>
        </div>
    </div>
    </div>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>