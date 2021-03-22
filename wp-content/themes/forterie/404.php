<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WPthemes
 */

get_header();
?>

	<div id="primary" class="content-area">
		 

			<section class="error-404 not-found">
				<div class="container">
				<div class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpthemes' ); ?></h1>
				</div><!-- .page-header -->

			 
			</div>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
