<?php 
	// Create Shortcode social_icons
	// Use the shortcode: [social_icons id="social_id"]
	function create_socialicons_shortcode($atts) {
		// Attributes
		$atts = shortcode_atts(
			array(
				'id' => 'social_id',
			),
			$atts,
			'social_icons'
		);
		// Attributes in var
		$id = $atts['id'];

		global $post;
		// global $prefix ;

		// do shortcode actions here		
		$args=array(
			"post_type" => "social", // same name 'social'   ==register_post_type( 'social', $args );==
			// "order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		// Your Code

		$loop = new WP_Query($args); 

		$output = '<div class="social">			
			    <ul>'; 	

		while ($loop->have_posts()) : $loop->the_post();

			if (get_post_meta($post->ID, "socialicontit_19515", true)) :
				$social_icon_title = get_post_meta($post->ID, "socialicontit_19515", true);				
			endif;

			if (get_post_meta($post->ID, "socialiconsna_75441", true)) :
				$social_icons_name = get_post_meta($post->ID,"socialiconsna_75441", true);				
			endif;

			$output .= '<li><a title="'. $social_icon_title .'" class="tooltip" href="#"><i class="fab fa-'. $social_icons_name .'"></i></a></li>';

		endwhile;

		$output .= '</ul>
				</div>';

		return $output;
		
	}
	add_shortcode( 'social_icons', 'create_socialicons_shortcode' );
?>