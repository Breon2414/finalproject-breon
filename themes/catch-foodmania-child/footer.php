<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Catch_Foodmania
 */

?>

			</div><!-- .wrapper -->
		</div><!-- #content -->

		<footer id="colophon" class="site-footer">
			<?php get_template_part( 'template-parts/footer/footer', 'newsletter' ); ?>

			<?php get_template_part( 'template-parts/footer/footer', 'instagram' ); ?>

			<?php get_template_part( 'template-parts/footer/footer', 'widget' ); ?>

			<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
		</footer><!-- #colophon -->
	</div> <!-- below-site-header -->
</div><!-- #page -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="icon-bar">
  <a href="#https://www.facebook.com/profile.php?id=100009823176323 class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://twitter.com/Breeeezy6" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.linkedin.com/in/breon-perry/" class="linkedin"><i class="fa fa-linkedin"></i></a>
</div>

<?php wp_footer(); ?>
</body>
</html>
