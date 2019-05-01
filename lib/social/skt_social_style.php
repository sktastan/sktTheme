<script type="text/javascript">
	
	//--------------------------------------------------------------------------------//

							//jQuery Social

	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){
		
	});

</script>

<style type="text/css">	

	/* -------------------------------------------------------------------------------- //

								//Social Style

	//-------------------------------------------------------------------------------- */
	
	.social ul li a{		
	  	color: <?php echo of_get_option( 'social_icon_color' );?>;
	  	background: <?php echo of_get_option( 'social_icon_bg_color' );?>;
	}

	.social ul li a:hover{
		background-color: <?php echo of_get_option( 'social_icon_color' );?>;
	  	color: <?php echo of_get_option( 'social_icon_hover_color' );?> 
		/*text-shadow: 0px 0px 12px #fff;*/
	}

	.tooltip:hover:after{
		color: <?php echo of_get_option( 'social_icon_hover_color' );?>;
	    background: <?php echo of_get_option( 'social_icon_color' );?> ; 
	}

	@media screen and (max-width: 768px) {

		
	}	

</style>