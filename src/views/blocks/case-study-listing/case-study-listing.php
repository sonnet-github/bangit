<?php
/**
 * Case Study Block Template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
    $posts_per_page = get_field('num_posts_per_page') ? get_field('num_posts_per_page') : 9;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    // Show preview image in preview mode
    if(get_field('preview_image')) :

        echo '<img src="'.\SDEV\Utils::getThemeResourcePath('src/views/blocks/').get_field('preview_image').'" style="width: 100%;" />';

    else :
?>

    <div class="case-study-listing">
        <div class="max-wrap margin-auto gutter">
            <?php
                $args = array(
                    'posts_per_page' => $posts_per_page,
                    'post_type' => 'case-study',
                    'post_status' => 'publish',
                    'paged' => $paged
                );

                $query = new WP_Query($args);
             ?>

             <div class="case-study-listing__wrap flex gap-50">
                <div class="case-study-listing__left">
                    <?php if($query->have_posts()): ?>
                        <?php while($query->have_posts()): $query->the_post(); ?>
                            <?php 
                                $categories = get_the_terms(get_the_ID(), 'case-category');
                                $category = "";

                                if (!empty($categories)) {
                                    $category = $categories[0]->name;
                                }
                             ?>
                            <div class="case-study-listing__item">
                                <div class="case-study-listing__image">
                                    <?php if(has_post_thumbnail()): ?>
                                        <img src="<?=get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>">
                                    <?php endif; ?>
                                </div>
                                <div class="case-study-listing__content">
                                    <div class="case-study-listing__meta">
                                        <?php if($category): ?>
                                            <?= $category ?> <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none"><g clip-path="url(#clip0_115_3243)"><path d="M2.5013 4.58463C3.65188 4.58463 4.58463 3.65188 4.58463 2.5013C4.58463 1.35071 3.65188 0.417969 2.5013 0.417969C1.35071 0.417969 0.417969 1.35071 0.417969 2.5013C0.417969 3.65188 1.35071 4.58463 2.5013 4.58463Z" fill="#1F5FAC"/></g><defs><clipPath id="clip0_115_3243"><rect width="5" height="5" fill="white"/></clipPath></defs></svg> 
                                        <?php endif; ?>
                                        <?=get_the_date('d F Y')?>
                                    </div>
                                    <h3><a href="<?=get_the_permalink()?>"><?=get_the_title()?></a></h3>
                                    <?php if(has_excerpt()): ?>
                                        <div class="case-study-listing__description">
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    <?php endif; ?>
                                    <p><a href="<?=get_the_permalink()?>" class="button button--primary">Read More</a></p>
                                </div>
                            </div>
                        <?php endwhile; ?>
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

                <div class="case-study-listing__right">
                    <!-- Search -->
                    <div class="search-form">
                        <h2>Search here</h2>
                        <form action="">
                            <div class="form-container form-container--search">
                                <div class="form-row">
                                    <div class="form-col">
                                        <input type="text" name="s" id="search" placeholder="Search...">
                                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"><g clip-path="url(#clip0_115_3809)"><path d="M19.7722 18.6726L14.8912 13.7917C16.1045 12.3328 16.8354 10.4593 16.8354 8.41797C16.8354 3.77628 13.0592 0 8.41776 0C3.77618 0 0 3.77628 0 8.41797C0 13.0593 3.77618 16.8353 8.41776 16.8353C10.459 16.8353 12.3326 16.1045 13.7915 14.8912L18.6726 19.7722C18.8244 19.9241 19.0235 20 19.2224 20C19.4214 20 19.6204 19.9241 19.7723 19.7722C20.076 19.4685 20.076 18.9763 19.7722 18.6726ZM1.55518 8.41797C1.55518 4.63381 4.6337 1.55518 8.41776 1.55518C12.2017 1.55518 15.2801 4.63381 15.2801 8.41797C15.2801 12.2018 12.2017 15.2801 8.41776 15.2801C4.6337 15.2801 1.55518 12.2018 1.55518 8.41797Z" fill="white"/></g><defs><clipPath id="clip0_115_3809"><rect width="20" height="20" fill="white"/></clipPath></defs></svg></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    

                    <!-- Service List -->
                    <?php
                        $categories = get_categories([
                            'taxonomy'   => 'category',
                            'hide_empty' => true
                        ]);
                        ?>

                    <div class="service-list">
                        <h2>Service list</h2>
                        <?php foreach($categories as $category): ?>
                            <a href="/category/<?php echo $category->slug ?>" class="flex items-center flex-space-between"><span><?=$category->name?></span><span>(<?=($category->count < 10 ? "0" : "")?><?=$category->count?>)</span></a>
                        <?php endforeach; ?>
                    </div>
                    

                    <!-- Recent posts -->
                    <?php 
                        $recent_posts = new WP_Query([
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                            'orderby'        => 'date',
                            'order'          => 'DESC',
                        ]);
                        ?>

                    <?php if($recent_posts->have_posts()): ?>
                        <div class="recent-posts">
                            <?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                                <div class="recent-posts__recent-item flex items-center gap-20">
                                    <div class="recent-posts__recent-image">
                                        <?php if(has_post_thumbnail()): ?>
                                            <img src="<?=get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="recent-posts__recent-content">
                                        <h3><a href="<?=get_the_permalink()?>"><?=get_the_title();?></a></h3>
                                        <p><?=get_the_date('d F Y')?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <!-- Tag cloud -->
                    <?php 
                    // Get all tags
                    $all_tags = get_tags(['hide_empty' => true]);

                    // Get IDs of tags assigned to the current post
                    $current_post_tags = wp_get_post_tags(get_the_ID(), ['fields' => 'ids']); 
                    // returns array of term IDs assigned to this post

                    if ($all_tags): ?>
                        <div class="tag-cloud">
                            <h2>Tag Cloud</h2>
                            <div class="tag-cloud__wrap flex flex-wrap gap-14">
                                <?php foreach ($all_tags as $tag): 
                                    // Check if this tag ID is in the current post's tags
                                    $highlight = in_array($tag->term_id, $current_post_tags) ? 'active' : '';
                                ?>
                                    <div class="tag-cloud__item <?=$highlight?>">
                                        <a href="<?= esc_url(get_tag_link($tag->term_id)) ?>">
                                            <?= esc_html($tag->name) ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
             </div>
        </div>
    </div>

<?php endif; ?>