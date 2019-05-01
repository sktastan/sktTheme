<?php
	
	function skt_menu_enqueue_script(){

		/* ======== Css Section Start ======== */
		wp_enqueue_style('skt_menu_style', get_template_directory_uri() . '/lib/menu/css/sktMenu.css', array(), '1.0.0');		
		/* ======== Css Section Finish ======== */

		/* ======== JS/JQuery Section Start ======== */
		wp_enqueue_script('skt_menu_js', get_template_directory_uri() . '/lib/menu/js/sktMenu.js', array(), '1.0.0', true);		
		/* ======== JS/JQuery Section Finish ======== */

	}
	add_action('wp_enqueue_scripts','skt_menu_enqueue_script');

?>