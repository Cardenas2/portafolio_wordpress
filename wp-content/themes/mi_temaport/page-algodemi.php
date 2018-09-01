<?php get_header() ?>
	<?php the_post() ?>

	
	<?php the_content(); ?>
		<section class="container curriculum">
		<div class="curriculumDatos">	
			<div class="row">
				<div class="col-xs-12 col-sm-5 col-md-6 col-lg-4 ">
					<img class="curriculumDatos__imagen  rounded img-fluid p-1" src="<?php bloginfo('template_url'); ?>/assets/images/fotoperfil.jpg" alt="imagen fotografía de perfil ">
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-8 curriculumDatos__acerca">
					<h2>Hola mi nombre es Vania </h2>
					<p>
						Hola, la primera carrera que estudié fue fotografia periodística y publicitaria y para complementar mis conocimietos estudie diseño gráfico y produccion digital. Esta carrera me gusto mucho y decidi especializarme en diseño frontend.
					</p>
				</div>
			</div><!--fin row acerca-->
			<div class="row my-4">
				<div class="col-x-12 col-sm-6 col-md-6">
					<h3><i class="fas fa-graduation-cap"></i> Educación</h3>
					<div class="row">
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2018-2018</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Desafio Latam
							Diseño Frontend
						</p>
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2011-2013</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Instituto ITC
							Diseño gráfico y producción digital
						</p>
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2004-2008</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Instituto Los Leones
							Fotografía Periodística y publicitaria
						</p>
					</div>
				</div>
				<div class="col-x-12 col-sm-6 col-md-6">
					<h3><i class="fab fa-black-tie"></i> Experiencia</h3>
					<div class="row">
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2018 Actualmente	</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Agencia Marketing Eglobal One.
							Diseñadora Front -End
						</p>
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2016-2018</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Diseñadora y fotografa independiente
						</p>
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2015-2016</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Agencia Empremarket
							Doseñadora gráfoca Multimedia
						</p>
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">2014 a 2015</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							ImprentaColorGrafic<
							Diseñadora Gráfica
						 
						</p>
					</div>
				</div>
			</div><!--fin row educacion experiencia-->
			<div class="container row habilidades my-3">
				<h3><i class="fas fa-check-square"></i> Habilidades</h3>
				<script type="text/javascript"
				src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

				<div id="demo">

					<div class="circlechart" data-percentage="75">HTML</div>
					<div class="circlechart" data-percentage="75">CSS</div>
					<div class="circlechart" data-percentage="30">JS</div>
					<div class="circlechart" data-percentage="50">FRONTEND</div>
				</div>
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
				<script src="assets/js/progresscircle.js"></script> 
				<script>

					$('.circlechart').circlechart(); // Initialization

				</script>
				<script type="text/javascript">

					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', 'UA-36251023-1']);
					_gaq.push(['_setDomainName', 'jqueryscript.net']);
					_gaq.push(['_trackPageview']);

					(function() {
						var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
						ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					})();

				</script>
			</div><!--fin row habilidades-->
			<div class="row my-4 py-4">
				<div class="col-x-12 col-sm-6 col-md-6">
					<h3><i class="fas fa-globe-americas"></i> Idiomas</h3>
					<div class="row">
						<p class="col-xs-12 col-sm-4 col-md-3 col-lg-3">Ingles</p>
						<p class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							Medio
						</p>
						
					</div>
				</div>
				<div class="col-x-12 col-sm-6 col-md-6">
					<h3><i class="fas fa-smile"></i> Hobbies</h3>
					<div class="row">
						
						<p class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							Me gusta mucho salir a andar en cleta, leer libros, novelas en general, y además hace poco retome una actividad, tejo a crochet y en telar.
							
						</p>
						
					</div>
				</div>
			</div><!--fin row educacion experiencia-->
		</div><!--fin curriculum datos-->
	</section><!--fin curriculum-->

	<?php get_footer() ?>
