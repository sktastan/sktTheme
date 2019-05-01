<?php 

	//use featured image start
	add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size();
	add_image_size( 'thumbnail-news');
	//use featured image finish

	//Sktslider shortcode		 
	function sktslider_shortcode( $atts ,$content = null) {
		$atts = shortcode_atts( array(
			'id' => 88
		), $atts );

		global $post;
		global $prefix ;
	
		// do shortcode actions here		
		$args=array(
			"post_type" => "sktSlider",
			"order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		$loop = new WP_Query($args); 

		$output = 	'<div id="slider">
	    				<ul id="pics">';
		
		while ($loop->have_posts()) : $loop->the_post();

		$output .= '<li><div class="img_txt_center_wrap">';

			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
		
			if (get_post_meta($post->ID, $prefix . "text1", true)) :
				$headline1 = get_post_meta($post->ID, $prefix . "text1", true);				
			endif;

			if (get_post_meta($post->ID, $prefix . "text2", true)) :
				$headline2 = get_post_meta($post->ID, $prefix . "text2", true);				
			endif;

			if (get_post_meta($post->ID, $prefix . "text3", true)) :
				$headline3 = get_post_meta($post->ID, $prefix . "text3", true);				
			endif;

			$output .= '<div class="bg_img_1" style="background: url( '. $large_image_url[0] .' ) no-repeat center center; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; "></div>';

			//options framework section start
			if ( of_get_option( 'overlay_point', 'no entry' )) :								
				$output .= '<div class="bg_point"></div>'; 							
			endif;

			if ( of_get_option( 'overlay_mask', 'no entry' )) :								
				$output .= '<div id="mask" class="mask"></div>'; 							
			endif; 	
			//options framework section finish
		
			$output .= '<div class="img_txt_center"><p>'. $headline1 .'</p><p>'. $headline2 .'</p><p>'. $headline3 .'</p></div>';
			
			$output .= '</div></li>';					

		endwhile;

		$output .= '</ul>

		<ul id="buttons">';

		while ($loop->have_posts()) : $loop->the_post();
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
			$output .= '<li><a href="#"></a><div class="arrow_down"><img src="' . $large_image_url[0] . '" alt="hw1"></div></li>';
		endwhile;

		$output .='</ul>';				

		$output .= '			
			<div class="next">
		    	<style type="text/css">#slider div.prev a:hover,#slider div.next a:hover{ color: '. get_post_meta($post->ID, "skt_text5", true) .' } </style>
		        <a href="#"><i class="fa fa-angle-double-right fa-3x"></i></a>     
		    </div>

		    <div class="prev">      
		        <a href="#"><i class="fa fa-angle-double-left fa-3x"></i></a>
		    </div>
		   
		   	</div> 
		   
	    	<div id="progress"></div>';

		return $output;		
	
	}
	add_shortcode( 'skt_slider','sktslider_shortcode' );

?>