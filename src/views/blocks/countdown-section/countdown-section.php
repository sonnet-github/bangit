<?php
/**
 * Countdown Section Block Template
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

    <div class="countdown-section">
        <div class="max-wrap margin-auto gutter">
            <div class="countdown-section__wrap justify-center flex gap-24">
                <?php while(have_rows('items')): the_row(); ?>
                    <div class="countdown-section__item">
                        <h3><?=get_sub_field('heading')?></h3>

                        <?php if(get_sub_field('subheading')): ?>
                            <h4><?=get_sub_field('subheading')?></h4>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

<?php endif; ?>