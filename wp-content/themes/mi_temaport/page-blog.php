<?php get_header(); ?>

<section class=" container blog m-auto">
		<div class="row blog my-5 p-2">

			<div class="row">
				<?php
				$arg = array(
					'post_type'		 => 'News',
					'posts_per_page' => 12,
				);

				$get_arg = new WP_Query( $arg );

				while ( $get_arg->have_posts('posts_per_page=3&cat=-3') ) {
					$get_arg->the_post();
					?>
					<div class="col-xs-12 col-md-6 col-lg-4 ">
					<div class="card borde-caj">
						<?php the_post_thumbnail('medium')?>
						<div class="card-body">
							<h4 class="card-title"><?php the_title(); ?></h4>
							<p class="card-text"><?php the_excerpt();?></p>
							<a href="http://rmurphey.com/"><button type="submit" class="btn btn-outline-info">Leer más</button></a>
						</div>
					</div><!--fin class card-->
				</div><!--col-->
				
				<?php } wp_reset_postdata();
		    ?>
		   
			</div><!--fin row-->
			
			
			<div class="col">
				<div class="row m-2">
					<div class="col-xs-12 col-sm-4">
					<form>
						<div class="form-group">

							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">

						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Quitar suscripcion</label>
						</div>
						<button type="button" class="btn btn-success">Suscribete</button>
					</form>
				</div><!--fin col formulario suscripcion-->
					<div class="col-xs-12 col-sm-8">
						<h4 class="py-2">Tags</h4>
								<button type="button" class="btn btn-color btn-sm mb-2">Diseño Web</button>
								<a href=""><button type="button" class="btn btn-color btn-sm mb-2">Tutoriales</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Branding</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Diseño Editorial</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Fotografía</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Ilustración</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Eventos</button>
								<button type="button" class="btn btn-color btn-sm mb-2">Animación</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="col-xs-12 col-md-6 col-lg-4">
		<div class="card borde-caj">
			<img class="card-img-top img-thumbnail" src="<?php the_thumbnail(); ?>">
			<div class="card-body">
				<h4 class="card-title"><?php the_title(); ?></h4>
				<p class="card-text"><?php the_excerpt();?></p>
				<a href="noticias.html#segunda-noticia"><button type="submit" class="btn btn-outline-info">Leer más</button></a>
			</div>
		</div>
	</div><!--fin col-->

