<?php 

	//skt_portfolio shortcode		 
	function skt_portfolio_shortcode( $atts ,$content = null) {
		$atts = shortcode_atts( array(
			'id' => 898
		), $atts );

		global $post;
		global $prefix_portfolio ;
	
		// do shortcode actions here		
		$args=array(
			"post_type" => "sktportfolio",
			"order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		$counter =0;

		$loop = new WP_Query($args);

		$output ='<div id="portfoliolist">';

		
		while ($loop->have_posts()) : $loop->the_post();

			$counter++;

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );

			if (get_post_meta($post->ID, $prefix_portfolio . "text1", true)) :
				$headline1 = get_post_meta($post->ID, $prefix_portfolio . "text1", true);				
			endif;

			if (get_post_meta($post->ID, $prefix_portfolio . "text2", true)) :
				$headline2 = get_post_meta($post->ID, $prefix_portfolio . "text2", true);				
			endif;		
						
			$output .='<div class="portfolio '. $headline2 .'" data-cat="'. $headline2 .'">
						<div class="portfolio-wrapper">				
							<a href="#p_'. $counter .'"><img src="'.  $large_image_url[0] .'" alt="'.  $large_image_url[0] .'" /></a>
								<div class="label">
									<div class="label-text">
										<a class="text-title" >'. $headline1 .'</a>
										<span class="text-category">'. $headline2 .'</span>					
									</div>
									<div class="label-bg"></div>
								</div>
							</div>
						</div>

						<div class="lightbox-target" id="p_'. $counter .'">											
							<img src="'.  $large_image_url[0] .'" alt="'.  $large_image_url[0] .'" />					
							<a class="lightbox-close" href="#p"></a>					
						</div>
						';								

		endwhile;
					
		$output .=' 
					<div class="clear"></div>
					</div>	

				';

	    return $output;
	}
	add_shortcode( 'skt_portfolio','skt_portfolio_shortcode' );

?>