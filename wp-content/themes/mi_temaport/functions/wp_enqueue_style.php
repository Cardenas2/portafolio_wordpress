<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', null, $theme_data->get( '4.1.3' ), 'screen' );
	wp_register_style( 'bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', null, $theme_data->get( '4.1.3' ), 'screen' );
	wp_register_style( 'style-masonry', get_theme_file_uri( '/assets/css/style-masonry.css'), null, null, 'screen' );
	wp_register_style( 'progresscircle', get_theme_file_uri( '/assets/css/progresscircle.css'), null, '2.7.1', 'screen' );
	
	wp_register_style( 'style', get_theme_file_uri( '/assets/css/style.css'), null, $theme_data->get( '1.0' ), 'screen' );

	/* Enqueue Scripts
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}*/

	
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('bootstrap_css');
	wp_enqueue_style( 'style-masonry' );
	wp_enqueue_style( 'progresscircle' );
	wp_enqueue_style( 'style' );

}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
