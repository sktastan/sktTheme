<script type="text/javascript">
	
	//--------------------------------------------------------------------------------//

							//jQuery Footer Plugin

	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){
		if("<?php echo of_get_option('footer_border_bottom'); ?>" == true){
			jQuery('.footer_copyright_container').css({"border-bottom": "<?php echo of_get_option('border_bottom_height'); ?>px solid" + " <?php echo of_get_option('border_bottom_color'); ?>"});

			var fbg = "<?php echo of_get_option('border_bottom_height'); ?>px solid" + " <?php echo of_get_option('border_bottom_color'); ?>";
			// console.log(fbg);		
		}

		if("<?php echo of_get_option('footer_copyright_show'); ?>" == true){
			jQuery('.footer_copyright_container').css({'display':'block'});
		}else{
			jQuery('.footer_copyright_container').css({'display':'none'});
		}

		jQuery('.footer aside').css({'background-color':hexTOrgba("<?php echo of_get_option('footer_aside_color'); ?>", "<?php echo of_get_option('footer_aside_opacity'); ?>")})
	});

</script>

<style type="text/css">	

	/* -------------------------------------------------------------------------------- //

								//Footer Style

	//-------------------------------------------------------------------------------- */
	.widget-title{	
		color: <?php echo of_get_option('title_color'); ?>;	
	}

	.footer_container{	
		background: url(<?php echo of_get_option('footer_bg_picture'); ?>);
		background-color: <?php echo of_get_option('footer_bg_color'); ?>;
		padding: <?php echo of_get_option('footer_padding'); ?>;
		border-bottom: <?php echo of_get_option('footer_border'); ?> solid <?php echo of_get_option('footer_border_color'); ?>;
	}

	/*.footer aside{
		
		background-color: rgba(0,0,0,0.5)
	}*/

	.footer_copyright_container{
		background-color: <?php echo of_get_option('copyright_background_color'); ?>;
	}

	.footer,.footer a{		
		color: <?php echo of_get_option('footer_text_color'); ?>;
	}

	.footer a:hover{		
		color: <?php echo of_get_option('footer_link_color'); ?>;
	}

	.footer_copyright{
		color: <?php echo of_get_option('footer_coptyright_text_color'); ?>; 
		width: <?php echo of_get_option('page_width'); ?>;		
	}

	.footer_copyright p{
		text-align: <?php echo of_get_option('text_align'); ?>;		
	}

	@media screen and (max-width: 768px) {

		
	}	

</style>