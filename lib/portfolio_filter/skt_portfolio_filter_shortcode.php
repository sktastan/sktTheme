<?php 

	//skt_portfolio shortcode		 
	function skt_portfolio_filter_shortcode( $atts ,$content = null) {
		$atts = shortcode_atts( array(
			'id' => 899
		), $atts );

		global $post;
		global $prefix_portfolio_filter ;
	
		// do shortcode actions here		
		$args=array(
			"post_type" => "sktportfoliofilter",
			"order_by" => "menu_order",
			"order" => "ASC",
			"posts_per_page" => -1
		);

		$loop = new WP_Query($args);	
		$data_filter_array[] = null;	
		$data_array_counter = 0;

		$output =' 
					<div class="skt_pic_ico_txt">
					<div class="page_width">

					<div id="portfolio_headline_text" style = "padding-bottom:30px" class="skt_head_line wow" data-wow-delay="1s">
						<p><span></span></p>
						<p>Pellentesque habitant morbi tristique ...</p>
						<hr>
					</div>

					<ul id="filters" class="clearfix">
						
				';

		$output.='<li><span class="filter active" data-filter="';

		while ($loop->have_posts()) : $loop->the_post();			
			if (get_post_meta($post->ID, $prefix_portfolio_filter . "text1", true)) :
				$data_filter = get_post_meta($post->ID, $prefix_portfolio_filter . "text1", true);				
			endif;	

			$output.= $data_filter_array[$data_array_counter] = $data_filter .' '; 

			$data_array_counter++;
		endwhile;

		$output.= '">All</span></li>';


		while ($loop->have_posts()) : $loop->the_post();

			if (get_post_meta($post->ID, $prefix_portfolio_filter . "text1", true)) :
				$data_filter = get_post_meta($post->ID, $prefix_portfolio_filter . "text1", true);				
			endif;				
						
			$output .='						
						<li><span class="filter" data-filter="'. $data_filter .'">'. $data_filter .'</span></li>
					';								

			/*$data_filter_array[$data_array_counter] = $data_filter;
			$data_array_counter++;*/

		endwhile;

		
		/*$output.='<li><span class="filter active" data-filter="';

					for( $i=0; $i<5; $i++ ){ 
						$output.= $data_filter_array[$i] .' '; 
					} 

		$output.= '">All</span></li>';*/		
					
		$output .=' 
					<div class="clear"></div>					
					</ul>	
					
				';
		// portfolio filter section finish -->

	    return $output;
	}
	add_shortcode( 'skt_portfolio_filter','skt_portfolio_filter_shortcode' );

?>