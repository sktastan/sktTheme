<?php
	
	function skt_header_enqueue_script(){

		/* ======== Css Section Start ======== */		
		wp_enqueue_style('skt_header_style', get_template_directory_uri() . '/lib/header/css/header.css', array(), '1.0.0');		
		/* ======== Css Section Finish ======== */

		/* ======== JS/JQuery Section Start ======== */		
		wp_enqueue_script('skt_header_js', get_template_directory_uri() . '/lib/header/js/header.js', array(), '1.0.0', true);	
		/* ======== JS/JQuery Section Finish ======== */

	}
	add_action('wp_enqueue_scripts','skt_header_enqueue_script');

?>