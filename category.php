<?php get_header(); ?>
    <div id="page-content" class="page-blocks article-listing-tpl" data-tpl="index">
        <?php
            $paged = max(1, get_query_var('paged'));
            $catURL = get_query_var('category_name');

            $args = array(
                'posts_per_page' => 9,
                'post_type'      => 'post',
                'post_status'    => 'publish',
                'paged'          => $paged,
                'category_name'  => get_query_var('category_name'), // e.g. "news"
            );

            $query = new WP_Query($args);
        ?>


        <div class="inner-page-hero-v2">
            <div class="inner-page-hero-v2__bg-image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 903" fill="rgba(26, 115, 232, 0.20);"><path d="M258.692 -928.907L-177.668 525.138C-177.668 525.138 228.439 495.521 635.664 508.734C815.343 514.565 995.646 528.813 1140.81 557.769C1613.66 652.076 1713.72 902.366 1713.72 902.366L2097.67 -377.029L258.692 -928.907Z" fill="#1A73E8" fill-opacity="0.2"/></svg>
            </div>
            <div class="max-wrap margin-auto text-center">
                <div class="inner-page-hero-v2__wrap">
                    <svg xmlns="http://www.w3.org/2000/svg" class="svg-bg" viewBox="0 0 1600 489" fill="none"><path d="M1908.41 -271.286C1820.22 -277.096 1731.8 -263.807 1649.45 -232.366C1564.16 -199.871 1486.84 -148.419 1420.55 -87.0206C1356.64 -27.8271 1301.97 39.8863 1245.75 105.888C1190.45 170.82 1133.02 233.804 1064.98 286.305C1001.2 335.453 931.075 376.164 856.423 407.386C709.817 468.759 548.77 492.906 389.899 485.169C252.857 478.499 119.399 449.157 -8.04883 399.676" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>

                    <div class="inner-page-hero-v2__inner">
                        <?php if($catURL): 

                            $result = str_replace('-', ' ', $catURL); ?>
                            <h1 style="text-transform: capitalize;"><?=$result?></h1>
                        <?php endif; ?>
                    </div>
                    <div class="inner-page-hero-v2__pagination">
                        <ul>
                            <?php 
                                echo "<li><a href='" . get_site_url() . "/'>Home</a><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"><path d=\"M10.977 9.99863L6.85215 14.1234L8.03065 15.3019L13.334 9.99863L8.03065 4.69531L6.85215 5.87382L10.977 9.99863Z\" fill=\"#CED0DF\"/></svg></li>";
                                echo '<li style="text-transform: capitalize;">' . $result . '</li>';

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="article-listing">
            <div class="max-wrap margin-auto gutter">

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
        
    </div>

<?php get_footer(); ?>