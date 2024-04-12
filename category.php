<?php get_header();
$category = get_queried_object();
?>

<!-- Main Content Start -->
<main role="main">
    <div class="projects-wrapper container animate__animated animate__fadeIn">
        <div id="project-filters" class="project-filters container" data-category-id="<?php echo $category->term_id; ?>">
            <?php
            $category_posts = get_posts(array(
                'category' => $category->term_id,
                'posts_per_page' => 1, // Fetch only one post to check if the category has any posts
            ));
            ?>

            <?php if ($category_posts) : ?>
                <div class="search-filter-wrapper">
                    <div class="search-filter">
                        <input type="text" id="project-search" class="project-search" name="project-search" placeholder="<?= pll__('Search...'); ?>" autocomplete="off">
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
                                    echo '<div class="select-button" data-filter=".' . esc_attr($tag->name) . '" data-tag-id="' . esc_attr($tag->term_id) . '">' . esc_html($tag->name) . '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <div id="projects" class="projects row g-3"></div>
        <div class="no-projects-found-text">No projects found</div>
        <div class="pagination-wrapper">
            <div id="pagination" class="pagination"></div>
        </div>
    </div>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>