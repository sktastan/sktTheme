<?php 
	// --------- Footer Tab Settings --------- //
	
	$options[] = array(
		'name' => __( 'Footer', 'theme-textdomain' ),
		'type' => 'heading'
	);

	// Upload Logo Image
	$options[] = array(
		'name' => __( 'Footer Background Picture', 'theme-textdomain' ),
		'desc' => __( 'Select Footer Background Picture.', 'theme-textdomain' ),
		'id' => 'footer_bg_picture',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Footer Padding', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Padding', 'theme-textdomain' ),
		'id' => 'footer_padding',
		'std' => '1px',
		'type' => 'text'
	);	

	$options[] = array(
		'name' => __( 'Footer Title Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Title Color.', 'theme-textdomain' ),
		'id' => 'title_color',
		'std' => '#a1a1a1',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Footer Text Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Text Color.', 'theme-textdomain' ),
		'id' => 'footer_text_color',
		'std' => '#b1b1b1',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Footer Link Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Link Color.', 'theme-textdomain' ),
		'id' => 'footer_link_color',
		'std' => '#a1a1a1',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Footer Background Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Background Color.', 'theme-textdomain' ),
		'id' => 'footer_bg_color',
		'std' => '#f4f4f4',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Footer Border', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Border', 'theme-textdomain' ),
		'id' => 'footer_border',
		'std' => '1px',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Footer Border Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Border Color.', 'theme-textdomain' ),
		'id' => 'footer_border_color',
		'std' => '#f4f4f4',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Footer Aside Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Aside Color.', 'theme-textdomain' ),
		'id' => 'footer_aside_color',
		'std' => '#f4f4f4',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Footer Aside Opacity Value', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Aside Opacity Value', 'theme-textdomain' ),
		'id' => 'footer_aside_opacity',
		'std' => '50',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Footer Copyright Show', 'theme-textdomain' ),
		'desc' => __( 'Select Footer Copyright Show, defaults to true.', 'theme-textdomain' ),
		'id' => 'footer_copyright_show',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Footer Copyright Text', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Copyright Text', 'theme-textdomain' ),
		'id' => 'footer_copyright_text',
		'std' => 'Company Name © Copyright 2018 | Desing By SkT',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Footer Copyright Text Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Copyright Text Color.', 'theme-textdomain' ),
		'id' => 'footer_coptyright_text_color',
		'std' => '#f4f4f4',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Footer Copyright Border Bottom', 'theme-textdomain' ),
		'desc' => __( 'Select Footer Border Bottom, defaults to false.', 'theme-textdomain' ),
		'id' => 'footer_border_bottom',
		'std' => '0',
		'type' => 'checkbox'
	);	

	$options[] = array(
		'name' => __( 'Footer Copyright Border Bottom Height', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Border Bottom Height. (px)', 'theme-textdomain' ),
		'id' => 'border_bottom_height',
		'std' => '5',
		'type' => 'text'
	);	

	$options[] = array(
		'name' => __( 'Footer Copyright Border Bottom Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer  Border Bottom Color.', 'theme-textdomain' ),
		'id' => 'border_bottom_color',
		'std' => '#aaaaaa',
		'type' => 'color'
	);	 

	$options[] = array(
		'name' => __( 'Footer Copyright Text Align', 'theme-textdomain' ),
		'desc' => __( 'Footer Copyright Text Align. ( left, center, right)', 'theme-textdomain' ),
		'id' => 'text_align',
		'std' => 'left',
		'type' => 'text'
	);	

	$options[] = array(
		'name' => __( 'Footer Copyright Background Color', 'theme-textdomain' ),
		'desc' => __( 'Input Footer Copyright Background Color.', 'theme-textdomain' ),
		'id' => 'copyright_background_color',
		'std' => '#aaaaaa',
		'type' => 'color'
	);
?>