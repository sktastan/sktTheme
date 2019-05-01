<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_pic_feature_enqueue_script(){
		
		/* ======== Css Section ======== */
		wp_enqueue_style('skt_pic_feature_content_style', get_template_directory_uri() . '/lib/pic_feature_content/css/skt_pic_feature_content.css', array(), '1.0.0');	
		/* ======== js/jquery section ======== */
		    			
	}
	add_action('wp_enqueue_scripts','skt_pic_feature_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>