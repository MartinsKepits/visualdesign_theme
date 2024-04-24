<?php get_header();
$category = get_queried_object();
?>

<!-- Main Content Start -->
<main role="main">
    <div class="projects-wrapper container animate__animated animate__fadeIn">
        <h1 class="category-title container"><?= pll__("Projects"); ?></h1>

        <div id="project-filters" class="project-filters container">
            <form role="search" method="get" id="search-form" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search-filter-wrapper">
                    <div class="search-filter">
                        <input type="text" id="project-search" class="project-search" placeholder="Search all..." value="<?= isset($_GET['s']) && $_GET['s'] !== "" ? $_GET['s'] : ""; ?>" name="s" autocomplete="off" />
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </form>

            <form id="tag-filter-form" class="tag-filter-form" action="<?= get_category_link(1) ?>" method="get">
                <input id="tag-filter" name="tag-filter" type="hidden">
                <div class="tag-filters">
                    <div class="tag-select">
                        <div class="tag-selected">
                            <span class="tag-selected-text"><?= pll__('All tags'); ?></span>
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

        <?php
        $s = get_search_query();
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;

        $args = array(
            's' => $s,
            'post_type' => 'post',
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
        );

        $posts_query = new WP_Query($args);
        ?>

        <div id="projects" class="projects row g-3">
            <?php if ($posts_query->have_posts()) : ?>
                <?php while ($posts_query->have_posts()) : $posts_query->the_post();
                    $tags = get_the_tags();
                    $tag_classes = '';

                    // Generate tag classes
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
                <?php endwhile; ?>

                <div class="pagination-wrapper">
                    <?php
                    // Display pagination if more than one page exists
                    $total_pages = $posts_query->max_num_pages;
                    if ($total_pages > 1) : ?>
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
<!-- Main Content End -->

<?php get_footer(); ?>