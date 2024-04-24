<?php
get_header();
$category = get_queried_object();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => get_option('posts_per_page'),
    'paged' => $paged,
    'cat' => $category->term_id
);

// If tag filter is set, include it in query args
if (isset($_GET['tag-filter'])) {
    $selected_tag = $_GET['tag-filter'];
    $args['tag'] = $selected_tag === 'all' ? '' : $selected_tag;
}

$posts_query = new WP_Query($args);
?>

<main role="main">
    <div class="projects-wrapper container animate__animated animate__fadeIn">
        <h1 class="category-title container"><?= single_cat_title('', true) ?></h1>

        <?php if ($posts_query->have_posts()) : ?>
            <div id="project-filters" class="project-filters container">
                <form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <div class="search-filter-wrapper">
                        <div class="search-filter">
                            <input type="text" id="project-search" class="project-search" placeholder="Search all..." value="" name="s" autocomplete="off" />
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </form>

                <form id="tag-filter-form" class="tag-filter-form" action="<?= get_category_link($category->term_id) ?>" method="get">
                    <input id="tag-filter" name="tag-filter" type="hidden">
                    <div class="tag-filters">
                        <div class="tag-select">
                            <div class="tag-selected">
                                <span class="tag-selected-text"><?= isset($_GET['tag-filter']) && $_GET['tag-filter'] !== "" ? $_GET['tag-filter'] : pll__('All tags'); ?></span>
                                <i></i>
                            </div>
                            <div class="select-options">
                                <?php
                                $tags = get_terms(array(
                                    'taxonomy' => 'post_tag',
                                    'object_ids' => get_objects_in_term($category->term_id, 'category'),
                                ));

                                echo " <div class='select-button' data-value=''>" . pll__('All tags') . "</div>";

                                foreach ($tags as $tag) {
                                    $selected = isset($_GET['tag-filter']) && $_GET['tag-filter'] === $tag->slug ? 'selected' : '';
                                    echo " <div class='select-button' data-value='$tag->slug' $selected>$tag->name</div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        <?php endif; ?>

        <div id="projects" class="projects row g-3">
            <?php if ($posts_query->have_posts()) : ?>
                <?php while ($posts_query->have_posts()) : $posts_query->the_post();
                    $tags = get_the_tags();
                    $project_item_image_url = get_the_post_thumbnail_url();
                ?>
                    <a class="project col-xl-4 col-lg-4 col-md-6 col-sm-12" href="<?php the_permalink(); ?>">
                        <?php if ($project_item_image_url) : ?>
                            <div class="project-img-wrapper">
                                <img class="project-img" src="<?= $project_item_image_url; ?>" alt="<?= the_title(); ?>" />
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
                <?php endwhile;
                wp_reset_postdata(); ?>


                <div class="pagination-wrapper">
                    <?php
                    $total_pages = $posts_query->max_num_pages; ?>
                    <?php if ($total_pages > 1) : ?>
                        <div class="pagination">
                            <?php
                            echo paginate_links(array(
                                'base' => add_query_arg('paged', '%#%'),
                                'format' => '?paged=%#%',
                                'current' => max(1, $paged),
                                'total' => $total_pages,
                                'prev_text' => '<i class="fa-solid fa-angles-left"></i>',
                                'next_text' => '<i class="fa-solid fa-angles-right"></i>',
                            ));
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="no-projects-found-text">
                    <span><?= pll__('No Projects Found.'); ?></span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>