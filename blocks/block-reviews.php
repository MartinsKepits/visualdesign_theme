<?php
$block_reviews_fields = get_field('block_reviews_fields');
?>

<?php if ($block_reviews_fields['show_block_reviews']) : ?>
    <div class="block-reviews">
        <div class="container">
            <h4 class="block-reviews-title"><?= pll__('Client Reviews'); ?></h4>
        </div>
        <div id="block-reviews-items" class="block-reviews-items container">
            <?php if (
                $block_reviews_fields['review_one_fields']['review_name'] &&
                $block_reviews_fields['review_one_fields']['review_company'] &&
                $block_reviews_fields['review_one_fields']['review_desc']
            ) : ?>
                <div class="review-wrapper">
                    <p class="review-desc"><?= $block_reviews_fields['review_one_fields']['review_desc']; ?></p>
                    <div class="review-info">
                        <span class="review-title"><?= $block_reviews_fields['review_one_fields']['review_name']; ?></span>
                        <span class="review-company"><?= $block_reviews_fields['review_one_fields']['review_company']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (
                $block_reviews_fields['review_two_fields']['review_name'] &&
                $block_reviews_fields['review_two_fields']['review_company'] &&
                $block_reviews_fields['review_two_fields']['review_desc']
            ) : ?>
                <div class="review-wrapper">
                    <p class="review-desc"><?= $block_reviews_fields['review_two_fields']['review_desc']; ?></p>
                    <div class="review-info">
                        <span class="review-title"><?= $block_reviews_fields['review_two_fields']['review_name']; ?></span>
                        <span class="review-company"><?= $block_reviews_fields['review_two_fields']['review_company']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (
                $block_reviews_fields['review_three_fields']['review_name'] &&
                $block_reviews_fields['review_three_fields']['review_company'] &&
                $block_reviews_fields['review_three_fields']['review_desc']
            ) : ?>
                <div class="review-wrapper">
                    <p class="review-desc"><?= $block_reviews_fields['review_three_fields']['review_desc']; ?></p>
                    <div class="review-info">
                        <span class="review-title"><?= $block_reviews_fields['review_three_fields']['review_name']; ?></span>
                        <span class="review-company"><?= $block_reviews_fields['review_three_fields']['review_company']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (
                $block_reviews_fields['review_four_fields']['review_name'] &&
                $block_reviews_fields['review_four_fields']['review_company'] &&
                $block_reviews_fields['review_four_fields']['review_desc']
            ) : ?>
                <div class="review-wrapper">
                    <p class="review-desc"><?= $block_reviews_fields['review_four_fields']['review_desc']; ?></p>
                    <div class="review-info">
                        <span class="review-title"><?= $block_reviews_fields['review_four_fields']['review_name']; ?></span>
                        <span class="review-company"><?= $block_reviews_fields['review_four_fields']['review_company']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (
                $block_reviews_fields['review_five_fields']['review_name'] &&
                $block_reviews_fields['review_five_fields']['review_company'] &&
                $block_reviews_fields['review_five_fields']['review_desc']
            ) : ?>
                <div class="review-wrapper">
                    <p class="review-desc"><?= $block_reviews_fields['review_five_fields']['review_desc']; ?></p>
                    <div class="review-info">
                        <span class="review-title"><?= $block_reviews_fields['review_five_fields']['review_name']; ?></span>
                        <span class="review-company"><?= $block_reviews_fields['review_five_fields']['review_company']; ?></span>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>