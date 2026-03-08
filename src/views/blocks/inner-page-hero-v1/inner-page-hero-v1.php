<?php
/**
 * Inner Page Hero Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $subHeading = get_field('subheading') ? get_field('subheading') : "";
    $heading = get_field('heading') ? get_field('heading') : "";
    $description = get_field('description') ? get_field('description') : "";
    $button = get_field('button') ? get_field('button') : "";
    $image = get_field('featured_image') ? get_field('featured_image') : "";


    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>



<div class="homepage-hero homepage-hero--v1">
        <div class="max-wrap margin-auto gutter">
            <div class="homepage-hero__wrap flex items-center flex-space-between">
                
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-bg" viewBox="0 0 1600 489" fill="none" preserveAspectRatio="xMidYMax meet">
                    <path d="M1908.41 -271.287C1820.22 -277.096 1731.8 -263.807 1649.45 -232.367C1564.16 -199.871 1486.84 -148.42 1420.55 -87.0208C1356.64 -27.8273 1301.97 39.8861 1245.75 105.887C1190.45 170.82 1133.02 233.804 1064.98 286.305C1001.2 335.453 931.075 376.164 856.423 407.386C709.817 468.759 548.77 492.906 389.899 485.169C252.857 478.499 119.399 449.157 -8.04907 399.676" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="homepage-hero__left">
                    <div class="homepage-hero__left-inner">
                        <?php if($subHeading): ?>
                            <h3><?=$subHeading?></h3>
                        <?php endif; ?>
                        <?php if($heading): ?>
                            <h1><?=$heading?></h1>
                        <?php endif; ?>
                        <?php if($description): ?>
                            <div class="homepage-hero__description"><?=$description?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if($image): ?>
                    <div class="homepage-hero__right">
                        <div class="homepage-hero__right-inner">
                            <div class="homepage-hero__right-vector">
                                <?php for($x = 1; $x <= 2; $x++): ?>
                                    <img src="<?=get_template_directory_uri()?>/assets/images/img-vector-v1-<?=$x?>.png" class="vector-image vector-image--<?=$x?>" alt="img-vector-<?=$x?>.png">
                                <?php endfor; ?>
                            </div>
                            <div class="homepage-hero__right-image">
                                <img src="<?=$image['url']?>" alt="<?=$image['alt']?>" title="<?=$image['title']?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif; ?>