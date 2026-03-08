<?php
/**
 * Expert IT Services Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $subHeading = get_field('subheading') ? get_field('subheading') : "";
    $heading = get_field('heading') ? get_field('heading') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>



    <div class="expert-it-services">
        <div class="expert-it-services__vector">
            <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 1653" fill="none">
                <path d="M274.502 60.9992C-143.784 110.515 -591.959 129.75 -669.096 326.596C-746.232 523.442 -453.686 896.824 -82.7284 1184.48C290.575 1472.36 741.297 1675.38 1134.16 1650.07C1528.39 1625.84 1862.77 1375.01 1910.1 1037.83C1958.78 701.732 1715.72 278.85 1400.98 106.451C1083.89 -66.1658 692.789 11.483 274.502 60.9992Z" fill="#1F5FAC" fill-opacity="0.1"/>
            </svg>
        </div>
        <div class="max-wrap margin-auto gutter">
            <div class="expert-it-services__heading text-center">
                <?php if($subHeading): ?>
                    <h3><?=$subHeading?></h3>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>

            <?php if(have_rows('services')): ?>
                <div class="expert-it-services__wrap flex gap-25">
                    <?php while(have_rows('services')): the_row(); ?>
                        <div class="expert-it-services__item">
                            <div class="expert-it-services__item-inner">
                                <a href="<?=get_sub_field('item_link')['url']?>" target="<?=get_sub_field('item_link')['target']?>">
                                    <div class="expert-it-services__item-image">
                                        <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>" title="<?=get_sub_field('image')['title']?>">
                                    </div>
                                    <h3><?=get_sub_field('heading')?></h3>
                                    <div class="expert-it-services__description">
                                        <?=get_sub_field('description')?>
                                    </div>
                                </a>
                            </div>
                            <div class="expert-it-services__button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"><path d="M14.3519 38.1759C14.3519 25.0182 25.0183 14.3519 38.1759 14.3519H47.6482C55.5745 14.3519 62 7.9263 62 0V52C62 57.5228 57.5228 62 52 62H0C7.9263 62 14.3519 55.5745 14.3519 47.6482V38.1759Z" fill="#0072DA"/><circle cx="39" cy="38.5" r="17.5" fill="white"/><path d="M41.2955 32.2662L46.9649 37.8811C47.3235 38.2367 47.3235 38.8117 46.9649 39.1665L41.338 44.7339C40.9794 45.0887 40.3974 45.0887 40.0396 44.7339C39.6801 44.3783 39.6801 43.8033 40.0396 43.4485L44.0599 39.4707L32.1517 39.4715C31.6444 39.4715 31.2339 39.0637 31.2339 38.5619C31.2339 38.0608 31.6444 37.6538 32.1517 37.6538H44.1427L39.9935 33.5523C39.6348 33.1967 39.6348 32.6233 39.9935 32.2677C40.1657 32.0965 40.4 32 40.6446 32C40.8892 31.9992 41.1236 32.0957 41.2958 32.2669L41.2955 32.2662Z" fill="#1B3266"/></svg>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>