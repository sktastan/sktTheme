<?php //Select Font Style

	$radio_option = of_get_option( 'radio_font_option' );
	if($radio_option=='system_font'){
		$typography = of_get_option( 'system_font' );
	}

	else if($radio_option=='google_font'){
		$typography = of_get_option( 'google_font' );
	}
	
?>	

<style type="text/css">	

	body{	

		-webkit-font-smoothing: antialiased;		
		
		background: url("<?php echo of_get_option( 'page_bg_img'); ?>" ) no-repeat fixed center center;
		-webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    background-size: cover; 
	    background-color: <?php echo of_get_option( 'page_bg_color', '#000' ); ?>;
		
		font-family: <?php echo $typography['face'] ?>;
		font-size: <?php echo $typography['size'] ?>;
		/*font-weight: <?php echo $typography['style'] ?>;*/
		font-weight: <?php echo of_get_option( 'extra_font_style') ?>;
		font-style: <?php echo $typography['style'] ?>;
		color: <?php echo $typography['color'] ?>;
	    
	    /*height: 2000px;*/
	    letter-spacing: 1px;
	    /*line-height: 150%;*/

	}

	.page_width{
		width: <?php echo of_get_option( 'page_width'); ?> !important;
		margin: 0 auto;
	}

	@media screen and (max-width: 768px){
		.page_width{
			width: 100% !important;			
		}
	}

</style>