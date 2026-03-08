<?php
/**
 * Primary Services Insights Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $heading = get_field('heading') ? get_field('heading') : "";
    $description = get_field('description') ? get_field('description') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>



    <div class="primary-services-insights">
        <div class="max-wrap margin-auto gutter">
            <div class="primary-services-insights__heading text-center">
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>

                <?php if($description): ?>
                    <?=$description?>
                <?php endif; ?>
            </div>
            
            <div class="primary-services-insights__wrap expert-it-services__wrap flex gap-30">
                <?php for($x = 1; $x <= 3; $x++): ?>
                    <div class="expert-it-services__item primary-services-insights__item">
                        <div class="expert-it-services__item-inner primary-services-insights__item-inner">
                            <a href="#!">
                                <div class="expert-it-services__item-image primary-services-insights__item-image">
                                    <img src="<?=get_template_directory_uri()?>/assets/images/img-sample-article.png" alt="" title="">
                                </div>

                                <div class="primary-services-insights__item-content">
                                    <h3>Article Headline</h3>
                                    <div class="primary-services-insights__item-date">
                                        <span>Aug 20, 2025 | <span>Author Name</span></span>
                                    </div>
                                    <div class="expert-it-services__description primary-services-insights__description">
                                        <p>Lorem ipsum dolor sit amet consectetur. Eu tortor eget sed amet tortor enim iaculis ultricies sit at arcu amet nisi scelerisque aliquam diam. </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="expert-it-services__button primary-services-insights__button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62" fill="none"><path d="M14.3519 38.1759C14.3519 25.0182 25.0183 14.3519 38.1759 14.3519H47.6482C55.5745 14.3519 62 7.9263 62 0V52C62 57.5228 57.5228 62 52 62H0C7.9263 62 14.3519 55.5745 14.3519 47.6482V38.1759Z" fill="#0072DA"/><circle cx="39" cy="38.5" r="17.5" fill="white"/><path d="M41.2955 32.2662L46.9649 37.8811C47.3235 38.2367 47.3235 38.8117 46.9649 39.1665L41.338 44.7339C40.9794 45.0887 40.3974 45.0887 40.0396 44.7339C39.6801 44.3783 39.6801 43.8033 40.0396 43.4485L44.0599 39.4707L32.1517 39.4715C31.6444 39.4715 31.2339 39.0637 31.2339 38.5619C31.2339 38.0608 31.6444 37.6538 32.1517 37.6538H44.1427L39.9935 33.5523C39.6348 33.1967 39.6348 32.6233 39.9935 32.2677C40.1657 32.0965 40.4 32 40.6446 32C40.8892 31.9992 41.1236 32.0957 41.2958 32.2669L41.2955 32.2662Z" fill="#1B3266"/></svg>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

<?php endif; ?>