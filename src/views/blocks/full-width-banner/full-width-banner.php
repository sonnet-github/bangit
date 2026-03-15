<?php
/**
 * Full width image Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $image = get_field('image') ? get_field('image') : '';

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>
    <div class="full-width-image">
        <?php if($image): ?>
            <img src="<?=$image['url']?>" alt="<?=$image['alt']?>">
        <?php endif; ?>
    </div>

<?php endif; ?>