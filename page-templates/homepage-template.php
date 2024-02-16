<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_header(); ?>
<?php
$homepage_hero_fields = get_field('homepage_hero_fields');
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
</main>
<!-- Main Content End -->

<?php get_footer(); ?>