<?php get_header();
$category = get_queried_object();
?>

<!-- Main Content Start -->
<main role="main">
    <div class="projects-wrapper container animate__animated animate__fadeIn">
        <?php if (have_posts()) : ?>
            <div id="project-filters" class="project-filters container">
                <div class="search-filter-wrapper">
                    <div class="search-filter">
                        <input type="text" id="project-search" class="project-search" placeholder="<?= pll__('Search...'); ?>">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="tag-filters">
                    <div class="tag-select">
                        <div class="tag-selected">
                            <span class="tag-selected-text"><?= pll__('All'); ?></span>
                            <i></i>
                        </div>
                        <div class="select-options">
                            <div class="select-button" data-filter="*"><?= pll__('All'); ?></div>
                            <?php
                            $tags = get_terms(array(
                                'taxonomy' => 'post_tag',
                                'object_ids' => get_objects_in_term($category->term_id, 'category'),
                            ));

                            if ($tags && !is_wp_error($tags)) {
                                foreach ($tags as $tag) {
                                    echo '<div class="select-button" data-filter=".' . esc_attr($tag->name) . '">' . esc_html($tag->name) . '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div id="projects" class="projects row g-3">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <?php
                    $tags = get_the_tags();
                    $tag_classes = '';

                    if ($tags) {
                        foreach ($tags as $tag) {
                            $tag_classes .= $tag->name . ' ';
                        }
                    }

                    $project_item_image_url = get_the_post_thumbnail_url();
                    ?>

                    <a class="project col-xl-4 col-lg-4 col-md-6 col-sm-12 <?= $tag_classes; ?>" href="<?php the_permalink(); ?>">
                        <?php if ($project_item_image_url) : ?>
                            <div class="project-img-wrapper">
                                <img class="project-img" src="<?= $project_item_image_url; ?>" />
                                <div class="project-img-bg">
                                    <span><?= pll__('View Project'); ?></span>
                                </div>
                            </div>
                            <div class="project-info">
                                <div class="project-title"><?= the_title(); ?></div>
                                <div class="project-tags">
                                    <?php if ($tags) : ?>
                                        <?php foreach ($tags as $tag) : ?>
                                            <div class="project-tag"><?= $tag->name ?></div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endwhile; ?>
                <div class="no-projects-found-text<?php if (!have_posts()) : ?> show-no-projects-found<?php endif; ?>">
                    <span><?= pll__('No Projects Found.'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>