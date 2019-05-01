//-------------------------------------------------------------------------------//
// 								  Autoscroll                   
//-------------------------------------------------------------------------------//
jQuery(document).ready(function(){
	
	jQuery(window).scroll(function(){
		var s_top = jQuery(window).scrollTop();

		if(s_top>100){
			jQuery('#go_top').fadeIn(500);
		}
		else{
			jQuery('#go_top').fadeOut(600);
		}
	});
	
	jQuery('#go_top').click(function(){
		jQuery('html,body').animate({scrollTop:0},"slow");		
	});

				
});