<?php 


	function site_assets(){
		wp_enqueue_style('style', get_stylesheet_uri());
		// wp_enqueue_script( 'script', get_template_directory_uri() . '/public/js/app.js ', array( 'jquery' ), '3.3.1', true);

		
	}

	add_action('wp_enqueue_scripts', 'site_assets');

	

	function iceroll_setup(){

		register_nav_menus(array(

			'primary' 	=> __('Primary Menu'),
			'footer'	=> __('Footer Menu')

		));

		add_theme_support('post-thumbnails');
		add_image_size('frontpage', 330, 330, true);
	}

	add_action('after_setup_theme', 'iceroll_setup');

		 
	/* Function which displays your post date in time ago format */
	function meks_time_ago() {
		return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
	}

	function short_title($n) {
		$title = get_the_title($post->ID);
		$title = substr($title,0,$n);
		echo $title;
	}


?>