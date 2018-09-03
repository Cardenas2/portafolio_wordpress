<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @param  
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'index' =>__('Tamaño de imagenes de index'),
		'img_noticias' =>__('tamaño de imagen de blog noticias'),
		'trabajos-individuales' => __('tamaño de imagen trabajos individual'),
		'noticias_individuales' =>__('tamaño de imgenes noticias individuales'),
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo
	add_image_size( 'index', 260, 800, false );		// Personalización del tamaño de //imagenes portafolio index
	add_image_size( 'img_noticias', 310, 350, true);//imagenes noticias pequeñas
	add_image_size( 'trabajos-individuales', 560, 1500, true);//imagenes individuales de trabajos
	add_image_size('noticias_individuales', 800, 300, true);
	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
