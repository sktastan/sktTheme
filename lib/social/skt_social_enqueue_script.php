<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_social_enqueue_script(){
		
		/* ======== Css Section ======== */		
		wp_enqueue_style('skt_social_style', get_template_directory_uri() . '/lib/social/css/skt_social.css', array(), '1.0.0');		
		/* ======== js/jquery section ======== */		
		// wp_enqueue_script('skt_social_js', get_template_directory_uri() . '/lib/social/js/skt_social.js', array(), '1.0.0', true);
	}
	add_action('wp_enqueue_scripts','skt_social_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>