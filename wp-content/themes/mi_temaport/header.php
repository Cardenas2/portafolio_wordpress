
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

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
				'menu_class' => 'nav justify-content-center '
				 
			) );
			?>
		<!--<ul class="nav justify-content-center">
			
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
		</ul>-->
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light menuPortafolio2">
		<a class="menuPortafolio2__logo" href="#">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/log-vc.jpg" alt="logotipo portafolio">
		</a>
		<button class="navbar-toggler icon-amburguesa" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
				
				 
			) );
			?>
			<!--<ul class="navbar-nav ml-auto">
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
		</div>-->
	</nav>