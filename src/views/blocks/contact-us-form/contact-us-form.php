<?php
/**
 * Contact Us Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $formHeading = get_field('form_heading') ? get_field('form_heading') : '';
    $formDescription = get_field('form_description') ? get_field('form_description') : '';
    $contactUsForm = get_field('contact_us_form') ? get_field('contact_us_form') : '';
    $rightSectionDescription = get_field('right_section_description') ? get_field('right_section_description') : '';
    $addressText = get_field('address_text') ? get_field('address_text') : '';
    $contactText = get_field('contact_text') ? get_field('contact_text') : '';
    $RightSectionFooter = get_field('right_section_footer') ? get_field('right_section_footer') : '';

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>
    <div class="contact-us-section">
        <div class="max-wrap margin-auto gutter">
            <div class="contact-us-section__wrap flex flex-space-between items-center">
                <div class="contact-us-section__left">
                    <div class="contact-us-section__form">
                        <div class="contact-us-section__form-description">
                            <?php if($formHeading): ?>
                                <h2><?=$formHeading?></h2>
                            <?php endif; ?>
                            <?php if($formDescription): ?>
                                <p><?=$formDescription?></p>
                            <?php endif; ?>
                        </div>
                        <?php if($contactUsForm): ?>
                            <div class="form-container">
                                <?php echo do_shortcode('[forminator_form id="' . $contactUsForm->ID . '"]'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="contact-us-section__right">
                    <div class="contact-us-section__right-inner">
                        <?php if($rightSectionDescription): ?>
                            <div class="contact-us-section__description">
                                <?=$rightSectionDescription?>
                            </div>
                        <?php endif; ?>
                        <div class="contact-us-section__contact-details flex">
                            <div class="contact-us-section__address">
                                <div class="contact-us-section__address-image">
                                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-map.png" alt="Icon Map">
                                </div>
                                <div class="contact-us-section__address-heading">
                                    <h3>Address</h3>
                                </div>
                                <div class="contact-us-section__address-description">
                                    <?=$addressText?>
                                </div>
                            </div>
                            <div class="contact-us-section__address">
                                <div class="contact-us-section__address-image">
                                    <img src="<?=get_template_directory_uri()?>/assets/images/icon-gmail.png" alt="Icon Google Map">
                                </div>
                                <div class="contact-us-section__address-heading">
                                    <h3>Contact</h3>
                                </div>
                                <div class="contact-us-section__address-description">
                                    <?=$contactText?>
                                </div>
                            </div>
                        </div>
                        <?php if($RightSectionFooter): ?>
                            <div class="contact-us-section__footer">
                                <?=$RightSectionFooter?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>