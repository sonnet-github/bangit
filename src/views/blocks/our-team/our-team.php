<?php
/**
 * Our team is always here for you Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $heading = get_field('heading') ? get_field('heading') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>
    <div class="our-team">
        <div class="max-wrap margin-auto gutter">
            <div class="our-team__heading text-center">
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>

            <div class="our-team__wrap flex gap-24">
                <?php while(have_rows('our_teams')): the_row(); ?>
                    <?php
                        $name = get_sub_field('name') ? get_sub_field('name') : "";
                        $title = get_sub_field('title') ? get_sub_field('title') : "";
                     ?>
                    <div class="our-team__item">
                        <div class="our-team__item-inner">
                            <?php if(get_sub_field('image')): ?>
                                <div class="our-team__item-image">
                                    <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>">
                                </div>
                            <?php endif; ?>
                            <div class="our-team__content text-center">
                                <h3><?=$name?></h3>

                                <?php if($title): ?>
                                    <h4><?=$title?></h4>
                                <?php endif; ?>

                                <?php if(have_rows('badges')): ?>
                                    <div class="our-team__badge flex gap-14 justify-center">
                                        <?php while(have_rows('badges')): the_row(); ?>
                                            <?php if(get_sub_field('badge')): ?>
                                                <div class="our-team__badge-item">
                                                    <span><?=get_sub_field('badge')?></span>
                                                </div>
                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

<?php endif; ?>