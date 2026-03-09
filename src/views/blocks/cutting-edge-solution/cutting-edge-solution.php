<?php
/**
 * Cutting Edge Solutions Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    $image = get_field('image') ? get_field('image') : "";
    $badge_icon = get_field('badge_icon') ? get_field('badge_icon') : "";
    $badge_color = get_field('badge_color') ? get_field('badge_color') : "";
    $badge_text_color = get_field('badge_text_color') ? get_field('badge_text_color') : "";
    $badge_heading = get_field('badge_heading') ? get_field('badge_heading') : "";
    $badge_subheading = get_field('badge_subheading') ? get_field('badge_subheading') : "";
    $right_section = get_field('right_section') ? get_field('right_section') : "";
    $button = get_field('button') ? get_field('button') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>
    <div class="cutting-edge-solutions">
        <div class="max-wrap margin-auto gutter">
            <div class="cutting-edge-solutions__wrap flex gap-110">
                <div class="cutting-edge-solutions__left">
                    <div class="cutting-edge-solutions__image">
                        <?php if($image): ?>
                            <img src="<?=$image['url']?>" alt="<?=$image['alt']?>">
                        <?php endif; ?>

                        <?php if($badge_icon || $badge_heading || $badge_subheading): ?>
                            <div class="cutting-edge-solutions__badge" style="color: <?=$badge_text_color?>; background-color: <?=$badge_color?>;">
                                <div class="cutting-edge-solutions__ba dge-wrap flex items-center gap-14">
                                    <?php if($badge_icon): ?>
                                        <div class="cutting-edge-solutions__badge-left">
                                            <img src="<?=$badge_icon['url']?>" alt="<?=$badge_icon['alt']?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if($badge_heading || $badge_subheading): ?>
                                        <div class="cutting-edge-solutions__badge-right" style="color: <?=$badge_text_color?>;">
                                            <?php if($badge_heading): ?>
                                                <h4><?=$badge_heading?></h4>
                                                <h5><?=$badge_subheading?></h5>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="cutting-edge-solutions__right">
                    <div class="cutting-edge-solutions__right-inner">
                        <?=$right_section?>

                        <?php if($button): ?>
                            <div class="cutting-edge-solutions__right-button">
                                <a href="<?=$button['url']?>" class="button button--primary" target="<?=$button['target']?>"><?=$button['title']?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>