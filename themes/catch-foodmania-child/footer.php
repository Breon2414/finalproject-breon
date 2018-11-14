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

<form action="http://localhost:8888/final-project/subscribed/">
  <div class="container">
    <h2>Subscribe to our Newsletter</h2>
  </div>

  <div class="container" style="background-color:white">
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Email address" name="mail" required>
    <label>
      <input type="checkbox" checked="checked" name="subscribe"> Breon's Newsletter
    </label>
  </div>

  <div class="container">
    <input type="submit" value="Subscribe">
  </div>
</form>

<?php wp_footer(); ?>
</body>
</html>
