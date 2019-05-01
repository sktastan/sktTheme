<?php
	
	function skt_enqueue_script(){

		/* ======== Css Section Start ======== */
		wp_enqueue_style('skt_style', get_stylesheet_uri());
		wp_enqueue_style('skt_general_style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0');
		wp_enqueue_style('skt_fa_style', "https://use.fontawesome.com/releases/v5.0.6/css/all.css", array(), '1.0.0');	
		wp_enqueue_style('skt_animations_style', get_template_directory_uri() . '/lib/header/css/animate.css', array(), '1.0.0');			
		/* ======== Css Section Finish ======== */

		/* ======== JS/JQuery Section Start ======== */
		wp_enqueue_script('jquery');
		wp_enqueue_script('skt_script_js', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);	
		/* ======== JS/JQuery Section Finish ======== */

	}
	add_action('wp_enqueue_scripts','skt_enqueue_script');

?>