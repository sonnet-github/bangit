<?php
/**
 * Expert Services Reviews Block Template
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



    <div class="expert-services-reviews">
        <?php if(get_the_ID() == 11): ?>
            <div class="expert-it-services__vector">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 1653" fill="none">
                    <path d="M274.502 60.9992C-143.784 110.515 -591.959 129.75 -669.096 326.596C-746.232 523.442 -453.686 896.824 -82.7284 1184.48C290.575 1472.36 741.297 1675.38 1134.16 1650.07C1528.39 1625.84 1862.77 1375.01 1910.1 1037.83C1958.78 701.732 1715.72 278.85 1400.98 106.451C1083.89 -66.1658 692.789 11.483 274.502 60.9992Z" fill="#1F5FAC" fill-opacity="0.1"/>
                </svg>
            </div>
        <?php endif; ?>
        <div class="max-wrap margin-auto gutter">
            <div class="expert-services-reviews__heading text-center">
                <?php if($subHeading): ?>
                    <h3><?=$subHeading?></h3>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>
            
            <div class="expert-services-reviews__wrap flex gap-32">
                <?php while(have_rows('reviews')): the_row(); ?>
                    <div class="expert-services-reviews__item">
                        <div class="expert-services-reviews__item-inner">
                            <div class="expert-services-reviews__description">
                                <?=get_sub_field('description')?>
                            </div>

                            <div class="expert-services-reviews__item-rating">
                                <?php 
                                    $stars = get_sub_field('starts');
                                    $star = 1;
                                    ?>

                                <?php while($star <= $stars): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M13.0489 2.92705C13.3483 2.00574 14.6517 2.00574 14.9511 2.92705L16.9187 8.98278C17.0526 9.3948 17.4365 9.67376 17.8697 9.67376H24.2371C25.2058 9.67376 25.6086 10.9134 24.8249 11.4828L19.6736 15.2254C19.3231 15.4801 19.1764 15.9314 19.3103 16.3435L21.2779 22.3992C21.5773 23.3205 20.5228 24.0866 19.7391 23.5172L14.5878 19.7746C14.2373 19.5199 13.7627 19.5199 13.4122 19.7746L8.2609 23.5172C7.47719 24.0866 6.42271 23.3205 6.72206 22.3992L8.68969 16.3435C8.82356 15.9314 8.6769 15.4801 8.32642 15.2254L3.17511 11.4828C2.39139 10.9134 2.79417 9.67376 3.76289 9.67376H10.1303C10.5635 9.67376 10.9474 9.3948 11.0813 8.98278L13.0489 2.92705Z" fill="#FFD049"/>
                                    </svg>
                                <?php $star++; endwhile; ?>
                            </div>

                            <div class="expert-services-reviews__item-wrap flex gap-16">
                                <?php if(get_sub_field('image')): ?>
                                    <div class="expert-services-reviews__item-image">
                                        <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>">
                                    </div>
                                <?php endif; ?>

                                <div class="expert-services-reviews__item-name">
                                    <?php if(get_sub_field('customer_name')): ?>
                                        <h4><?=get_sub_field('customer_name')?></h4>
                                    <?php endif; ?>
                                    <?php if(get_sub_field('customer_subheading')): ?>
                                        <h5><?=get_sub_field('customer_subheading')?></h5>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

<?php endif; ?>