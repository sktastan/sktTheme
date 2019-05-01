<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_fc_enqueue_script(){
		
		/* ======== Css Section ======== */
		wp_enqueue_style('skt_feature_content_style', get_template_directory_uri() . '/lib/feature_content/css/skt_feature_content.css', array(), '1.0.0');	
		wp_enqueue_style('skt_component', get_template_directory_uri() . '/lib/feature_content/css/component.css', array());
		/* ======== js/jquery section ======== */
		wp_enqueue_script('skt_feature_content_js', get_template_directory_uri() . '/lib/feature_content/js/wow.min.js', array(), '1.0.0', true);
		    			
	}
	add_action('wp_enqueue_scripts','skt_fc_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>