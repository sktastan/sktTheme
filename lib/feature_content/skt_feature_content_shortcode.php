<?php 

	//skt_feature_content shortcode		 
	function skt_feature_content_shortcode( $atts ,$content = null) {
		$atts = shortcode_atts( array(
			'id' => 12
		), $atts );

		global $post;
		global $prefix_circle ;
	
		// do shortcode actions here		
		$args=array(
			"post_type" => "sktcircleContent",
			"order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		$loop = new WP_Query($args);

		$output = '
		<div class="feature_content">			
			<div class="page_width">

			<div id="feature_content_headline_text" class="skt_head_line wow" data-wow-delay="1s">
				<p><span></span></p>
				<hr>
			</div>
		';	
		
		while ($loop->have_posts()) : $loop->the_post();

			if (get_post_meta($post->ID, $prefix_circle . "anim", true)) :
				$animation = get_post_meta($post->ID, $prefix_circle . "anim", true);				
			endif;						

			if (get_post_meta($post->ID, $prefix_circle . "text3", true)) :
				$icon = get_post_meta($post->ID, $prefix_circle . "text3", true);				
			endif;

			if (get_post_meta($post->ID, $prefix_circle . "icon_anim", true)) :
				$icon_anim = get_post_meta($post->ID, $prefix_circle . "icon_anim", true);				
			endif;

			if (get_post_meta($post->ID, $prefix_circle . "text4", true)) :
				$headline1 = get_post_meta($post->ID, $prefix_circle . "text4", true);				
			endif;

			if (get_post_meta($post->ID, $prefix_circle . "text5", true)) :
				$headline2 = get_post_meta($post->ID, $prefix_circle . "text5", true);				
			endif;			

			if (get_post_meta($post->ID, $prefix_circle . "text6", true)) :
				$headline3 = get_post_meta($post->ID, $prefix_circle . "text6", true);				
			endif;				

			$output.='			
			        <div class="skt_col_3 wow ' . $animation . '">
			            <div class="skt_circle_content_1">
			                <div class="skt_circle_content_1_ico ' . $icon_anim . '">
			                    <a href="#set-1" class="hi-icon"><i class="fas fa-'. $icon .'"></i></a>
			                </div>
			                <div class="skt_circle_content_1_txt">
			                    <p>'. $headline1 .'</p>
			                    <p>'. $headline2 .'</p>
			                    <p><a href="#">'. $headline3 .'</a></p>
			                </div>
			            </div>
			        </div>';								

		endwhile;
					
		$output.='
				<div class="clear"></div> 	
				</div>			
			</div>
		';	

	    return $output;
	}
	add_shortcode( 'skt_feature_content','skt_feature_content_shortcode' );

?>