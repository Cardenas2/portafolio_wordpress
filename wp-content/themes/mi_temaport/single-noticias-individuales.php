
<?php get_header() ?>

<?php if ( have_posts() ) { ?>

	<?php while ( have_posts() ) { ?>
		<section class="container noticias">
		<div class="row">
			<div class="col-sm-12 my-3">
				<?php the_post_thumbnail('noticias_individuales') ?>
			</div>
			<div class="col-sm-12">
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content() ?>
				</p>
			</div>
			
			<div class="row container my-5 text-center cajanoticias">
				<div class="colxs-12 col-sm-4 col-md-4 py-3">
					<i class="fas fa-thumbs-up noticia__icono"></i>
					<span class="contador">0</span>
				</div>
				<div class="colxs-12 col-sm-4 col-md-4 py-3">
					<i class="fas fa-thumbs-down noticia__icono"></i>
					<span class="contador2">0</span>
				</div>
				<div class="colxs-12 col-sm-4 col-md-4 py-3 ">
					<a href="blog.html"><button type="button" class="btn btn-info">Volver</button></a>
				</div>
			</div><!--fin row interno-->

		</div><!--fin row-->
	</section>
		
	<?php } ?>
<?php } else { ?>
<?php } wp_reset_query(); ?>

<?php get_footer() ?>