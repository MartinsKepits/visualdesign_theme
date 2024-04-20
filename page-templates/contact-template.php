<?php
/*
Template Name: Contact Template
*/
?>

<?php get_header(); ?>
<?php
$page_contact_fields = get_field('page_contact_fields');
?>

<!-- Main Content Start -->
<main role="main">
    <?php if ($page_contact_fields) : ?>
        <div class="contact-page-wrapper animate__animated animate__fadeIn">
            <div class="row container-fluid">
                <div class="col-lg-5 contact-img-col" <?php if ($page_contact_fields['contact_img']) : ?> style="background: url(<?= $page_contact_fields['contact_img']; ?>) no-repeat right top/cover" <?php endif; ?>></div>
                <div class="col-lg-7 contact-form-col">
                    <?php if ($page_contact_fields['contact_title']) : ?>
                        <h1><?= $page_contact_fields['contact_title'] ?></h1>
                    <?php endif; ?>
                    <?php if ($page_contact_fields['contact_desc']) : ?>
                        <p><?= $page_contact_fields['contact_desc'] ?></p>
                    <?php endif; ?>
                    <?php
                    while (have_posts()) : the_post();
                        // Output the post content
                        the_content();
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</main>
<!-- Main Content End -->

<?php get_footer(); ?>