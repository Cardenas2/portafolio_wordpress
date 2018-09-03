<?php get_header(); ?>
	<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
	<section class="container-fluid portafolio2 py-5">
		<div class="row portafolio__trabajos py-3 mx-4">
			<div class="col-xs-12 col-sm-6 col-md-7 text-left py-5">
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content(); ?>
				</p>
				<a class="btn btn-primary mr-auto" href="index.html" role="button">Volver</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<?php the_post_thumbnail('index'); ?>
			</div>
		</div>
		
		
	</section>
	<?php } ?>
<?php } else { ?>

<?php } wp_reset_query(); ?>





<?php get_footer(); ?>