<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_slider_enqueue_script(){
		
		/* ======== Css Section ======== */
		
		wp_enqueue_style('skt_slider_style', get_template_directory_uri() . '/lib/slider/css/skt_slider.css', array(), '1.0.0');
		wp_enqueue_style('skt_animate_animo_style', get_template_directory_uri() . '/lib/slider/css/animation.css', array(), '1.0.0');
		
		/* ======== js/jquery section ======== */		
		wp_enqueue_script('skt_sktSlider_js', get_template_directory_uri() . '/lib/slider/js/skt_slider.js', array(), '1.0.0', true);
    	wp_enqueue_script('skt_animo_js', get_template_directory_uri() . '/lib/slider/js/animo.js', array('jquery'), '1.0.0', true);

	}
	add_action('wp_enqueue_scripts','skt_slider_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>