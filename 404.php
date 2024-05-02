<?php get_header(); ?>
<!-- Main Content Start -->
<main role="main">
    <div class="page-404-wrapper container d-flex flex-column justify-content-center align-items-center">
        <h1 class="page-404-title"><?= pll__("Sorry, this page isn't available."); ?></h1>
        <p class="page-404-desc"><?= pll__("Looks like this page have been removed. But you can view my projects in the categories below."); ?></p>
        <div class="page-404-nav">
            <?php
            $sub_categories = get_categories(array(
                'child_of' => 1,
                'hide_empty' => false
            ));
            ?>

            <?php if ($sub_categories) : ?>
                <?php foreach ($sub_categories as $sub_category) : ?>
                    <div>
                        <a href="<?= get_category_link($sub_category->term_id); ?>">
                            <?= $sub_category->name; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<!-- Main Content End -->
<?php get_footer(); ?>