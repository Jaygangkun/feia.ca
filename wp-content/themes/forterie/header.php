<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WPthemes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="main" class="site">
<!--    <header class="site-header">-->
<!--        <div class="header-main">-->
<!--            <div class="site-top">-->
<!--                --><?php
//                $logo_img_url = get_field('logo', 'option');
//                $header_logo = get_field('logo', 'option');
//                $button_text = get_field('button_text', 'option');
//                $button_link = get_field('button_link', 'option');
//                if (!empty($header_logo)) {
//                    ?>
<!--                    <a href="--><?php //echo esc_url(home_url('/')); ?><!--" title="--><?php //bloginfo('name'); ?><!--" class="logo">-->
<!--                        <img src="--><?php //echo esc_url($header_logo); ?><!--" alt="--><?php //bloginfo('name'); ?><!--"/>-->
<!--                    </a>-->
<!--                --><?php //} ?>
<!--            </div><!-- .site-branding -->
<!--            <nav id="site-navigation" class="main-navigation">-->
<!--                --><?php //wp_nav_menu(array(
//                    'menu' => 'Header Menu', // Do not fall back to first non-empty menu.
//                    'menu_class' => 'enumenu_ul',
//                    'theme_location' => 'primary',
//                    'fallback_cb' => false // Do not fall back to wp_page_menu()
//                )); ?>
<!--            </nav><!-- #site-navigation -->
<!--            --><?php //if (!empty($button_text)) { ?>
<!--                <a href="--><?php //if (!empty($button_link)) {
//                    echo esc_url($button_link);
//                } else { ?><!--#--><?php //} ?><!--" title="Get in Touch" class="btn">--><?php //echo $button_text; ?>
<!--                </a>-->
<!--            --><?php //} ?>
<!--        </div>-->
<!--    </header>-- #masthead -->
<!--    <div id="content" class="site-content">-->