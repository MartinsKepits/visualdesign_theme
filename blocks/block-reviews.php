<?php
$block_reviews_fields = get_field('block_reviews_fields');
?>

<?php if ($block_reviews_fields['show_block_reviews']) : ?>
    <div class="block-reviews">
        <div class="container">
            <div class="block-reviews-title"><?= pll__('Client Reviews'); ?></div>
        </div>
        <div id="block-reviews-items" class="block-reviews-items container">
            <?php
            for ($i = 1; $i <= 5; $i++) :
                $review_fields = $block_reviews_fields['review_' . numberToText($i) . '_fields'];

                if (
                    $review_fields['review_name'] &&
                    $review_fields['review_company'] &&
                    $review_fields['review_desc']
                ) :
            ?>
                    <div class="review-wrapper">
                        <p class="review-desc"><?= $review_fields['review_desc']; ?></p>
                        <div class="review-info">
                            <span class="review-title"><?= $review_fields['review_name']; ?></span>
                            <span class="review-company"><?= $review_fields['review_company']; ?></span>
                        </div>
                    </div>
            <?php
                endif;
            endfor;
            ?>
        </div>
    </div>
<?php endif; ?>