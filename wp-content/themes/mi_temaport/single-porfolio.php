<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<section class="container-fluid portafolio2 py-5">
		<div class="row portafolio__trabajos py-3 mx-4">
			<div class="col-xs-12 col-sm-6 col-md-6 text-left py-5">
				<?php the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<p>
					<?php the_content() ?>
				</p>
				<a class="btn btn-primary mr-auto" href="<?php bloginfo('url'); ?>" role="button">Volver</a>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6">
				<?php the_post_thumbnail('trabajos-individuales') ?>
			</div>
		</div>
		</section>
	<?php } ?>
<?php } else { ?>
	
		
		
	
<?php } wp_reset_query(); ?>


<?php get_footer() ?>