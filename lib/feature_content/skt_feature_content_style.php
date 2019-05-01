<script type="text/javascript">            

	//--------------------------------------------------------------------------------//
	//						//Feature Content
	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){

		/* wow anime */
		wow = new WOW({
			animateClass: 'animated',
			offset:       100
			}
		);
		wow.init();

		jQuery('.skt_head_line').addClass('<?php echo of_get_option( 'feature_content_headline_animation' ); ?>');
		jQuery('#feature_content_headline_text p span').append('<?php  echo of_get_option( "feature_headline_txt"); ?>');

	});
	
</script>

<style type="text/css">

	.feature_content{
		padding: <?php echo of_get_option( 'content_padding' ); ?>;
	 	background-color: <?php echo of_get_option( 'circle_bgcolor' ); ?>;
	}

	.skt_circle_content_1_ico a{	      
	   background-color: <?php echo of_get_option( 'circle_color'); ?>; /* #46698c */
	}

	.skt_circle_content_1_ico a:hover{ 
		background-color: <?php echo of_get_option( 'head_line_color' ); ?> !important;
	}

	.skt_circle_content_1_ico a:hover i{ 
	    color: <?php echo of_get_option( 'circle_border_color1' ); ?>;     
	}	

	.skt_separator ul li{	    
	    background-color: <?php echo of_get_option( 'circle_color'); ?>;
	}

	.skt_circle_content_1_txt p:nth-child(1){
	    color: <?php echo of_get_option( 'circle_color'); ?>;
	}
	
	.skt_head_line p:nth-child(1) span{ 
		color: <?php echo of_get_option( 'circle_color' ); ?>;
	}

	.skt_head_line hr{
		background-color: <?php echo of_get_option( 'circle_color' ); ?>;
	}

	.skt_circle_content_1_txt p:nth-child(3) a{
	    color: <?php echo of_get_option( 'circle_color' ); ?>;
	}

	.skt_circle_content_1_txt p:nth-child(3) a:hover{
	    color: <?php echo of_get_option( 'head_line_color' ); ?> !important;
	}

	.skt_circle_content_1_txt p:nth-child(2){
	    text-align: <?php echo of_get_option( 'content_left_text_align'); ?>;
	}

	/*content_left_animation*/

	.skt_circle_content_1_txt p:nth-child(3) a{
	    color: <?php echo of_get_option( 'circle_color'); ?>;
	}

	.skt_circle_content_1_txt p:nth-child(3) a:hover{    
	    color: <?php echo of_get_option( 'circle_border_color1'); ?>;   
	}

	.skt_separator ul li:nth-child(2){    
	    background-color: <?php echo of_get_option( 'circle_border_color1'); ?>;
	}

</style>