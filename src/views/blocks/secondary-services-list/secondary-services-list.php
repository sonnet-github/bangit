<?php
/**
 * Secondary Services Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  

    $anchorCounter = 0;
    $banner_icon = get_field('banner_icon') ? get_field('banner_icon') : "";
    $banner_background = get_field('banner_background') ? get_field('banner_background') : "";
    $banner_heading = get_field('banner_heading') ? get_field('banner_heading') : "";
    $banner_description = get_field('banner_description') ? get_field('banner_description') : "";
    $banner_button = get_field('banner_button') ? get_field('banner_button') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else:
?>

    <div class="secondary-services-list">
        <div class="max-wrap margin-auto gutter">
            <div class="secondary-services-list__wrap flex gap-50">
                <div class="secondary-services-list__left">
                    <?php if(have_rows('left_content_widgets')): ?>
                        <?php while(have_rows('left_content_widgets')): the_row(); ?>
                            <?php if( get_row_layout() == 'wysiwyg_section' ): ?>
                                <?php if(get_sub_field('anchor_heading')): ?>
                                    <?php $anchorCounter++; ?>
                                <?php endif; ?>

                                <div id="<?php if(get_sub_field('anchor_heading')): ?><?=strtolower(str_replace(" ", "-", get_sub_field('anchor_heading')))?><?php endif; ?>" class="secondary-services-list__item secondary-services-list__item--wysiwyg_section">
                                    <?=get_sub_field('wysiwyg_content');?>
                                </div>

                            <?php elseif( get_row_layout() == 'full_width_image' ): ?>
                                <?php if(get_sub_field('anchor_heading')): ?>
                                    <?php $anchorCounter++; ?>
                                <?php endif; ?>
                                
                                <div id="<?php if(get_sub_field('anchor_heading')): ?><?=strtolower(str_replace(" ", "-", get_sub_field('anchor_heading')))?><?php endif; ?>" class="secondary-services-list__item secondary-services-list__item--full_width_image">
                                    <?php if(get_sub_field('image_src')): ?>
                                        <img src="<?=get_sub_field('image_src')['url']?>" alt="<?=get_sub_field('image_src')['alt']?>">
                                    <?php endif; ?>
                                </div>

                            <?php elseif( get_row_layout() == '2_column_image' ): ?>
                                <?php if(get_sub_field('anchor_heading')): ?>
                                    <?php $anchorCounter++; ?>
                                <?php endif; ?>
                                
                                <div id="<?php if(get_sub_field('anchor_heading')): ?><?=strtolower(str_replace(" ", "-", get_sub_field('anchor_heading')))?><?php endif; ?>" class="secondary-services-list__item secondary-services-list__item--2_column_image" id="">
                                    <div class="secondary-services-list__item-wrap flex gap-24">
                                        <?php if(get_sub_field('image_left')): ?>
                                            <img src="<?=get_sub_field('image_left')['url']?>" alt="<?=get_sub_field('image_left')['alt']?>">
                                        <?php endif; ?>
                                        <?php if(get_sub_field('image_right')): ?>
                                            <img src="<?=get_sub_field('image_right')['url']?>" alt="<?=get_sub_field('image_right')['alt']?>">
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="secondary-services-list__right">
                    <div class="secondary-services-list__right-wrap">
                        <?php if(get_field('right_section_heading') || $anchorCounter): ?>
                            <div class="secondary-services-list__anchor">
                                <?php if(get_field('right_section_heading')): ?>
                                    <h3><?=get_field('right_section_heading')?></h3>    
                                <?php endif; ?>

                                <?php if($anchorCounter): ?>
                                    <ul>
                                        <?php while(have_rows('left_content_widgets')): the_row(); ?>
                                            <?php if(get_sub_field('anchor_heading')): ?>
                                                <li><a href="#<?=strtolower(str_replace(" ", "-", get_sub_field('anchor_heading')))?>"><?=get_sub_field('anchor_heading')?> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.336 7.84518L6.16386 15.0173L4.98535 13.8388L12.1575 6.66667H5.83603V5H15.0027V14.1667H13.336V7.84518Z" fill="white"/></svg></a></li>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>

                        <?php if($banner_icon || $banner_background || $banner_heading || $banner_description || $banner_button): ?>
                            <div class="secondary-services-list__banner" style="<?= ($banner_background) ? "background-image: url(".$banner_background['url'].");" : "" ?>">
                                <div class="secondary-services-list__banner-inner">
                                    <?php if($banner_icon): ?>
                                        <div class="secondary-services-list__banner-icon">
                                            <img src="<?=$banner_icon['url']?>" alt="<?=$banner_icon['alt']?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if($banner_heading): ?>
                                        <h3><?=$banner_heading?></h3>
                                    <?php endif; ?>
                                    <?php if($banner_description): ?>
                                        <p><?=$banner_description?></p>
                                    <?php endif; ?>
                                    <?php if($banner_button): ?>
                                        <a href="<?=$banner_button['url']?>" class="button button--primary" target="<?=$banner_button['target']?>"><?=$banner_button['title']?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>