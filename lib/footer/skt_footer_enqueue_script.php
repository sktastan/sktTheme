<?php
	
	//wp_enqueue_scripts. init all css and js files
	function skt_footer_enqueue_script(){
		
		/* ======== Css Section ======== */
		
		wp_enqueue_style('skt_footer_style', get_template_directory_uri() . '/lib/footer/css/skt_footer.css', array(), '1.0.0');
				
		/* ======== js/jquery section ======== */		
		wp_enqueue_script('skt_sktFooter_js', get_template_directory_uri() . '/lib/footer/js/skt_footer.js', array(), '1.0.0', true);
    	
	}
	add_action('wp_enqueue_scripts','skt_footer_enqueue_script');

	/* 
		========== Enqueue script section finish ==========
	*/	

?>