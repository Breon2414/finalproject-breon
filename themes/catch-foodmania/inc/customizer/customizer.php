<?php
/**
 * Theme Customizer
 *
 * @package Catch_Foodmania
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function catch_foodmania_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport            = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport     = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport    = 'postMessage';
	$wp_customize->get_setting( 'header_image' )->transport        = 'refresh';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title a',
			'container_inclusive' => false,
			'render_callback' => 'catch_foodmania_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'catch_foodmania_customize_partial_blogdescription',
		) );
	}

	// Reset all settings to default.
	$wp_customize->add_section( 'catch_foodmania_reset_all', array(
		'description'   => esc_html__( 'Caution: Reset all settings to default. Refresh the page after save to view full effects.', 'catch-foodmania' ),
		'title'         => esc_html__( 'Reset all settings', 'catch-foodmania' ),
		'priority'      => 998,
	) );

	catch_foodmania_register_option( $wp_customize, array(
			'name'              => 'catch_foodmania_reset_all_settings',
			'sanitize_callback' => 'catch_foodmania_sanitize_checkbox',
			'label'             => esc_html__( 'Check to reset all settings to default', 'catch-foodmania' ),
			'section'           => 'catch_foodmania_reset_all',
			'transport'         => 'postMessage',
			'type'              => 'checkbox',
		)
	);
	// Reset all settings to default end.

	// Important Links.
	$wp_customize->add_section( 'catch_foodmania_important_links', array(
		'priority'      => 999,
		'title'         => esc_html__( 'Important Links', 'catch-foodmania' ),
	) );

	// Has dummy Sanitizaition function as it contains no value to be sanitized.
	catch_foodmania_register_option( $wp_customize, array(
			'name'              => 'catch_foodmania_important_links',
			'sanitize_callback' => 'sanitize_text_field',
			'custom_control'    => 'Catch_Foodmania_Important_Links',
			'label'             => esc_html__( 'Important Links', 'catch-foodmania' ),
			'section'           => 'catch_foodmania_important_links',
			'type'              => 'catch_foodmania_important_links',
		)
	);
	// Important Links End.
}
add_action( 'customize_register', 'catch_foodmania_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function catch_foodmania_customize_preview_js() {
	wp_enqueue_script( 'catch-foodmania-customize-preview', trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/js/customizer.min.js', array( 'customize-preview' ), '20170816', true );
}
add_action( 'customize_preview_init', 'catch_foodmania_customize_preview_js' );

/**
 * Include Custom Controls
 */
require get_parent_theme_file_path( 'inc/customizer/custom-controls.php' );

/**
 * Include Header Media Options
 */
require get_parent_theme_file_path( 'inc/customizer/header-media.php' );

/**
 * Include Theme Options
 */
require get_parent_theme_file_path( 'inc/customizer/theme-options.php' );

/**
 * Include Hero Content
 */
require get_parent_theme_file_path( 'inc/customizer/hero-content.php' );

/**
 * Include Featured Slider
 */
require get_parent_theme_file_path( 'inc/customizer/featured-slider.php' );

/**
 * Include Featured Content
 */
require get_parent_theme_file_path( 'inc/customizer/featured-content.php' );

/**
 * Include Testimonial
 */
require get_parent_theme_file_path( 'inc/customizer/testimonial.php' );

/**
 * Include Service
 */
require get_parent_theme_file_path( 'inc/customizer/service.php' );

/**
 * Include Service
 */
require get_parent_theme_file_path( 'inc/customizer/food-menu.php' );

/**
 * Include Customizer Helper Functions
 */
require get_parent_theme_file_path( 'inc/customizer/helpers.php' );

/**
 * Include Sanitization functions
 */
require get_parent_theme_file_path( 'inc/customizer/sanitize-functions.php' );

/**
 * Include Upgrade Button
 */
require get_parent_theme_file_path( 'inc/customizer/upgrade-button/class-customize.php' );