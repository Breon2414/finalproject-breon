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

				<p style= "text-align: center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198740.52767487196!2d-77.15466264435952!3d38.893779993719306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2sWashington%2C+DC!5e0!3m2!1sen!2sus!4v1542162591415" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div> <!-- singular-content-wrap -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
