<script type="text/javascript">

	function animate(){			
		/*bg img animation*/
		jQuery("#slider ul#pics li:nth-child("+count+") div").animo({ animation: "<?php echo of_get_option( 'slider_bg_in_animation_class'); ?>", duration: 1, keep:true}, function(){			
			jQuery("#slider ul#pics li:nth-child("+count+") div").animo( { animation:  "<?php echo of_get_option( 'slider_bg_out_animation_class'); ?> delay3500ms", duration: 2, keep:true} );						
		});		

		/*slider content txt1 animation*/
		jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+1+")").animo({ animation:  "<?php echo of_get_option( 'slider_txt_in_animation_class'); ?>", duration: 0.5, keep:true}, function(){			
			jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+1+")").animo( { animation: "<?php echo of_get_option( 'slider_txt_out_animation_class'); ?> delay3500ms", duration: 1, keep:true} );						
		});

		/*slider content txt2 animation*/
		jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+2+")").animo({ animation: "<?php echo of_get_option( 'slider_txt_in_animation_class'); ?> delay05ms", duration: 0.5,  keep:true}, function(){			
			jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+2+")").animo( { animation: "<?php echo of_get_option( 'slider_txt_out_animation_class'); ?> delay2500ms", duration: 1,  keep:true} );						
		});
		
		/*slider content txt3 animation*/
		jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+3+")").animo({ animation: "<?php echo of_get_option( 'slider_txt_in_animation_class'); ?> delay1s", duration: 0.5,  keep:true}, function(){			
			jQuery("#slider ul#pics li:nth-child("+count+") div div p:nth-child("+3+")").animo( { animation: "<?php echo of_get_option( 'slider_txt_out_animation_class'); ?> delay1500ms", duration: 1,  keep:true} );						
		});			
	}
	
	jQuery(document).ready(function() {

		var tr_bg = hexTOrgba("<?php echo of_get_option( 'overlay_text_bg_color'); ?>", "<?php echo of_get_option( 'overlay_text_bg_color_opacity'); ?>" );
		
		jQuery('.img_txt_center p').css('cssText',"background-color:" + tr_bg);		

		if("<?php echo of_get_option( 'overlay_mask_gradient'); ?>" == true){

			<?php

				$gradient_option = of_get_option( 'overlay_mask_gradient_option' );
				if($gradient_option=='overlay_mask_radial_gradient'){ 

			?>
				
				var grad = "<?php echo of_get_option('overlay_mask_bg_color');?>"

	 			jQuery('.mask').css({"background" : "-webkit-radial-gradient(circle, rgba(0,0,0,0),rgba(0,0,0,0.1) ," + grad });
				// $mask_gradient = of_get_option( 'overlay_mask_radial_gradient' );
			
			<?php }

				else if($gradient_option=='overlay_mask_lineer_gradient'){

			?>

				var grad = "<?php echo of_get_option('overlay_mask_bg_color');?>"

	 			// -webkit-linear-gradient( left, <?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?> , rgba(0,0,0,0));
	 			jQuery('.mask').css({"background" : "-webkit-linear-gradient(left," + grad + ", rgba(0,0,0,0.5)"});
						// $mask_gradient = of_get_option( 'overlay_mask_lineer_gradient' );
				
			<?php }
				
			?>			
			
		}else{
			jQuery('.mask').css('cssText',"background-color:" + hexTOrgba("<?php echo of_get_option( 'overlay_mask_bg_color'); ?>", "<?php echo of_get_option( 'overlay_mask_bg_color_opacity'); ?>" ));
		}


		jQuery('.mask').css({

			// 'left': '0%',
			'left' : "<?php echo of_get_option( 'mask_shift_left' ); ?>" + '%',			    
			    
			// webkit-transform : 'skewX(20deg)',

		});

		
		if("<?php echo of_get_option( 'overlay_mask_boxshadow'); ?>" == true){

			// jQuery('.mask').css({'box-shadow': '10px 10px 30px ' + "<?php echo of_get_option( 'overlay_mask_bg_color'); ?>"});
			// jQuery('.mask').css({'box-shadow': '1px 1px 50px #000','border-right':'5px solid #aaa'});
			jQuery('.mask').css({'box-shadow': '1px 1px 50px #000'});

		}

			 // jQuery('.mask').css({skewX: '<?php echo of_get_option( 'mask_skewx_deg' ); ?>'})
			 // jQuery('.mask').css('-webkit-transform', 'skew(' + <?php echo of_get_option( 'mask_skewx_deg' ); ?> + 'deg, 0deg)');

			// jQuery('.mask').attr("css",{transform : "skewX(10deg)"});

		jQuery('#progress').css('cssText',"background-color:" + tr_bg);
		jQuery('#slider ul#buttons li img').css('cssText',"border: 3px solid " + tr_bg);
		jQuery('#slider ul#buttons li div.arrow_down').css('cssText',"border-top-color:" + tr_bg);

	});	

</script>  

<style type="text/css">

	#slider{
		background-color:  <?php echo of_get_option( 'slider_bg_color', '#000' ); ?>;
	}

	.mask{
	
		transform: skewX(<?php echo of_get_option( 'mask_skewx_deg' ); ?>deg);	
	    /*transform: skewX(20deg);	   */

		/*background: -webkit-radial-gradient(circle, rgba(0,0,0,0),rgba(0,0,0,0.5),<?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?>);		*/
		
		/*background: -webkit-linear-gradient( left, <?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?> , rgba(0,0,0,0)); 
		background: -moz-linear-gradient( left, <?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?> , #000);
		background: -o-linear-gradient( left, <?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?>, #ccc , #000);
		background: linear-gradient( left, <?php echo of_get_option( 'overlay_mask_bg_color', '#000' ); ?> , #000);*/
		
	}

	#slider ul#buttons li{
		background-color: <?php echo of_get_option( 'indicator_color', '#000' ); ?>;
	}

	/*#slider ul#buttons li img{   
	    border: 3px solid #000; 	     
	}*/

	#slider div.prev a:hover,
	#slider div.next a:hover{        
	    color:<?php echo of_get_option( 'indicator_color', '#000' ); ?>;    
	}

</style>