
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
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
				'theme_location' => 'header-menu',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
				'menu_class' => 'nav justify-content-center '
				 
			) );
			?>
		
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light menuPortafolio2">
		<a class="menuPortafolio2__logo" href="#">
			<img src="<?php bloginfo(); ?>/assets/images/log-vc.jpg" alt="logotipo portafolio">
		</a>
		<button class="navbar-toggler icon-amburguesa" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon "></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header-menu',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
			) );
			?>
			
	</nav>