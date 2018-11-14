<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Catch_Foodmania
 */

get_header();

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="singular-content-wrap">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					get_template_part( 'template-parts/content/content', 'comment' );

				endwhile; // End of the loop.
				?>
				</div> <!-- singular-content-wrap -->

				<p style="text-align: center;"><iframe src="https://docs.google.com/document/d/e/2PACX-1vQhCTIoIR44tOikQYeIywfI7Fa7Hqitl8wQY3tuzN_L3L2ubcwDsCqOUJ663gw83zYfSJ5LOpf9ARP7/pub?embedded=true" width="60%" height="1500px">&nbsp;</iframe>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
