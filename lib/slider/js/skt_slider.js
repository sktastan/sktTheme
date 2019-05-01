/* Slider Start */
jQuery(document).ready(function(){	
	
	count=1;
	var speed=6000;	
	var li_length = jQuery("#slider ul#pics li").length;
	
	/* all elements hide */
	jQuery("#slider ul#buttons li").removeClass("active"); 
	jQuery("#slider ul#pics li div").hide();			
	jQuery("#progress").hide();

	/* first element show */
	jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");				
	jQuery("#slider ul#pics li:nth-child("+count+") div").show();	
	jQuery("#progress").show();
	
	animate();

	/*show next picture function*/ 
	jQuery.next_pic = function(){
		jQuery("#slider ul#buttons li").removeClass("active"); 
		jQuery("#slider ul#pics li:nth-child("+count+") div").hide();				
		jQuery("#progress").hide();		
		
		if(count > -1 && count < li_length){
			count++;
			jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");				
			jQuery("#slider ul#pics li:nth-child("+count+") div").show();			 			
			jQuery("#progress").show();
			animate();
		}

		else{
			count=1;
			jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");				
			jQuery("#slider ul#pics li:nth-child("+count+") div").show();			 			
			jQuery("#progress").show();
			animate();
		}		
	}

	/*show prev picture function*/
	jQuery.prev_pic = function(){		
		jQuery("#slider ul#buttons li").removeClass("active"); 
		jQuery("#slider ul#pics li div").hide();				
		jQuery("#progress").hide();	
		clearInterval(run);
		//jQuery("#progress").show();		
	
		if(count > 1 && count < li_length+1){
			count--;
			jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");				
			jQuery("#slider ul#pics li:nth-child("+count+") div").show();			 			
			jQuery("#progress").show();
			animate();			
		}

		else{
			count=li_length;
			jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");				
			jQuery("#slider ul#pics li:nth-child("+count+") div").show();			 			
			jQuery("#progress").show();
			animate();
		}
		run = setInterval('jQuery.next_pic()', speed);		
	}
	
	/* start */
	var run = setInterval('jQuery.next_pic()', speed);	
	jQuery(".pause a").hide();	

	/*button section function*/
	jQuery("#slider ul#buttons li:first").addClass("active"); 
	jQuery("#slider ul#buttons li").click(function(){
		clearInterval(run);
		jQuery("#progress").show();	

		var indisNo = jQuery(this).index()+1;
		count = indisNo; 

		jQuery("#slider ul#buttons li").removeClass("active"); 
		jQuery("#slider ul#pics li div").hide();				
		jQuery("#progress").hide();		
						
		jQuery("#slider ul#pics li:nth-child("+count+") div").show();				
		animate();
		run = setInterval('jQuery.next_pic()', speed);
		jQuery("#slider ul#buttons li:nth-child("+count+")").addClass("active");
		return false;
	});
	
	/*next button click function*/
	jQuery(".next").click(function(){
		jQuery.next_pic();

		return false;
	}); 

	/*prev button click function*/
	jQuery(".prev").click(function(){ 
		jQuery.prev_pic();		

		return false;
	});	

	jQuery("ul#buttons li").hover(function(){    			
		jQuery("ul#buttons li div.arrow_down").animo( { animation: 'fadeInDown', duration: 0.5, keep:false} );	
   	});

	// var get_height=jQuery(window).height();	
	// jQuery("#slider ul#pics li > div").css({"height":get_height}); 

	function ul_buttons_align(){
		var ul_buttons_width = jQuery('ul#buttons').width();
		jQuery('ul#buttons').css({'margin-left' : - (ul_buttons_width / 2 - 10)});
		/*console.log(ul_buttons_width / 2);	*/
	}

	ul_buttons_align();	 

	jQuery(window).resize(function (){
		ul_buttons_align();	
	});
	
	
});
/* Slider Finish */	