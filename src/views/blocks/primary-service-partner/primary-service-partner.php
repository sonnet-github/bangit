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
    $alt_version = get_field('alt_version') ? get_field('alt_version') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

    <div class="primary-service-partner <?=($alt_version) ? "primary-service-partner--alt" : ""?>">

        <?php if(get_the_ID() == 231 || get_the_ID() == 272): ?>
            <div class="expert-it-services__vector">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMax meet" viewBox="0 0 1600 1653" fill="none">
                    <path d="M274.502 60.9992C-143.784 110.515 -591.959 129.75 -669.096 326.596C-746.232 523.442 -453.686 896.824 -82.7284 1184.48C290.575 1472.36 741.297 1675.38 1134.16 1650.07C1528.39 1625.84 1862.77 1375.01 1910.1 1037.83C1958.78 701.732 1715.72 278.85 1400.98 106.451C1083.89 -66.1658 692.789 11.483 274.502 60.9992Z" fill="#1F5FAC" fill-opacity="0.1"/>
                </svg>
            </div>
        <?php endif; ?>

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