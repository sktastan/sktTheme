<?php 

	//Pic Feature Settings
	$options[] = array(
		'name' => __( 'Pic Feature', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Headline Text', 'theme-textdomain' ),
		'desc' => __( 'Select Headline Text.', 'theme-textdomain' ),
		'id' => 'pic_feature_headline_txt',
		'std' => 'Lorem ipsum dolor',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Pic Feature Padding', 'theme-textdomain' ),
		'desc' => __( 'Input Pic Feature Padding.', 'theme-textdomain' ),
		'id' => 'pic_feature_padding',
		'std' => '30px 0',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Link Color', 'theme-textdomain' ),
		'desc' => __( 'Select Link Color.', 'theme-textdomain' ),
		'id' => 'link_color',
		'std' => '#34495e',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Link Hover Color', 'theme-textdomain' ),
		'desc' => __( 'Select Link Hover Color.', 'theme-textdomain' ),
		'id' => 'link_hover_color',
		'std' => '#1abc9c',
		'type' => 'color'
	);	

?>