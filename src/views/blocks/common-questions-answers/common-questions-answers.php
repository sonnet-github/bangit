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
    <div class="common-questions">
        <div class="max-wrap margin-auto gutter">
            <div class="common-questions__heading text-center">
                <?php if($subHeading): ?>
                    <h3><?=$subHeading?></h3>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?=$heading?></h2>
                <?php endif; ?>
            </div>

            <div class="common-questions__wrap flex flex-wrap gap-30 js-accordions">
                <?php if(have_rows('faqs')): ?>
                    <div class="common-questions__item-left">
                        <?php $i = 0;
                            while (have_rows('faqs')): the_row();
                                if ($i % 2 == 0): ?>
                                <div class="common-questions__item js-accordion-item">
                                    <div class="common-questions__item-heading js-accordion-heading">
                                        <h3><?= get_sub_field('heading') ?></h3>
                                    </div>

                                    <div class="common-questions__item-content">
                                        <div class="common-questions__item-content-inner">
                                            <?= get_sub_field('description') ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; $i++;
                            endwhile; ?>
                    </div>

                    <div class="common-questions__item-right">
                        <?php $i = 0;
                        while (have_rows('faqs')): the_row();
                            if ($i % 2 != 0): ?>
                                <div class="common-questions__item js-accordion-item">
                                    <div class="common-questions__item-heading js-accordion-heading">
                                        <h3><?= get_sub_field('heading') ?></h3>
                                    </div>

                                    <div class="common-questions__item-content">
                                        <div class="common-questions__item-content-inner">
                                            <?= get_sub_field('description') ?>
                                        </div>
                                    </div>
                                </div>
                        <?php endif; $i++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php endif; ?>