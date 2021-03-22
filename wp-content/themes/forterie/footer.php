<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPthemes
 */
?>
<!--</div>-->
<!-- #content -->
<!--<footer id="colophon" class="site-footer">-->
<!--    <div class="footer-top">-->
<!--        <div class="container">-->
<!--            <div class="footer-top-1">-->
<!--                --><?php
//                $footer_logo = get_field('footer_logo', 'option');
//                if (!empty($footer_logo)) {
//                    ?>
<!--                    <div class="footer-logo">-->
<!--                        <a href="--><?php //echo esc_url(home_url('/')); ?><!--" title="">-->
<!--                            <img src="--><?php //echo $footer_logo; ?><!--" alt="Fort Erie International Academy"></a>-->
<!--                    </div>-->
<!--                --><?php //} ?>
<!--                <div class="footer-menu">-->
<!--                    --><?php
//                    wp_nav_menu(array(
//                        'menu' => 'Footer Menu1', // Do not fall back to first non-empty menu.
//                        'theme_location' => 'footer',
//                        'fallback_cb' => false // Do not fall back to wp_page_menu()
//                    ));
//                    ?>
<!--                </div>-->
<!--                <div class="footer-menu">-->
<!--                    --><?php
//                    wp_nav_menu(array(
//                        'menu' => 'Footer Menu2', // Do not fall back to first non-empty menu.
//                        'theme_location' => 'footer',
//                        'fallback_cb' => false // Do not fall back to wp_page_menu()
//                    ));
//                    ?>
<!--                </div>-->
<!--                <div class="footer-cnt">-->
<!--                    --><?php
//                    $contact_title = get_field('contact_title', 'option');
//                    $contact_details = get_field('contact_details', 'option');
//                    ?>
<!--                    <h4>--><?php //echo $contact_title; ?><!--</h4>-->
<!--                    --><?php
//                    echo wp_kses_post($contact_details);
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--            <div class="footer-top-2">-->
<!--                <div class="social">-->
<!--                    --><?php
//                    $link_for_facebook_profile = get_field('link_for_facebook_profile', 'option');
//                    $link_for_twitter_profile = get_field('link_for_twitter_profile', 'option');
//                    $link_for_instagram_profile = get_field('link_for_instagram_profile', 'option');
//                    $link_for_youtube_profile = get_field('link_for_youtube_profile', 'option');
//                    $accessibility_text = get_field('accessibility_text', 'option');
//                    $accessibility_link = get_field('accessibility_link', 'option');
//                    $privacy_policy_text = get_field('privacy_policy_text', 'option');
//                    $privacy_policy_link = get_field('privacy_policy_link', 'option');
//                    $copyright_content = get_field('copyright_content', 'option');
//                    ?>
<!--                    <h4>Follow Us</h4>-->
<!--                    <ul>-->
<!--                        <li>-->
<!--                            <a href="--><?php //if (!empty($link_for_facebook_profile)) {
//                                echo esc_url($link_for_facebook_profile);
//                            } else { ?><!--#--><?php //} ?><!--" title="Facebook" target="_blank">-->
<!--                                <i class="fab fa-facebook-f"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="--><?php //if (!empty($link_for_twitter_profile)) {
//                                echo esc_url($link_for_twitter_profile);
//                            } else { ?><!--#--><?php //} ?><!--" title="Twitter" target="_blank">-->
<!--                                <i class="fab fa-twitter"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="--><?php //if (!empty($link_for_instagram_profile)) {
//                                echo esc_url($link_for_instagram_profile);
//                            } else { ?><!--#--><?php //} ?><!--" title="Instagram" target="_blank">-->
<!--                                <i class="fab fa-instagram"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="--><?php //if (!empty($link_for_youtube_profile)) {
//                                echo esc_url($link_for_youtube_profile);
//                            } else { ?><!--#--><?php //} ?><!--" title="Youtube" target="_blank">-->
<!--                                <i class="fab fa-youtube"></i>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="footer-menu"></div>-->
<!--                <div class="footer-menu"></div>-->
<!--                <div class="footer-menu">-->
<!--                    <a href="--><?php //if (!empty($accessibility_link)) {
//                        echo esc_url($accessibility_link);
//                    } else { ?><!--#--><?php //} ?><!--">-->
<!--                        --><?php //echo $accessibility_text; ?>
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="footer-menu">-->
<!--                    <a href="--><?php //if (!empty($privacy_policy_link)) {
//                        echo esc_url($privacy_policy_link);
//                    } else { ?><!--#--><?php //} ?><!--">-->
<!--                        --><?php //echo $privacy_policy_text; ?>
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    --><?php //if (!empty($copyright_content)) { ?>
<!--        <div class="footer-bottom">-->
<!--            <div class="container">-->
<!--                --><?php
//                echo wp_kses_post(str_replace('#_year_#', date('Y'), $copyright_content));
//                ?>
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //} ?>
<!--</footer><!-- #colophon -->
</div>
<?php wp_footer(); ?>
</body>
</html>