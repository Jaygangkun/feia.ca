<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPthemes
 */
$ints = 0;
$v_ter = 1;
if ( have_rows( 'content_info' ) ) :  ?>
    <?php while ( have_rows('content_info' ) ) : the_row();  $ints++;
        if(get_row_layout() == 'our_team' ): ?>
		
		<?php elseif ( get_row_layout() == 'image_section' ) : ?>
             
        <?php endif; ?>        
    <?php endwhile; ?>
<?php endif; ?>


