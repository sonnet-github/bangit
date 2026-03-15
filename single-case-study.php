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
        $categories = get_the_terms(get_the_ID(), 'case-category');
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

            <div class="single-post single-post--case-study">
                <div class="max-wrap gutter margin-auto">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="single-post__thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <div class="single-post__wrap flex gap-50">
                        <!-- Left Section -->
                        <div class="single-post__left">
                            <div class="single-post__content wysiwyg">
                                <?php 
                                    
                                    the_content();

                                ?>
                            </div>
                        </div>

                        <!-- Right Section -->

                        <div class="single-post__right">
                            <div class="project-information">
                                <div class="project-information__head">
                                    <h2>Project information</h2>
                                </div>
                                <div class="project-information__content">
                                    <?php if(get_field('clients', get_the_ID())): ?>
                                        <div class="project-information__item">
                                            <div class="project-information__image">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_115_3995)">
                                                    <path d="M11.8295 11.5609C13.4177 11.5609 14.7928 10.9913 15.9167 9.86735C17.0403 8.74364 17.6101 7.3687 17.6101 5.78026C17.6101 4.19237 17.0405 2.81726 15.9166 1.69317C14.7927 0.56964 13.4175 0 11.8295 0C10.241 0 8.86609 0.56964 7.74237 1.69336C6.61865 2.81707 6.04883 4.19219 6.04883 5.78026C6.04883 7.3687 6.61865 8.74382 7.74237 9.86753C8.86646 10.9911 10.2416 11.5609 11.8295 11.5609ZM8.737 2.6878C9.59924 1.82556 10.6107 1.40643 11.8295 1.40643C13.048 1.40643 14.0597 1.82556 14.9221 2.6878C15.7844 3.55023 16.2037 4.56188 16.2037 5.78026C16.2037 6.99901 15.7844 8.01048 14.9221 8.87291C14.0597 9.73533 13.048 10.1545 11.8295 10.1545C10.6111 10.1545 9.59961 9.73515 8.737 8.87291C7.87457 8.01067 7.45526 6.99901 7.45526 5.78026C7.45526 4.56188 7.87457 3.55023 8.737 2.6878Z" fill="#1F5FAC"/>
                                                    <path d="M21.9435 18.4556C21.9111 17.988 21.8456 17.4778 21.7491 16.9391C21.6517 16.3964 21.5262 15.8834 21.3761 15.4144C21.2208 14.9297 21.0101 14.4511 20.7491 13.9924C20.4787 13.5164 20.1608 13.1018 19.8041 12.7607C19.4312 12.4038 18.9745 12.1169 18.4464 11.9076C17.9202 11.6994 17.337 11.5939 16.7131 11.5939C16.4681 11.5939 16.2312 11.6945 15.7736 11.9924C15.492 12.176 15.1626 12.3884 14.7949 12.6234C14.4805 12.8237 14.0546 13.0113 13.5286 13.1813C13.0153 13.3473 12.4942 13.4316 11.9797 13.4316C11.4655 13.4316 10.9444 13.3473 10.4308 13.1813C9.90527 13.0115 9.47919 12.8239 9.16534 12.6235C8.80115 12.3908 8.47156 12.1784 8.18573 11.9922C7.72852 11.6943 7.49158 11.5938 7.24658 11.5938C6.62256 11.5938 6.03955 11.6994 5.51349 11.9078C4.98578 12.1167 4.52893 12.4036 4.15558 12.7609C3.79889 13.1022 3.48102 13.5165 3.21075 13.9924C2.9502 14.4511 2.73926 14.9296 2.58398 15.4146C2.43402 15.8835 2.30859 16.3964 2.21118 16.9391C2.1145 17.4771 2.04913 17.9874 2.01672 18.4562C1.98486 18.9145 1.96875 19.3915 1.96875 19.8734C1.96875 21.1262 2.367 22.1404 3.15234 22.8884C3.92798 23.6265 4.9541 24.0008 6.20233 24.0008H17.7585C19.0063 24.0008 20.0325 23.6265 20.8083 22.8884C21.5938 22.141 21.9921 21.1264 21.9921 19.8732C21.9919 19.3896 21.9756 18.9126 21.9435 18.4556ZM19.8386 21.8694C19.326 22.3572 18.6456 22.5943 17.7583 22.5943H6.20233C5.31482 22.5943 4.6344 22.3572 4.12207 21.8696C3.61945 21.3912 3.37518 20.738 3.37518 19.8734C3.37518 19.4237 3.39001 18.9797 3.41968 18.5534C3.44861 18.1352 3.50775 17.6758 3.59546 17.1876C3.68207 16.7055 3.7923 16.253 3.9234 15.8434C4.04919 15.4507 4.22076 15.0618 4.43353 14.6871C4.6366 14.3301 4.87024 14.0237 5.12805 13.7769C5.3692 13.546 5.67316 13.3571 6.03131 13.2153C6.36255 13.0842 6.7348 13.0124 7.13892 13.0016C7.18817 13.0278 7.27588 13.0778 7.41797 13.1705C7.70709 13.3589 8.04034 13.5738 8.40875 13.8091C8.82404 14.0739 9.35907 14.313 9.99829 14.5194C10.6518 14.7307 11.3183 14.838 11.9799 14.838C12.6414 14.838 13.3081 14.7307 13.9612 14.5196C14.601 14.3129 15.1359 14.0739 15.5517 13.8088C15.9287 13.5678 16.2526 13.3591 16.5417 13.1705C16.6838 13.078 16.7715 13.0278 16.8208 13.0016C17.2251 13.0124 17.5974 13.0842 17.9288 13.2153C18.2867 13.3571 18.5907 13.5462 18.8318 13.7769C19.0897 14.0236 19.3233 14.3299 19.5264 14.6873C19.7393 15.0618 19.9111 15.4509 20.0367 15.8433C20.168 16.2534 20.2784 16.7057 20.3648 17.1874C20.4523 17.6765 20.5117 18.1361 20.5406 18.5536V18.5539C20.5704 18.9786 20.5854 19.4224 20.5856 19.8734C20.5854 20.7382 20.3412 21.3912 19.8386 21.8694Z" fill="#1F5FAC"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_115_3995">
                                                    <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                                </svg>
                                            </div>
                                            <div class="project-information__item-content">
                                                <h3>Clients</h3>
                                                <h4><?=get_field('clients', get_the_ID())?></h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <?php if($categories): ?>
                                        <div class="project-information__item">
                                            <div class="project-information__image">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <g clip-path="url(#clip0_115_4002)">
                                                    <path d="M20.7375 23.25H15.6375C14.25 23.25 13.125 22.125 13.125 20.7375V13.875C13.125 13.4625 13.4625 13.125 13.875 13.125H20.7375C22.125 13.125 23.25 14.25 23.25 15.6375V20.7375C23.25 22.125 22.125 23.25 20.7375 23.25ZM14.625 14.625V20.7375C14.625 21.3 15.075 21.75 15.6375 21.75H20.7375C21.3 21.75 21.75 21.3 21.75 20.7375V15.6375C21.75 15.075 21.3 14.625 20.7375 14.625H14.625Z" fill="#1F5FAC"/>
                                                    <path d="M8.3625 23.25H3.2625C1.875 23.25 0.75 22.125 0.75 20.7375V15.6375C0.75 14.25 1.875 13.125 3.2625 13.125H10.125C10.5375 13.125 10.875 13.4625 10.875 13.875V20.7375C10.875 22.125 9.75 23.25 8.3625 23.25ZM3.2625 14.625C2.7 14.625 2.25 15.075 2.25 15.6375V20.7375C2.25 21.3 2.7 21.75 3.2625 21.75H8.3625C8.925 21.75 9.375 21.3 9.375 20.7375V14.625H3.2625Z" fill="#1F5FAC"/>
                                                    <path d="M20.7375 10.875H13.875C13.4625 10.875 13.125 10.5375 13.125 10.125V3.2625C13.125 1.875 14.25 0.75 15.6375 0.75H20.7375C22.125 0.75 23.25 1.875 23.25 3.2625V8.3625C23.25 9.75 22.125 10.875 20.7375 10.875ZM14.625 9.375H20.7375C21.3 9.375 21.75 8.925 21.75 8.3625V3.2625C21.75 2.7 21.3 2.25 20.7375 2.25H15.6375C15.075 2.25 14.625 2.7 14.625 3.2625V9.375Z" fill="#1F5FAC"/>
                                                    <path d="M10.125 10.875H3.2625C1.875 10.875 0.75 9.75 0.75 8.3625V3.2625C0.75 1.875 1.875 0.75 3.2625 0.75H8.3625C9.75 0.75 10.875 1.875 10.875 3.2625V10.125C10.875 10.5375 10.5375 10.875 10.125 10.875ZM3.2625 2.25C2.7 2.25 2.25 2.7 2.25 3.2625V8.3625C2.25 8.925 2.7 9.375 3.2625 9.375H9.375V3.2625C9.375 2.7 8.925 2.25 8.3625 2.25H3.2625Z" fill="#1F5FAC"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_115_4002">
                                                    <rect width="24" height="24" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                                </svg>
                                            </div>
                                            <div class="project-information__item-content">
                                                <h3>Category</h3>
                                                <h4><?=$categories[0]->name?></h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="project-information__item">
                                        <div class="project-information__image">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_115_4018)">
                                                <mask id="mask0_115_4018" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                                <path d="M0 1.90735e-06H24V24H0V1.90735e-06Z" fill="white"/>
                                                </mask>
                                                <g mask="url(#mask0_115_4018)">
                                                <path d="M18.5156 2.10938H2.57812C1.54261 2.10938 0.703125 2.94886 0.703125 3.98438V6.79688H20.3906V3.98438C20.3906 2.94886 19.5512 2.10938 18.5156 2.10938Z" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.64062 3.51562V0.703125" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.4531 3.51562V0.703125" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.5156 3.51562V0.703125" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8.57812 3.51562V0.703125" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.0469 9.96094H13.2187" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.875 9.96094H9.04687" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M16.2188 9.96094H17.3906" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.70312 13.125H4.875" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.875 13.125H9.04687" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M12.0469 13.125H13.2187" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.70312 16.2891H4.875" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M7.875 16.2891H9.04687" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M23.2969 18.1406C23.2969 20.9883 20.9883 23.2969 18.1406 23.2969C15.2929 23.2969 12.9844 20.9883 12.9844 18.1406C12.9844 15.2929 15.2929 12.9844 18.1406 12.9844C20.9883 12.9844 23.2969 15.2929 23.2969 18.1406Z" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M18.1406 15.7969V18.1406H20.4844" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M20.3906 13.5V6.79688H0.703125V18.0469C0.703125 18.8235 1.33275 19.4531 2.10938 19.4531H13.1532" stroke="#1F5FAC" stroke-width="1.40625" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_115_4018">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                            </svg>
                                        </div>
                                        <div class="project-information__item-content">
                                            <h3>Date</h3>
                                            <h4><?=get_the_date('d F, Y')?></h4>
                                        </div>
                                    </div>

                                    <?php if(get_field('address', get_the_ID())): ?>
                                        <div class="project-information__item">
                                            <div class="project-information__image">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M16.0067 15.8571C18.5606 11.8496 18.2395 12.3496 18.3131 12.2451C19.2429 10.9336 19.7344 9.39009 19.7344 7.78125C19.7344 3.51469 16.2721 0 12 0C7.74178 0 4.26562 3.50775 4.26562 7.78125C4.26562 9.38906 4.76737 10.973 5.72766 12.3022L7.99322 15.8572C5.57095 16.2294 1.45312 17.3387 1.45312 19.7812C1.45312 20.6716 2.03428 21.9405 4.80291 22.9293C6.73612 23.6197 9.29208 24 12 24C17.0637 24 22.5469 22.5716 22.5469 19.7812C22.5469 17.3383 18.4339 16.2301 16.0067 15.8571ZM6.9023 11.5287C6.89456 11.5166 6.8865 11.5048 6.87806 11.4931C6.07898 10.3938 5.67188 9.09098 5.67188 7.78125C5.67188 4.26478 8.50341 1.40625 12 1.40625C15.4893 1.40625 18.3281 4.26605 18.3281 7.78125C18.3281 9.09309 17.9287 10.3517 17.1728 11.4221C17.1051 11.5114 17.4585 10.9624 12 19.5276L6.9023 11.5287ZM12 22.5938C6.46903 22.5938 2.85938 20.968 2.85938 19.7812C2.85938 18.9836 4.71413 17.6721 8.82413 17.1609L11.407 21.2138C11.5361 21.4164 11.7597 21.5391 12 21.5391C12.2402 21.5391 12.4638 21.4164 12.5929 21.2138L15.1757 17.1609C19.2858 17.6721 21.1406 18.9836 21.1406 19.7812C21.1406 20.9579 17.5635 22.5938 12 22.5938Z" fill="#1F5FAC"/>
                                                <path d="M12 4.26562C10.0615 4.26562 8.48438 5.84273 8.48438 7.78125C8.48438 9.71977 10.0615 11.2969 12 11.2969C13.9385 11.2969 15.5156 9.71977 15.5156 7.78125C15.5156 5.84273 13.9385 4.26562 12 4.26562ZM12 9.89062C10.8369 9.89062 9.89062 8.94436 9.89062 7.78125C9.89062 6.61814 10.8369 5.67188 12 5.67188C13.1631 5.67188 14.1094 6.61814 14.1094 7.78125C14.1094 8.94436 13.1631 9.89062 12 9.89062Z" fill="#1F5FAC"/>
                                                </svg>
                                            </div>
                                            <div class="project-information__item-content">
                                                <h3>Address</h3>
                                                <h4><?=get_field('address', get_the_ID())?></h4>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>

    <?php get_footer(); ?>