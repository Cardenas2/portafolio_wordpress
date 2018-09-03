# PORTAFOLIO DISEÑO FRONT END

## Introducción
Este es mi trabajo final de el curso intensivo para ser diseñadora front end , en este sitio web van a ver mis trabajos que he realizado desde que comence a trabajar en diseño grafico multimedia.

### Idea Principal
El trabajo cuenta con cuatro paginas, PORTAFOLIO, ALGO DE MI, BLOG y por último CONTACTO.
En la primera seccion de portafolio muestro mis principales trabajos tanto de diseño gráfico como de fotografía. En la segunda seccion muestro mi curriculum, loss lugares en kllos que he trabajado , y lo que me gusta hacer. En la seccion de blog muestro una serie de noticias relacionadas al diseño grafico y web.
La última seccion es de contacto donde se incluye un mapa con direccion y un formulario de contacto para futuros trabnajos.

Las fuentes que utilice fueron 2, montserrat para los titulos y dosis para los parrafos.

Para utilizar la paginación debemos llamar a la función `the_pagination()`. Y en el caso de utilizar la paginación en un Custom Post Type, deberemos entregar como parámetro el resultado de la búsqueda, así como se especifica en el siguiente código.

~~~html
<?php
	$arg = array(
		'post_type'		 => 'custom_post_name',
		'paged'			 => $paged
	);
	
	$get_arg = new WP_Query( $arg );
	
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
		
		<!-- Aquí agregar contenido a mostrar por el loop -->
	
	<?php } 
?>

<?php the_pagination( $get_arg ); ?>


~~~

Además es importante que dentro de los parámetros de búsqueda sea incorporado el key `paged` junto con el valor `$paged`, para que nuestra paginación pueda funcionar correctamente.

### Uso de Flickity
En la versión 1.3.0 se ha agregado [Flickity](https://github.com/metafizzy/flickity/) como opción a Flexslider. Un versátil plugin de Javascript que contiene menos errores que el anterior, se encuentra más actualizado y además con más opciones de visualización. Para obtener información de cómo implementar Flickity, por favor revisar la [documentación](https://flickity.metafizzy.co) correspondiente.

### Archivo de opciones
En la versión 1.4.3 se creó la variable `$theme_options` que contendrá todas las configuraciones necesarias para el theme. Dentro de los parámetros que contiene se encuentran opciones para saber si WooCommerce esta activo, obtener accesos a las carpetas de funciones y el key slider contiene dos nuevos parámetros. Estos permiten a través de un valor booleano activar o desactivar cada uno de los sliders disponibles en la plantilla.
