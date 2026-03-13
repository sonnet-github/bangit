<?php 
/* Template Name: Default Single Template
 * Template Post Type: post, page
 */
/**
 * Default single template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */
    get_header(); ?>

    <?php 
        $categories = get_the_category();
        $comment_count = get_comments_number();
     ?>

    
        <div id="page-content" class="page-blocks" data-tpl="single">

            <div class="inner-page-hero-v2">
                <div class="inner-page-hero-v2__bg-image">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 903" fill="rgba(26, 115, 232, 0.20);"><path d="M258.692 -928.907L-177.668 525.138C-177.668 525.138 228.439 495.521 635.664 508.734C815.343 514.565 995.646 528.813 1140.81 557.769C1613.66 652.076 1713.72 902.366 1713.72 902.366L2097.67 -377.029L258.692 -928.907Z" fill="#1A73E8" fill-opacity="0.2"/></svg>
                </div>
                <div class="max-wrap margin-auto text-center">
                    <div class="inner-page-hero-v2__wrap">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg-bg" viewBox="0 0 1600 489" fill="none"><path d="M1908.41 -271.286C1820.22 -277.096 1731.8 -263.807 1649.45 -232.366C1564.16 -199.871 1486.84 -148.419 1420.55 -87.0206C1356.64 -27.8271 1301.97 39.8863 1245.75 105.888C1190.45 170.82 1133.02 233.804 1064.98 286.305C1001.2 335.453 931.075 376.164 856.423 407.386C709.817 468.759 548.77 492.906 389.899 485.169C252.857 478.499 119.399 449.157 -8.04883 399.676" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>

                        <div class="inner-page-hero-v2__inner">
                            <h1><?=get_the_title()?></h1>
                        </div>
                        <div class="inner-page-hero-v2__pagination">
                            <ul>
                                <?php 
                                    echo "<li><a href='" . get_site_url() . "/'>Home</a><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"><path d=\"M10.977 9.99863L6.85215 14.1234L8.03065 15.3019L13.334 9.99863L8.03065 4.69531L6.85215 5.87382L10.977 9.99863Z\" fill=\"#CED0DF\"/></svg></li>";
                                        global $post;
                                        if ( $post->post_parent ) {
                                            $ancestors = get_post_ancestors($post->ID);
                                            foreach ($ancestors as $ancestor) {
                                                echo '<li><a href="'.get_permalink($ancestor).'">'.get_the_title($ancestor).'</a><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"><path d=\"M10.977 9.99863L6.85215 14.1234L8.03065 15.3019L13.334 9.99863L8.03065 4.69531L6.85215 5.87382L10.977 9.99863Z\" fill=\"#CED0DF\"/></svg></li>';
                                            }
                                        }

                                ?>
                                <li><?=get_the_title()?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-post">
                <div class="max-wrap margin-auto">

                    <div class="single-post__wrap flex gap-50">
                        <!-- Left Section -->
                        <div class="single-post__left">
                            <?php if(has_post_thumbnail()): ?>
                                <div class="single-post__thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php endif; ?>
                            <div class="single-post__meta">
                                <div class="single-post__meta-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M1.66406 9.16536H18.3307V16.6654C18.3307 17.1256 17.9576 17.4987 17.4974 17.4987H2.4974C2.03716 17.4987 1.66406 17.1256 1.66406 16.6654V9.16536ZM14.1641 2.4987H17.4974C17.9576 2.4987 18.3307 2.8718 18.3307 3.33203V7.4987H1.66406V3.33203C1.66406 2.8718 2.03716 2.4987 2.4974 2.4987H5.83073V0.832031H7.4974V2.4987H12.4974V0.832031H14.1641V2.4987Z" fill="#0072DA"/>
                                    </svg>
                                    <?=get_the_date('d F Y')?>
                                </div>
                                <?php if($categories): ?>
                                    <div class="single-post__meta-category">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M4.16927 1.66797H15.8359C16.2962 1.66797 16.6693 2.04107 16.6693 2.5013V18.4541C16.6693 18.6841 16.4827 18.8708 16.2526 18.8708C16.1744 18.8708 16.0976 18.8486 16.0313 18.8071L10.0026 15.0274L3.97393 18.8071C3.77896 18.9293 3.52182 18.8704 3.39958 18.6754C3.358 18.6091 3.33594 18.5324 3.33594 18.4541V2.5013C3.33594 2.04107 3.70904 1.66797 4.16927 1.66797Z" fill="#0072DA"/>
                                        </svg>
                                        <?php foreach($categories as $category): ?>
                                            <span><?=$category->name?></span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                                <div class="single-post__meta-comments">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M12.0391 15.8333L9.99739 18.75L7.95573 15.8333H2.4974C2.03716 15.8333 1.66406 15.4602 1.66406 15V3.33333C1.66406 2.8731 2.03716 2.5 2.4974 2.5H17.4974C17.9576 2.5 18.3307 2.8731 18.3307 3.33333V15C18.3307 15.4602 17.9576 15.8333 17.4974 15.8333H12.0391Z" fill="#0072DA"/>
                                    </svg>
                                    <?=$comment_count?> Comment<?=($comment_count > 1) ? "s" : ""?>
                                </div>
                            </div>
                            <div class="single-post__title"><h2><?=get_the_title();?></h2></div>

                            <div class="single-post__content wysiwyg">
                                <?php 
                                    
                                    the_content();

                                ?>
                            </div>

                            <div class="post-tags flex flex-space-between">
                                <div class="post-tags__left">
                                    <?php 
                                        $tags = get_the_tags();
                                        if ($tags) {
                                            echo "<span class='post-tags__heading'>Post Tags:</span>";
                                            foreach ($tags as $tag) {
                                                echo "<span class='post-tags__item'>" . $tag->name . "</span>";
                                            }
                                        }
                                     ?>

                                </div>
                                <div class="post-tags__share flex items-center gap-20">
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M8.07969 11.0395C8.01969 11.0395 6.69969 11.0395 6.09969 11.0395C5.77969 11.0395 5.67969 10.9195 5.67969 10.6195C5.67969 9.81953 5.67969 8.99953 5.67969 8.19953C5.67969 7.87953 5.79969 7.77953 6.09969 7.77953H8.07969C8.07969 7.71953 8.07969 6.55953 8.07969 6.01953C8.07969 5.21953 8.21969 4.45953 8.61969 3.75953C9.03969 3.03953 9.63969 2.55953 10.3997 2.27953C10.8997 2.09953 11.3997 2.01953 11.9397 2.01953H13.8997C14.1797 2.01953 14.2997 2.13953 14.2997 2.41953V4.69953C14.2997 4.97953 14.1797 5.09953 13.8997 5.09953C13.3597 5.09953 12.8197 5.09953 12.2797 5.11953C11.7397 5.11953 11.4597 5.37953 11.4597 5.93953C11.4397 6.53953 11.4597 7.11953 11.4597 7.73953H13.7797C14.0997 7.73953 14.2197 7.85953 14.2197 8.17953V10.5995C14.2197 10.9195 14.1197 11.0195 13.7797 11.0195C13.0597 11.0195 11.5197 11.0195 11.4597 11.0195V17.5395C11.4597 17.8795 11.3597 17.9995 10.9997 17.9995C10.1597 17.9995 9.33969 17.9995 8.49969 17.9995C8.19969 17.9995 8.07969 17.8795 8.07969 17.5795C8.07969 15.4795 8.07969 11.0995 8.07969 11.0395Z" fill="#0D2746"/>
                                        </svg>
                                    </a>
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_115_3853)">
                                                <path d="M11.8616 8.46864L19.147 0H17.4206L11.0947 7.3532L6.04225 0H0.214844L7.85515 11.1193L0.214844 20H1.94134L8.62162 12.2348L13.9574 20H19.7848L11.8612 8.46864H11.8616ZM9.49695 11.2173L8.72283 10.1101L2.56342 1.29967H5.21521L10.1859 8.40994L10.9601 9.51718L17.4214 18.7594H14.7696L9.49695 11.2177V11.2173Z" fill="#0D2746"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_115_3853">
                                                    <rect width="20" height="20" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <g clip-path="url(#clip0_115_3855)">
                                                <path d="M15 0H5C2.2 0 0 2.2 0 5V15C0 17.8 2.2 20 5 20H15C17.8 20 20 17.8 20 15V5C20 2.2 17.8 0 15 0ZM18 15C18 16.7 16.7 18 15 18H5C3.3 18 2 16.7 2 15V5C2 3.3 3.3 2 5 2H15C16.7 2 18 3.3 18 5V15Z" fill="#0D2746"/>
                                                <path d="M10 5C7.2 5 5 7.2 5 10C5 12.8 7.2 15 10 15C12.8 15 15 12.8 15 10C15 7.2 12.8 5 10 5ZM10 13C8.3 13 7 11.7 7 10C7 8.3 8.3 7 10 7C11.7 7 13 8.3 13 10C13 11.7 11.7 13 10 13Z" fill="#0D2746"/>
                                                <path d="M15 6C15.5523 6 16 5.55228 16 5C16 4.44772 15.5523 4 15 4C14.4477 4 14 4.44772 14 5C14 5.55228 14.4477 6 15 6Z" fill="#0D2746"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_115_3855">
                                                    <rect width="20" height="20" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    <a href="#!">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M2.88711 1.01562C1.51221 1.01562 0.613281 1.91845 0.613281 3.10509C0.613281 4.26552 1.48544 5.19409 2.83435 5.19409H2.86044C4.26223 5.19409 5.13461 4.26552 5.13461 3.10509C5.10841 1.91845 4.26223 1.01562 2.88711 1.01562Z" fill="#0D2746"/>
                                            <path d="M0.851562 6.84375H4.87096V18.9363H0.851562V6.84375Z" fill="#0D2746"/>
                                            <path d="M14.7394 6.5625C12.5711 6.5625 11.1172 8.60001 11.1172 8.60001V6.84631H7.09766V18.9388H11.1169V12.1859C11.1169 11.8244 11.1431 11.4634 11.2493 11.2049C11.5399 10.483 12.2011 9.73515 13.3116 9.73515C14.766 9.73515 15.3477 10.8441 15.3477 12.4697V18.9388H19.3668V12.0052C19.3668 8.2909 17.3837 6.5625 14.7394 6.5625Z" fill="#0D2746"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="single-post__comments">
                                <?php comments_template(); ?>
                            </div>
                        </div>

                        <!-- Right Section -->

                        <div class="single-post__right">
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
        
        </div>

    <?php get_footer(); ?>