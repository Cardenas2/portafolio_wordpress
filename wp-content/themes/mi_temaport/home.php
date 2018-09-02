<?php get_header(); ?>
	<header class="container-fluid imgPrincipal">
		<h1 class="imgPrincipal__textoEscrito">
			Me dedico a...
			<br>
			<span class="textoEscrito__magico">
			    <span>Diseño Front-end</span>
			    <span>Diseño Gráfico</span>
			    <span>Diseño Multimedia</span>
			    <span>Fotografía</span>
  			</span>
		</h1>
	</header>
	<section class="container btnInicio">
		<a href=""><div class="btnInicio__icono text-center pt-3"><i class="fas fa-angle-up"></i></div></a>
	</section>	

	<section class="container-fluid portafolio">
		<!--inicico submenu-->
		<div class="row submenu">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header-submenu',
				'menu_id'        => 'submenu',
				'container'      => false,
				'depth'          => 3,
				'menu_class' => 'nav justify-content-center '
				 
			) );
			?>
					
		</div>
		
		<div class=" container-fluid grid">
			
			<?php
			$arg = array(
				'post_type'		 => 'porfolio',
				'posts_per_page' => 19,
				'paged'			 => $paged
			);

			$get_arg = new WP_Query( $arg );

			while ( $get_arg->have_posts() ) {
				$get_arg->the_post();
			?>
			
		

			<div class="grid-item<?= $field['value'] ?>">
				<figure class="grid__imageIndiv">
					<?php the_post_thumbnail() ?>
					<figcaption>
						<a href="<?php the_permalink(); ?>">
						<h3 class="grid__titulo"><?php the_title(); ?></h3>
						</a>
					</figcaption>
				</figure>
			</div>

			<?php } wp_reset_postdata();
		?>







			<!-- <div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/ahorra-tu-negocio.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Publicidad <span>Cupon</span> Emprendedor</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/calle.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografía <span>Calle</span> Londres</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/banner02.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Banner <span>Empresa</span> APPSOFT</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/revistaTw.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Proyecto <span>TW LOGÍSTICA</span> Revista</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/rosaazul.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografia <span>Estudio</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/fotologocomercio360.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">lOGOTIPO <span>COMERCIO360,</span> Marca corporativa</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/img24.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Calendario <span>año</span> 2013</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/logotipodeportes.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">lOGOTIPO <span>Deportes</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/iluspavoreal.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Ilustración <span>Pavo</span>Real</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/fotombabasonicos.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo"><span>Facebook</span>Basonicos</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/publmutual.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Publicidad <span>Mutual de Seguridad</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/fotomalicia.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Pelicula <span>Alicia</span>en el pais de las maravillas</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/redes1.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Post <span>Redes</span> Sociales</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/tarjetasgreenbless.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Tarjetas <span>greenbless</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img  class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/tips.png" alt="">
					<figcaption>
						<h3 class="grid__titulo">Tips <span>Vender</span>por internet</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/dipticocomercio360.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">DIPTICO <span>Comercio</span>360</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/fotomcaratula.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Propuesta Caratula <span>V de venganza</span> 2013</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/fotologocenitchile.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Logotipo <span>Cenit</span> Chile</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/gato.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografía <span>Gato</span>en la calle</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/retratoh.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Retrato <span>Hombre</span> año 2014</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div id="grid__imagePeque" class="grid-item">
				<figure  class="grid__imageIndiv">
					<img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/images/pantallazo-c360.png" alt="">
					<figcaption>
						<h3 class="grid__titulo">Landing <span>Comercio</span> 360</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div> -->
			
		</div><!--fin container grid portafolio-->
		
	</section>

	
<?php get_footer(); ?>