<?php
	
	function skt_autoscroll_enqueue_script(){

		/* ======== Css Section Start ======== */
		wp_enqueue_style('skt_autoscroll_style', get_template_directory_uri() . '/lib/autoscroll/css/autoscrollto.css', array(), '1.0.0');	
		/* ======== Css Section Finish ======== */

		/* ======== JS/JQuery Section Start ======== */		
		wp_enqueue_script('skt_autoscroll_js', get_template_directory_uri() . '/lib/autoscroll/js/autoscrollto.js', array(), '1.0.0', true);			
		/* ======== JS/JQuery Section Finish ======== */

	}
	add_action('wp_enqueue_scripts','skt_autoscroll_enqueue_script');

?>