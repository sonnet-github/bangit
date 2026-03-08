<?php
/**
 * Common Questions and Answers Block Template
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



    <div class="results-helped">
        <div class="max-wrap margin-auto gutter">
            <div class="results-helped__heading text-center">
                <?php if($subHeading): ?>
                    <h3><?=$subHeading?></h3>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>
            
            <div class="results-helped__wrap swiper js-slider-container">
                <div class="swiper-wrapper">
                    <?php while(have_rows('slider')): the_row(); ?>
                        <div class="results-helped__item swiper-slide">
                            <div class="results-helped__item-wrap flex gap-20">
                                <?php if(get_sub_field('image')): ?>
                                    <div class="results-helped__item-left">
                                        <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>" title="<?=get_sub_field('image')['title']?>">
                                    </div>
                                <?php endif; ?>

                                <?php if(get_sub_field('middle_content')): ?>
                                    <div class="results-helped__item-mid">
                                        <?=get_sub_field('middle_content')?>
                                    </div>
                                <?php endif; ?>

                                <?php if(have_rows('right_stats')): ?>
                                    <div class="results-helped__item-right">
                                        <?php while(have_rows('right_stats')): the_row(); ?>
                                            <div class="results-helped__item-right-item flex gap-10 items-center">
                                                <?php if(get_sub_field('image')): ?>
                                                    <div class="results-helped__item-right-image">
                                                        <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>">
                                                    </div>
                                                <?php endif; ?>

                                                <?php if(get_sub_field('description')): ?>
                                                    <div class="results-helped__item-right-description">
                                                        <?=get_sub_field('description')?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="results-helped__buttons flex gap-25">
                    <a href="#!" class="results-helped__prev js-slide-prev"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21" fill="none"><path d="M9.65581 0.426434L0.43722 9.42289C-0.145884 9.99265 -0.145884 10.914 0.43722 11.4825L9.58673 20.4026C10.1698 20.9711 11.1161 20.9711 11.698 20.4026C12.2824 19.8329 12.2824 18.9115 11.698 18.3431L5.16083 11.9698L24.5238 11.971C25.3486 11.971 26.0161 11.3177 26.0161 10.5136C26.0161 9.71074 25.3486 9.0587 24.5238 9.0587H5.02628L11.7729 2.48721C12.356 1.91745 12.356 0.998624 11.7729 0.428893C11.4929 0.154614 11.1118 7.48167e-06 10.7141 7.48167e-06C10.3164 -0.00123915 9.93534 0.153353 9.65528 0.427616L9.65581 0.426434Z" fill="#1B3266" fill-opacity="0.4"/></svg></a>
                    <a href="#!" class="results-helped__next js-slide-next"><svg xmlns="http://www.w3.org/2000/svg" width="27" height="21" viewBox="0 0 27 21" fill="none"><path d="M16.3603 0.426434L25.5789 9.42289C26.162 9.99265 26.162 10.914 25.5789 11.4825L16.4294 20.4026C15.8463 20.9711 14.9 20.9711 14.3181 20.4026C13.7337 19.8329 13.7337 18.9115 14.3181 18.3431L20.8553 11.9698L1.49232 11.971C0.66753 11.971 0 11.3177 0 10.5136C0 9.71074 0.66753 9.0587 1.49232 9.0587H20.9898L14.2432 2.48721C13.6601 1.91745 13.6601 0.998624 14.2432 0.428893C14.5232 0.154614 14.9043 7.48167e-06 15.302 7.48167e-06C15.6997 -0.00123915 16.0808 0.153353 16.3608 0.427616L16.3603 0.426434Z" fill="#1B3266" fill-opacity="0.4"/></svg></a>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>