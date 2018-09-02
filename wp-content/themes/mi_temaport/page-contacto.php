<?php get_header() ?>
	<?php the_post() ?>

	<?php the_content(); ?>
	
	<?php if ( is_active_sidebar( 'contact_widget' ) ) : ?>
		<?php dynamic_sidebar( 'contact_widget' ); ?>            
	<?php endif; ?>



	<section class="container-fluid contacto">
	
			<iframe class="contacto__mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.935027408522!2d-70.72265548516927!3d-33.50306750759989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662dcaba840335f%3A0xb06df877196a723c!2sPablo+Suarez+7473%2C+Los+Cerrillos%2C+Cerrillos%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1534631394233" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

		<div class="container-fluid row m-3">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<h3>
					También me puedes encontrar en:

				</h3>
				<p>cardenas.andrade.vania@gmail.com</p>
				<p>celular: 9 9140 3870</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-9">
				<form class="m-1">
					<div class="row">
						<div class="col-sm-6 p-1">
							<input type="text" class="form-control" placeholder="Nombre">
						</div>
						<div class="col-sm-6 p-1">
							<input type="text" class="form-control" placeholder="Apellido">
						</div>
						<div class="col-sm-12 p-1">
							 <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
						<div class="col-sm-12 p-1">
							 <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
						</div>
						<div class="col-auto ml-auto">
      						<button type="submit" class="btn btn-primary mb-2">Enviar</button>
    					</div>
					</div>
				</form>
			</div>
		</div>
	</section>






<?php get_footer() ?>