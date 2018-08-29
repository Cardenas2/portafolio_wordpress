
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset=<?php bloginfo('charset') ?>>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php bloginfo(); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<?php wp_head()?>
</head>
<body class="contenedor">
	<nav class="menuPortafolio1 py-4">

		<a href="">
			<div class="menuPortafolio1__logo ml-auto mr-auto">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-vc.jpg" alt="logotipo portafolio">
			</div>
		</a>
		<ul class="nav justify-content-center">
			
			<li class="nav-item">
				<a class="nav-link active" href="index.html">PORTAFOLIO</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="sobre-mi.html">ALGO DE MI</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="blog.html">BLOG</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contacto.html">CONTACTO</a>
			</li>
		</ul>
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light menuPortafolio2">
		<a class="menuPortafolio2__logo" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-vc.jpg" alt="logotipo portafolio">
		</a>
		<button class="navbar-toggler icon-amburguesa" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link menuPortafolio2_btn" href="index.html">PORTAFOLIO<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link menuPortafolio2_btn" href="sobre-mi.html">ALGO DE MI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menuPortafolio2_btn" href="blog.html">BLOG</a>
				</li>
				<li class="nav-item">
					<a class="nav-link menuPortafolio2_btn" href="contacto.html">CONTACTO</a>
				</li>
			</ul>
		</div>
	</nav>
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
			<ul class="nav justify-content-center sub-menuPortafolio">

			<li class="nav-item">
				<a class="nav-link active" href="#">Todo</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Diseño Web</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Diseño gráfico</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Fotografia</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Branding</a>
			</li>
			</ul>	
		</div><!--fin  submenu-->
		
		<div class=" container-fluid grid">
			<div class="grid-item grid-item--height3">
		
				<figure class="grid__imageIndiv">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/CramerMailing.jpg" alt="Mailing emporesa cramer"/>
					<figcaption>
						<h3 class="grid__titulo">Mailing <span>Empresa Cramer</span> sabores</h3>
						<a href="trabajos.html"></a>
					</figcaption>			
				</figure>
			
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/ahorra-tu-negocio.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Publicidad <span>Cupon</span> Emprendedor</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/calle.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografía <span>Calle</span> Londres</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner02.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Banner <span>Empresa</span> APPSOFT</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/revistaTw.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Proyecto <span>TW LOGÍSTICA</span> Revista</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/rosaazul.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografia <span>Estudio</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/fotologocomercio360.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">lOGOTIPO <span>COMERCIO360,</span> Marca corporativa</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/img24.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Calendario <span>año</span> 2013</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logotipodeportes.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">lOGOTIPO <span>Deportes</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/iluspavoreal.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Ilustración <span>Pavo</span>Real</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/fotombabasonicos.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo"><span>Facebook</span>Basonicos</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/publmutual.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Publicidad <span>Mutual de Seguridad</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/fotomalicia.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Pelicula <span>Alicia</span>en el pais de las maravillas</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/redes1.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Post <span>Redes</span> Sociales</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/tarjetasgreenbless.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Tarjetas <span>greenbless</span></h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height3">
				<figure class="grid__imageIndiv">
					<img  class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/tips.png" alt="">
					<figcaption>
						<h3 class="grid__titulo">Tips <span>Vender</span>por internet</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/dipticocomercio360.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">DIPTICO <span>Comercio</span>360</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/fotomcaratula.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Propuesta Caratula <span>V de venganza</span> 2013</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/fotologocenitchile.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Logotipo <span>Cenit</span> Chile</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/gato.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Fotografía <span>Gato</span>en la calle</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div class="grid-item grid-item--height2">
				<figure class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/retratoh.jpg" alt="">
					<figcaption>
						<h3 class="grid__titulo">Retrato <span>Hombre</span> año 2014</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			<div id="grid__imagePeque" class="grid-item">
				<figure  class="grid__imageIndiv">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/pantallazo-c360.png" alt="">
					<figcaption>
						<h3 class="grid__titulo">Landing <span>Comercio</span> 360</h3>
						<a href="#"></a>
					</figcaption>			
				</figure>
			</div>
			
		</div><!--fin container grid portafolio-->
		
	</section>

	
	<footer class="footerPortafolio text-center">
		<div class="row">
			<div class="col-xs-12 col-sm-6 footer__iconos ml-auto mr-auto">
				<a href="https://www.facebook.com/vania.e.cardenas"><i class="fab fa-facebook-f footer__iconos--ind"></i></a>
				<a href="https://twitter.com/Vaniacardenas21"><i class="fab fa-twitter footer__iconos--ind2"></i></a>
				<a href="https://www.linkedin.com/in/vania-c%C3%A1rdenas-36265216/"><i class="fab fa-linkedin-in footer__iconos--ind3"></i></i></a>
			</div>
			<div class="col-xs-12 col-sm-6 text-center footer__contactame">
				<a href="contacto.html">Si te gusta o te interesa mi trabajo, Contactame!!!!!!</a>
			</div>
		</div><!--fin row footer-->
	</footer>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>


<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>



<!-- or -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php wp_footer()?>

</body>
</html>

