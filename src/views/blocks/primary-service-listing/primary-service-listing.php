<?php
/**
 * Primary Service Listing Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $intro = get_field('intro_content') ? get_field('intro_content') : "";

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

    <div class="primary-services-listing">
        <div class="max-wrap margin-auto gutter">
            <?php if($intro): ?>
                <div class="primary-services-listing__intro">
                    <?=$intro?>
                </div>
            <?php endif; ?>
            <?php if(have_rows('services')): ?>
                <div class="primary-services-listing__wrap flex flex-wrap gap-24">
                    <?php while(have_rows('services')): the_row(); ?>
                        <div class="primary-services-listing__item">
                            <?php if(get_sub_field('image')): ?>
                                <div class="primary-services-listing__item-image">
                                    <img src="<?=get_sub_field('image')['url']?>" alt="<?=get_sub_field('image')['alt']?>">
                                </div>
                            <?php endif; ?>
                            <div class="primary-services-listing__item-content">
                                <h3><?=get_sub_field('heading')?></h3>
                                <p><?=get_sub_field('description')?></p>
                            </div>
                            <?php if(get_sub_field('url')): ?>
                                <div class="primary-services-listing__item-link">
                                    <a href="<?=get_sub_field('url')['url']?>">Learn more <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.477 9.16805L9.00698 4.69804L10.1855 3.51953L16.6673 10.0014L10.1855 16.4831L9.00698 15.3046L13.477 10.8347H3.33398V9.16805H13.477Z" fill="#0072DA"/></svg></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>