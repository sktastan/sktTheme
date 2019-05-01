<script type="text/javascript">
	
	//--------------------------------------------------------------------------------//

							//jQuery Header Plugin

	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){

		jQuery('.header').sktHeader({

			transparent_background : "<?php echo of_get_option( 'trans_bg'); ?>", 
			header_bg_color: hexTOrgba("<?php echo of_get_option( 'header_bg_color'); ?>", "<?php echo of_get_option( 'header_bgc_opacity'); ?>"),

			header_border_bottom : "<?php echo of_get_option( 'border_bottom'); ?>",							// Header border-bottom enable-desable
			header_border_bottom_color : "<?php echo of_get_option( 'border_bottom_color'); ?>",				// Header border-bottom color
			header_box_shadow : "<?php echo of_get_option( 'box_shadow'); ?>",									// Header box-shadow enable-desable
			// header_box_shadow_color : "<?php echo of_get_option( 'header_box_shadow_value'); ?>"+ ' ' + "<?php echo of_get_option( 'box_shadow_color'); ?>",
			header_box_shadow_color : "<?php echo of_get_option( 'box_shadow_color'); ?>",
			logo_img: "<?php echo of_get_option('logo_img'); ?>",
			logo_width : "<?php echo of_get_option('logo_img_width'); ?>",
            logo_height : "<?php echo of_get_option('logo_img_height'); ?>",

            header_width: "<?php echo of_get_option('header_width'); ?>", 

            header_animation : "<?php echo of_get_option('header_animation'); ?>",
            header_animation_class : 'animated ' + "<?php echo of_get_option('header_animation_style'); ?>",

            // header_go_up: "<?php echo of_get_option('header_style'); ?>",

            copyRight : "<?php echo of_get_option('copy_right'); ?>",
            copyRightColor: "<?php echo of_get_option('copy_right_text_color'); ?>",
            copyRightBgColor: "<?php echo of_get_option('copy_right_bg_color'); ?>",

            border_top:  "<?php echo of_get_option('border_top'); ?>",
            border_top_color:  "<?php echo of_get_option('border_top_color'); ?>",
            border_top_height:  "<?php echo of_get_option('border_top_height'); ?>",

		});
		// console.log("<?php echo of_get_option('header_style'); ?>");

	}); 

</script>

<style type="text/css">	

	/* -------------------------------------------------------------------------------- //

								//Header Style

	//-------------------------------------------------------------------------------- */

	@media screen and (max-width: 768px) {

		.header{
		    background-color: <?php echo of_get_option( 'header_bg_color'); ?>;
		}

		.logo img{			   
		    width: <?php echo of_get_option( 'res_logo_img_width'); ?>px !important;
		    height: <?php echo of_get_option( 'res_logo_img_height'); ?>px !important;
		}

	}	

</style>