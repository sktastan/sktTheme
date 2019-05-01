<script type="text/javascript">
	
	//--------------------------------------------------------------------------------//

							//jQuery Menu Plugin

	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){

		// jQuery.sktMenu.mobilResponsiveWidth = "<?php echo of_get_option('mobil_responsive_width'); ?>"; 
		jQuery.sktMenu.itemWidth = "<?php echo of_get_option('menu_item_width'); ?>";
		jQuery.sktMenu.itemHeight = "<?php echo of_get_option('menu_item_height'); ?>";
		
		jQuery.sktMenu.listHoverBackground = "<?php echo of_get_option('menu_item_hover'); ?>";
    	jQuery.sktMenu.listHoverBackgroundColor = "<?php echo of_get_option('menu_item_hover_color'); ?>";

    	jQuery.sktMenu.borderBottom = "<?php echo of_get_option('menu_item_border_bottom'); ?>";
	    jQuery.sktMenu.borderBottoMWidth = "<?php echo of_get_option('menu_item_border_bottom_width'); ?>";
	    jQuery.sktMenu.borderBottomColor = "<?php echo of_get_option('menu_item_border_bottom_color'); ?>";

	    jQuery.sktMenu.textColor =  "<?php echo of_get_option('menu_item_text_color'); ?>";
	    jQuery.sktMenu.textHoverColor =  "<?php echo of_get_option('menu_item_text_hover_color'); ?>";
	    jQuery.sktMenu.textSelectedColor =  "<?php echo of_get_option('menu_item_text_seleced_color'); ?>";

	    jQuery.sktMenu.sub_menu_animation = "<?php echo of_get_option('sub_menu_animation'); ?>";
    	jQuery.sktMenu.sub_menu_animation_class = 'animated ' + "<?php echo of_get_option('sub_menu_animation_class'); ?>";

		// console.log(<?php echo of_get_option('mobil_responsive_width'); ?> );

	}); 

</script>

<style type="text/css">	

	/* -------------------------------------------------------------------------------- //

								//Menu Style

	//-------------------------------------------------------------------------------- */

	.sktMenu li ul {    
	    background-color: <?php echo of_get_option('sub_menu_bg_color'); ?>;
	}

	@media screen and (max-width: 768px) {
	/*@media screen and (max-width: "<?php echo of_get_option('mobil_responsive_width'); ?>"px) {*/
	
		.sktMenu {    
		    background-color: <?php echo of_get_option('sub_menu_bg_color'); ?>;
		}

		.dropDown{       
        	background-color: <?php echo of_get_option('menu_item_text_color'); ?>;
        }

        .dropDown:hover{       
        	background-color: <?php echo of_get_option('menu_item_text_hover_color'); ?>;
        }
	
	}	

</style>