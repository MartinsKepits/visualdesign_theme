<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_header(); ?>
<?php
$homepage_hero_fields = get_field('homepage_hero_fields');
$homepage_collection_boxes_fields = get_field('homepage_collection_boxes_fields');
?>

<!-- Main Content Start -->
<main role="main">
    <?php if ($homepage_hero_fields && $homepage_hero_fields['show_home_hero']) : ?>
        <div class="block-hero animate__animated animate__fadeIn">
            <?php
            for ($i = 1; $i <= 5; $i++) :
                $slide = $homepage_hero_fields['home_hero_slide_' . numberToText($i)];

                if (
                    $slide['home_hero_img'] &&
                    $slide['home_hero_link']['title'] &&
                    $slide['home_hero_link']['url']
                ) :
                    $s_img = $slide['home_hero_img'];
                    $s_title = $slide['home_hero_link']['title'];
                    $s_link = $slide['home_hero_link']['url'];
            ?>
                    <div class="slide<?= $i === 1 ? ' quick-slide' : ''; ?>">
                        <div class="slide-img">
                            <img src="<?= $s_img; ?>" alt="<?= pll__('Image of') ?> <?= strtolower($s_title); ?> <?= pll__('project') ?>">
                            <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                        </div>
                        <div class="slide-title"><a href="<?= $s_link; ?>"><?= $s_title; ?></a></div>
                    </div>
            <?php
                endif;
            endfor;
            ?>
        </div>
    <?php endif; ?>

    <?php if ($homepage_collection_boxes_fields && $homepage_collection_boxes_fields['show_home_collection_boxes']) : ?>
        <div class="block-collection-boxes container-fluid">
            <?php
            for ($i = 1; $i <= 5; $i++) :
                $collection_box = $homepage_collection_boxes_fields['home_collection_page_' . numberToText($i)];

                if (
                    $collection_box['collection_page_link'] &&
                    $collection_box['collection_page_img']
                ) :
            ?>
                    <a class="collection-box" href="<?= $collection_box['collection_page_link']['url']; ?>">
                        <img class="collection-box-img" src="<?= $collection_box['collection_page_img']['url']; ?>" alt="<?= pll__('Image of') ?> <?= strtolower($collection_box['collection_page_link']['title']); ?> <?= pll__('category') ?>"/>
                        <h2 class="collection-box-title"><?= $collection_box['collection_page_link']['title']; ?></h2>
                    </a>
            <?php
                endif;
            endfor;
            ?>
        </div>
    <?php endif; ?>

    <?php get_template_part('blocks/block', 'partners'); ?>
    <?php get_template_part('blocks/block', 'reviews'); ?>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>