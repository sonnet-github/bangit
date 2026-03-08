<?php
/**
 * Primary Service Partner Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $heading = get_field('heading') ? get_field('heading') : "";
    $button = get_field('button') ? get_field('button') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

    <div class="primary-service-partner">
        <div class="max-wrap margin-auto gutter">
            <div class="primary-service-partner__wrap">
                <div class="primary-service-partner__inner gutter text-center">
                    <?=$heading?>

                    <?php if($button): ?>
                        <div class="primary-service-partner__button">
                            <a href="<?=$button['url']?>" class="button button--primary" target="<?=$button['target']?>"><?=$button['title']?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>