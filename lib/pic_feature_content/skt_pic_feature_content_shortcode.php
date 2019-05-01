<?php 

	// shortcode start	 	 
	function skt_pic_feature_content_shortcode( $atts ,$content = null) {
		$atts = shortcode_atts( array(
			'id' => 18
		), $atts );

		global $post;
		global $prefix_pic_feature_content ;
			
		$args=array(
			"post_type" => "sktpicfeature",
			"order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		$loop = new WP_Query($args);	

		$output = '
				<div class="skt_pic_ico_txt">
					<div class="page_width">

					<div id="pic_feature_content_headline_text" class="skt_head_line wow" data-wow-delay="1s">
						<p><span></span></p>
						
						<hr>
					</div>					
				';	
		
		while ($loop->have_posts()) : $loop->the_post();
			
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );

			if (get_post_meta($post->ID, $prefix_pic_feature_content . "text1", true)) :
				$headline1 = get_post_meta($post->ID, $prefix_pic_feature_content . "text1", true);				
			endif;

			if (get_post_meta($post->ID, $prefix_pic_feature_content . "text2", true)) :
				$headline2 = get_post_meta($post->ID, $prefix_pic_feature_content . "text2", true);				
			endif;							

				$output.='
				<div class="skt_col_3 wow bounceIn">
					<div class="skt_pic_ico_txt">
					    <div class="skt_pic">
					        <img src="'. $large_image_url[0] .'" alt="300x225.jpg" width="100%" height="100%" />
					    </div> 	   
					  
					    <div class="skt_pic_txt">
					        <p>'. $headline1 .'</p>
					        <p>'. $headline2 .'</p> 
					        <p><a href="#">Read more...</a></p>
					    </div>
					</div>
				</div>
				';

		endwhile;
					
		$output.='
					<div class="clear"></div>
					</div>
				</div>
				';
		// shortcode finish -->

	    return $output;
	}
	add_shortcode( 'skt_pic_feature_content','skt_pic_feature_content_shortcode' );

?>