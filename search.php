<?php 
/* Template Name: Default Search Template
 * 
 */
/**
 * Default Search template
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */
    get_header(); ?>

        <div id="page-content" class="page-blocks search-template" data-tpl="index">

            <?php if($_GET['s']): ?>

                <div class="inner-page-hero-v2">
                    <div class="inner-page-hero-v2__bg-image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 903" fill="rgba(26, 115, 232, 0.20);"><path d="M258.692 -928.907L-177.668 525.138C-177.668 525.138 228.439 495.521 635.664 508.734C815.343 514.565 995.646 528.813 1140.81 557.769C1613.66 652.076 1713.72 902.366 1713.72 902.366L2097.67 -377.029L258.692 -928.907Z" fill="#1A73E8" fill-opacity="0.2"/></svg>
                    </div>
                    <div class="max-wrap margin-auto text-center">
                        <div class="inner-page-hero-v2__wrap">
                            <svg xmlns="http://www.w3.org/2000/svg" class="svg-bg" viewBox="0 0 1600 489" fill="none"><path d="M1908.41 -271.286C1820.22 -277.096 1731.8 -263.807 1649.45 -232.366C1564.16 -199.871 1486.84 -148.419 1420.55 -87.0206C1356.64 -27.8271 1301.97 39.8863 1245.75 105.888C1190.45 170.82 1133.02 233.804 1064.98 286.305C1001.2 335.453 931.075 376.164 856.423 407.386C709.817 468.759 548.77 492.906 389.899 485.169C252.857 478.499 119.399 449.157 -8.04883 399.676" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>

                            <div class="inner-page-hero-v2__inner">
                                <?php if($_GET['s']): ?>
                                    <h1 style="text-transform: capitalize;"><?=$_GET['s']?></h1>
                                <?php endif; ?>
                            </div>
                            <div class="inner-page-hero-v2__pagination">
                                <ul>
                                    <?php 
                                        echo "<li><a href='" . get_site_url() . "/'>Home</a><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" fill=\"none\"><path d=\"M10.977 9.99863L6.85215 14.1234L8.03065 15.3019L13.334 9.99863L8.03065 4.69531L6.85215 5.87382L10.977 9.99863Z\" fill=\"#CED0DF\"/></svg></li>";
                                        echo '<li style="text-transform: capitalize;">Search</li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

            <div class="max-wrap margin-auto gutter">
                <?php while(have_posts()): the_post(); ?>
                    <div class="search-template__item">
                        <div class="search-template__item-inner">
                            <div class="search-template__title">
                                <h3><a href="<?=get_the_permalink()?>"><?=get_the_title();?></a></h3>
                            </div>
                            <?php if(has_excerpt()): ?>
                                <div class="search-template__description">
                                    <p><?=get_the_excerpt();?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        
        </div>

    <?php get_footer(); ?>