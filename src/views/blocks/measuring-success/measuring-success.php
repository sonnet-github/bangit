<?php
/**
 * Homepage Hero Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $subHeading = get_field('subheading') ? get_field('subheading') : "";
    $heading = get_field('heading') ? get_field('heading') : "";
    $description = get_field('description') ? get_field('description') : "";
    $footerHeading = get_field('footer_heading') ? get_field('footer_heading') : "";
    $footerImage = get_field('footer_image') ? get_field('footer_image') : "";


    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>



    <div class="measuring-success">
        <div class="max-wrap margin-auto gutter">
            <div class="measuring-success__heading text-center">
                <?php if($subHeading): ?>
                    <h3><?=$subHeading?></h3>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>
            <div class="measuring-success__wrap flex">
                <div class="measuring-success__item-left">
                    <div class="measuring-success__item-inner">
                        <?=$description?>
                    </div>
                </div>
                <div class="measuring-success__item-right">
                    <div class="measuring-success__item-inner">
                        <div class="flex flex-wrap gap-20">
                            <?php if(have_rows('right_section')): ?>
                                <?php while(have_rows('right_section')): the_row(); ?>
                                    <div class="measuring-success__item-right-item">
                                        <?=get_sub_field('content')?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="measuring-success__footer text-center">
                <?php if($footerHeading): ?>
                    <h3><?=$footerHeading?></h3>
                <?php endif; ?>
                <?php if($footerImage): ?>
                    <img src="<?=$footerImage['url']?>" alt="<?=$footerImage['alt']?>" title="<?=$footerImage['title']?>">
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif; ?>