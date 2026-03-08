<?php
/**
 * Footer Upper Template (Footer Block)
 *
 * @package SDEV
 * @subpackage SDEV WP
 * @since SDEV WP Theme 2.0
 */  
?>

<div class="footer-content max-wrap margin-auto gutter">
    <div class="footer-top">
        <div class="flex flex-space-between">
            <div class="footer-top-left">
                <div class="footer-logo">
                    <img src="<?=get_template_directory_uri()?>/assets/images/logo-footer.png" alt="Footer Logo">
                </div>
                <div class="footer-description">
                    <p>Bang IT Solutions is an Australian-based IT Managed Services company whose local, easy-to-talk technical staff can respond to your project requirements or support issues in a timely and friendly manner.</p>
                    <p>Address: International Tower 3,<br />Level 17/300 Barangaroo Ave, <br />Barangaroo NSW 2000</p>
                    <p>Email: info@bangitsolutions.com<br />Phone: 1300 770 035</p>
                </div>
            </div>
            <div class="footer-top-right">
                <div class="footer-top-right__wrap flex gap-50">
                    <div class="footer-top-right__item">
                        <h3>Services</h3>
                        <?= wp_nav_menu(array(
                            'menu' => 'Footer Services',
                            'menu_class' => ''
                        )) ?>
                    </div>
                    <div class="footer-top-right__item">
                        <h3>Explore</h3>
                        <?= wp_nav_menu(array(
                            'menu' => 'Footer Explore',
                            'menu_class' => ''
                        )) ?>
                    </div>
                    <div class="footer-top-right__item">
                        <h3>Resources</h3>
                        <?= wp_nav_menu(array(
                            'menu' => 'Footer Resources',
                            'menu_class' => ''
                        )) ?>
                    </div>
                    <div class="footer-top-right__item">
                        <h3>Follow Us</h3>
                        <ul class="flex gap-10">
                            <li><img src="<?=get_template_directory_uri()?>/assets/images/icon-facebook.svg" alt=""></li>
                            <li><img src="<?=get_template_directory_uri()?>/assets/images/icon-twitter-x.svg" alt=""></li>
                            <li><img src="<?=get_template_directory_uri()?>/assets/images/icon-linkedin.svg" alt=""></li>
                        </ul>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <ul class="flex justify-end gap-20">
            <li><a href="#!">Term of Use</a></li>
            <li><a href="#!">Privacy Policy</a></li>
            <li>Bang IT © <?=date("Y")?>. All Rights Reserved.</li>
        </ul>
    </div>
</div>