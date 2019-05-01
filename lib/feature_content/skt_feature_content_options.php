<?php 

	//-------------------------------------------------------------------------------//
	// 								 Feature Content Settings                  
	//-------------------------------------------------------------------------------//
	
	$options[] = array(
		'name' => __( 'Feature Content', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Headline Text', 'theme-textdomain' ),
		'desc' => __( 'Select Headline Text.', 'theme-textdomain' ),
		'id' => 'feature_headline_txt',
		'std' => 'Lorem ipsum dolor',
		'type' => 'text'
	);


	$options[] = array(
		'name' => __( 'Headline Color', 'theme-textdomain' ),
		'desc' => __( 'Select Headline Color.', 'theme-textdomain' ),
		'id' => 'head_line_color',
		'std' => '#34495e',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Content Background Color', 'theme-textdomain' ),
		'desc' => __( 'Select Circle Content BgColor.', 'theme-textdomain' ),
		'id' => 'circle_bgcolor',
		'std' => '#1abc9c',
		'type' => 'color'
	);		

	$options[] = array(
		'name' => __( 'Circle Color', 'theme-textdomain' ),
		'desc' => __( 'Select Circle Color.', 'theme-textdomain' ),
		'id' => 'circle_color',
		'std' => '#34495e',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Circle Border Color', 'theme-textdomain' ),
		'desc' => __( 'Select Circle Border Color.', 'theme-textdomain' ),
		'id' => 'circle_border_color1',
		'std' => '#34495e',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Content Padding', 'theme-textdomain' ),
		'desc' => __( 'Input Content Padding.', 'theme-textdomain' ),
		'id' => 'content_padding',
		'std' => '30',
		'type' => 'text'
	);	

	$options[] = array(
		'name' => __( 'Left Content Text Align', 'theme-textdomain' ),
		'desc' => __( 'Input Left Content Text Align. ( left, center, justify, right )', 'theme-textdomain' ),
		'id' => 'content_left_text_align',
		'std' => 'left',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Feature Content Headline Animation', 'theme-textdomain' ),
		'desc' => __( 'Select Feature Content Headline Animation.', 'theme-textdomain' ),
		'id' => 'feature_content_headline_animation',
		'std' => 'slideInDown',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		'options' => $animation_array
	);



?>