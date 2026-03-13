<?php
/**
 * Two Column Image POST Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

<div class="two-column-image-post flex gap-24">
    <div class="two-column-image-post__image">
        <?php if(get_field('left_image')): ?>
            <img src="<?=get_field('left_image')['url']?>" alt="<?=get_field('left_image')['alt']?>">
        <?php endif; ?>
    </div>
    <div class="two-column-image-post__image">
        <?php if(get_field('right_image')): ?>
            <img src="<?=get_field('right_image')['url']?>" alt="<?=get_field('right_image')['alt']?>">
        <?php endif; ?>
    </div>
</div>


<?php endif; ?>