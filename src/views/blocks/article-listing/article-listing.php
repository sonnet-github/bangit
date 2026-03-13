<?php
/**
 * Article Listing Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $postPerPage = get_field('num_post_per_page') ? get_field('num_post_per_page') : 9;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>
    <div class="article-listing">
        <div class="max-wrap margin-auto gutter">
            <?php
                $args = array(
                    'posts_per_page' => $postPerPage,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'paged' => $paged
                );

                $query = new WP_Query($args);
             ?>

            <?php if($query->have_posts()): ?>
                <div class="article-listing__inner">
                    <div class="article-listing__wrap flex flex-wrap gap-24">
                        <?php while($query->have_posts()): $query->the_post(); ?>
                            <?php 
                                $categories = get_the_category();
                                $category = "";

                                if (!empty($categories)) {
                                    $category = $categories[0]->name;
                                }
                             ?>
                            <div class="article-listing__item">
                                <div class="article-listing__image">
                                    <?php if(has_post_thumbnail()): ?>
                                        <img src="<?=get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>">
                                    <?php endif; ?>
                                </div>
                                <div class="article-listing__content">
                                    <div class="article-listing__meta">
                                        <?php if($category): ?>
                                            <?= $category ?> <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none"><g clip-path="url(#clip0_115_3243)"><path d="M2.5013 4.58463C3.65188 4.58463 4.58463 3.65188 4.58463 2.5013C4.58463 1.35071 3.65188 0.417969 2.5013 0.417969C1.35071 0.417969 0.417969 1.35071 0.417969 2.5013C0.417969 3.65188 1.35071 4.58463 2.5013 4.58463Z" fill="#0D2746"/></g><defs><clipPath id="clip0_115_3243"><rect width="5" height="5" fill="white"/></clipPath></defs></svg> 
                                        <?php endif; ?>
                                        <?=get_the_date('d F Y')?>
                                    </div>
                                    <h3><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h3>
                                    <p><a href="<?=get_the_permalink()?>">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M13.475 9.16805L9.00503 4.69804L10.1835 3.51953L16.6654 10.0014L10.1835 16.4831L9.00503 15.3046L13.475 10.8347H3.33203V9.16805H13.475Z" fill="#1F5FAC"/></svg></a></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if($query->max_num_pages > 1): ?>
                    <div class="article-listing__pagination">
                        <?php
                            echo paginate_links(array(
                                'total' => $query->max_num_pages
                            ));
                        ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>

<?php endif; ?>