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
        <div class="block-hero">
            <?php
            if (
                $homepage_hero_fields['home_hero_slide_one']['home_hero_img'] &&
                $homepage_hero_fields['home_hero_slide_one']['home_hero_link']['title'] &&
                $homepage_hero_fields['home_hero_slide_one']['home_hero_link']['url']
            ) :
                $s_img = $homepage_hero_fields['home_hero_slide_one']['home_hero_img'];
                $s_title = $homepage_hero_fields['home_hero_slide_one']['home_hero_link']['title'];
                $s_link = $homepage_hero_fields['home_hero_slide_one']['home_hero_link']['url'];
            ?>
                <div class="slide">
                    <div class="slide-img" style="background: url(<?= $s_img; ?>) no-repeat center top/cover">
                        <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                    </div>
                    <?php if ($s_title) : ?>
                        <h2><a href="<?= $s_link; ?>"><?= $s_title; ?></a></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php
            if (
                $homepage_hero_fields['home_hero_slide_two']['home_hero_img'] &&
                $homepage_hero_fields['home_hero_slide_two']['home_hero_link']['title'] &&
                $homepage_hero_fields['home_hero_slide_two']['home_hero_link']['url']
            ) :
                $s_img = $homepage_hero_fields['home_hero_slide_two']['home_hero_img'];
                $s_title = $homepage_hero_fields['home_hero_slide_two']['home_hero_link']['title'];
                $s_link = $homepage_hero_fields['home_hero_slide_two']['home_hero_link']['url'];
            ?>
                <div class="slide">
                    <div class="slide-img" style="background: url(<?= $s_img; ?>) no-repeat center top/cover">
                        <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                    </div>
                    <?php if ($s_title) : ?>
                        <h2><a href="<?= $s_link; ?>"><?= $s_title; ?></a></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php
            if (
                $homepage_hero_fields['home_hero_slide_three']['home_hero_img'] &&
                $homepage_hero_fields['home_hero_slide_three']['home_hero_link']['title'] &&
                $homepage_hero_fields['home_hero_slide_three']['home_hero_link']['url']
            ) :
                $s_img = $homepage_hero_fields['home_hero_slide_three']['home_hero_img'];
                $s_title = $homepage_hero_fields['home_hero_slide_three']['home_hero_link']['title'];
                $s_link = $homepage_hero_fields['home_hero_slide_three']['home_hero_link']['url'];
            ?>
                <div class="slide">
                    <div class="slide-img" style="background: url(<?= $s_img; ?>) no-repeat center top/cover">
                        <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                    </div>
                    <?php if ($s_title) : ?>
                        <h2><a href="<?= $s_link; ?>"><?= $s_title; ?></a></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php
            if (
                $homepage_hero_fields['home_hero_slide_four']['home_hero_img'] &&
                $homepage_hero_fields['home_hero_slide_four']['home_hero_link']['title'] &&
                $homepage_hero_fields['home_hero_slide_four']['home_hero_link']['url']
            ) :
                $s_img = $homepage_hero_fields['home_hero_slide_four']['home_hero_img'];
                $s_title = $homepage_hero_fields['home_hero_slide_four']['home_hero_link']['title'];
                $s_link = $homepage_hero_fields['home_hero_slide_four']['home_hero_link']['url'];
            ?>
                <div class="slide">
                    <div class="slide-img" style="background: url(<?= $s_img; ?>) no-repeat center top/cover">
                        <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                    </div>
                    <?php if ($s_title) : ?>
                        <h2><a href="<?= $s_link; ?>"><?= $s_title; ?></a></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php
            if (
                $homepage_hero_fields['home_hero_slide_five']['home_hero_img'] &&
                $homepage_hero_fields['home_hero_slide_five']['home_hero_link']['title'] &&
                $homepage_hero_fields['home_hero_slide_five']['home_hero_link']['url']
            ) :
                $s_img = $homepage_hero_fields['home_hero_slide_five']['home_hero_img'];
                $s_title = $homepage_hero_fields['home_hero_slide_five']['home_hero_link']['title'];
                $s_link = $homepage_hero_fields['home_hero_slide_five']['home_hero_link']['url'];
            ?>
                <div class="slide">
                    <div class="slide-img" style="background: url(<?= $s_img; ?>) no-repeat center top/cover">
                        <a href="<?= $s_link; ?>" class="slide-view-btn"><?= pll__('View Project'); ?></a>
                    </div>
                    <?php if ($s_title) : ?>
                        <h2><a href="<?= $s_link; ?>"><?= $s_title; ?></a></h2>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ($homepage_collection_boxes_fields && $homepage_collection_boxes_fields['show_home_collection_boxes']) : ?>
        <div class="block-collection-boxes">
            <?php if (
                $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_link'] &&
                $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_img']
            ) : ?>
                <a class="collection-box" href="<?= $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_link']['url']; ?>">
                    <img class="collection-box-img" src="<?= $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_img']['url']; ?>" alt="<?= $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_img']['alt']; ?>" />
                    <h2 class="collection-box-title"><?= $homepage_collection_boxes_fields['home_collection_page_one']['collection_page_link']['title']; ?></h2>
                </a>
            <?php endif; ?>

            <?php if (
                $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_link'] &&
                $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_img']
            ) : ?>
                <a class="collection-box" href="<?= $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_link']['url']; ?>">
                    <img class="collection-box-img" src="<?= $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_img']['url']; ?>" alt="<?= $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_img']['alt']; ?>" />
                    <h2 class="collection-box-title"><?= $homepage_collection_boxes_fields['home_collection_page_two']['collection_page_link']['title']; ?></h2>
                </a>
            <?php endif; ?>

            <?php if (
                $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_link'] &&
                $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_img']
            ) : ?>
                <a class="collection-box" href="<?= $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_link']['url']; ?>">
                    <img class="collection-box-img" src="<?= $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_img']['url']; ?>" alt="<?= $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_img']['alt']; ?>" />
                    <h2 class="collection-box-title"><?= $homepage_collection_boxes_fields['home_collection_page_three']['collection_page_link']['title']; ?></h2>
                </a>
            <?php endif; ?>

            <?php if (
                $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_link'] &&
                $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_img']
            ) : ?>
                <a class="collection-box" href="<?= $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_link']['url']; ?>">
                    <img class="collection-box-img" src="<?= $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_img']['url']; ?>" alt="<?= $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_img']['alt']; ?>" />
                    <h2 class="collection-box-title"><?= $homepage_collection_boxes_fields['home_collection_page_four']['collection_page_link']['title']; ?></h2>
                </a>
            <?php endif; ?>

            <?php if (
                $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_link'] &&
                $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_img']
            ) : ?>
                <a class="collection-box" href="<?= $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_link']['url']; ?>">
                    <img class="collection-box-img" src="<?= $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_img']['url']; ?>" alt="<?= $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_img']['alt']; ?>" />
                    <h2 class="collection-box-title"><?= $homepage_collection_boxes_fields['home_collection_page_five']['collection_page_link']['title']; ?></h2>
                </a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>