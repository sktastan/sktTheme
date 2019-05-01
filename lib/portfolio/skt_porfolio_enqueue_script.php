<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_portfolio_enqueue_script(){
		
		/* ======== Css Section ======== */
				
		/* Portfolio CSS */
		wp_enqueue_style('skt_portfolio_style', get_template_directory_uri() . '/lib/portfolio/css/portfolio.css', array());
		wp_enqueue_style('skt_light_box_style', get_template_directory_uri() . '/lib/portfolio/css/light_box.css', array());
		/* ======== js/jquery section ======== */		
		/* Portfolio JS */
		wp_enqueue_script('skt_jquery_easing_min_js', get_template_directory_uri() . '/lib/portfolio/js/jquery.easing.min.js', array(), '1.0.0', true);
		wp_enqueue_script('skt_jquery_mixitup_min_js', get_template_directory_uri() .'/lib/portfolio/js/jquery.mixitup.min.js', array(), '1.0.0', true);
		wp_enqueue_script('skt_jquery_portfolio_js', get_template_directory_uri() .'/lib/portfolio/js/portfolio.js', array(), '1.0.0', true);
   			
	}
	add_action('wp_enqueue_scripts','skt_portfolio_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>