<?php
$block_partners_fields = get_field('block_partners_fields');
?>

<?php if ($block_partners_fields['show_block_partners']) : ?>
    <div class="partners-wrapper container">
        <h3 class="partners-title"><?= pll__('Partners'); ?></h3>
        <div id="partners-slider" class="partners-slider">
            <?php
            for ($i = 1; $i <= 10; $i++) :
                $partner = $block_partners_fields["partner_" . numberToText($i) . "_fields"];
                if ($partner['partner_title'] && $partner['partner_link'] && $partner['partner_logo']) :
            ?>
                    <a href="<?= $partner['partner_link']; ?>" target="_blank" data-title="<?= $partner['partner_title']; ?>">
                        <img src="<?= $partner['partner_logo']; ?>" alt="<?= $partner['partner_title']; ?> logo">
                    </a>
            <?php
                endif;
            endfor;
            ?>
        </div>
        <div id="partner-info" class="partner-info">
            <span id="partner-title" class="partner-title"></span>
            <a href="#" id="partner-link" class="partner-link" target="_blank">
                <?= pll__('View Partner'); ?>
            </a>
        </div>
    </div>
<?php endif; ?>