<?php
/**
 * Cleanup <head>
 *
 * @since 2.0.0
 */
remove_action( 'wp_head', 'rsd_link' );									// RSD link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );				// Parent rel link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );				// Start post rel link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );	// Adjacent post rel link
remove_action( 'wp_head', 'wp_generator' );								// WP Version

remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'wp_enqueue_scripts', 'twp_load_stylesheets' );
/**
 * Overrides the default Genesis stylesheet with child theme specific.
 *
 * Only load these styles on the front-end.
 *
 * @since 2.0.0
 */
function twp_load_stylesheets() {

    if( !is_admin() ) {
		// Main theme stylesheet
	    wp_enqueue_style( 'twp', get_stylesheet_directory_uri() . '/css/style.css', array(), null );

	    // IE-only stylesheet
	    wp_enqueue_style( 'twp-ie', get_stylesheet_directory_uri() . '/css/ie.css', array(), null );

	    // Fallback for old IE
	    wp_enqueue_style( 'twp-ie-universal', '//universal-ie6-css.googlecode.com/files/ie6.1.1.css', array(), null );

	    // Google Fonts
    	// wp_enqueue_style(
    	// 	'google-fonts',
    	// 	'//fonts.googleapis.com/css?family=Open+Sans:300,400,700',		// Open Sans (light, normal, and bold), for example
    	// 	array(),
    	// 	null
    	// );
	}

}




/**
 * Enqueue the Karla font.
 */
function twp_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'twp-fonts', "$protocol://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic" );}
add_action( 'wp_enqueue_scripts', 'twp_fonts' );

/**
 * Remove the header
 *
 * @since 2.0.9
 */
// remove_action( 'genesis_header', 'genesis_do_header' );

/**
 * Remove the site title and/or description
 *
 * @since 2.0.9
 */
// remove_action( 'genesis_site_title', 'genesis_seo_site_title' );
// remove_action( 'genesis_site_description', 'genesis_seo_site_description' );