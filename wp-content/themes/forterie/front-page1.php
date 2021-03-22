<?php
/**
 * The template for displaying Home page
 *
 * This is the template default template for home page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package WPthemes
 */
get_header();
while ( have_posts() ) :  the_post();
$imgs = (get_the_post_thumbnail_url()) ?: get_template_directory_uri().'/images/banner_img.png';
?>



<?php 
endwhile;
get_footer(); ?>