jQuery(document).ready(function(){	
		
	//Porfolio setup section
	jQuery(function () {		
			var filterList = {
			
				init: function () {
				
					// MixItUp plugin
					// http://mixitup.io
					jQuery('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});				
				
				},
				
				hoverEffect: function () {
				
					// Simple parallax effect
					jQuery('#portfoliolist .portfolio').hover(
						function () {
							jQuery(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
							jQuery(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
						},
						function () {
							jQuery(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
							jQuery(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
						}		
					);			
				
				}

			};
			
			// Run the show!
			filterList.init();		
	});
 
});