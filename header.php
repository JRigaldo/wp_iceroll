<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script:700|Open+Sans" rel="stylesheet">
	<meta name="description" content="Conception de glace roulée en mode Thailandaise avec des ingrédients frais. Nous créons une glace artisanale en direct devant le client.">
	<meta name="author" content="Cuisine à Dany">
	<title><?php bloginfo('name') ?></title>
	<?php wp_head(); ?>
</head>
<body class="home" <?php body_class(); ?>>
	
	<header>
 		<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/public/svg/logoIceRoll_logo_raspberry_2.svg" alt="logo iceroll lausanne"></a>
 		<div class="network">
 			<a href="tel:+41786725402" class="button-svg">
				<button>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
					<title>phone</title>
					<g id="icomoon-ignore">
					</g>
					<path d="M352 320c-32 32-32 64-64 64s-64-32-96-64-64-64-64-96 32-32 64-64-64-128-96-128-96 96-96 96c0 64 65.75 193.75 128 256s192 128 256 128c0 0 96-64 96-96s-96-128-128-96z"></path>
					</svg>

				</button>
			</a>
			<a href="mailto:info@iceroll-lausanne.ch" class="button-svg">
				<button>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512">
					<title>Mail</title>
					<g id="icomoon-ignore">
					</g>
					<path d="M426.671 0h-341.328c-46.937 0-85.343 38.405-85.343 85.345v341.311c0 46.969 38.406 85.344 85.343 85.344h341.328c46.938 0 85.329-38.375 85.329-85.345v-341.31c0-46.94-38.391-85.345-85.329-85.345zM426.671 64c3.994 0 7.773 1.167 11.010 3.171l-181.681 150.202-181.677-150.2c3.239-2.005 7.022-3.173 11.020-3.173h341.328zM85.343 448c-0.962 0-1.91-0.073-2.842-0.204l112.813-156.483-14.628-14.627-116.686 116.685v-305.569l192 232.198 192-232.197v305.568l-116.686-116.685-14.627 14.627 112.814 156.484c-0.929 0.13-1.873 0.203-2.831 0.203h-341.327z"></path>
					</svg>

				</button>
			</a>
 		</div>

 			
				<button class="profil-test">
					<?php 
		 				$args = array(
		 					'theme_location' => 'primary'
		 				);
			 			?>
		 			<?php wp_nav_menu($args); ?>
				</button>
			
	</header>