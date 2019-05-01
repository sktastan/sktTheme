<?php 

	//Portfolio Settings
	$options[] = array(
		'name' => __( 'Portfolio', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Headline Text', 'theme-textdomain' ),
		'desc' => __( 'Select Headline Text.', 'theme-textdomain' ),
		'id' => 'portfolio_headline_text',
		'std' => 'Lorem ipsum dolor',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Portfolio BgColor', 'theme-textdomain' ),
		'desc' => __( 'Select Portfolio BgColor.', 'theme-textdomain' ),
		'id' => 'portfolio_bgcolor',
		'std' => '#000',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Portfolio Filter BgColor', 'theme-textdomain' ),
		'desc' => __( 'Select Portfolio Filter BgColor.', 'theme-textdomain' ),
		'id' => 'portfolio_filter_bgcolor',
		'std' => '#000',
		'type' => 'color'
	);			

	$options[] = array(
		'name' => __( 'Portfolio Label BgColor', 'theme-textdomain' ),
		'desc' => __( 'Select Portfolio Label BgColor.', 'theme-textdomain' ),
		'id' => 'portfolio_label_bgcolor',
		'std' => '#000',
		'type' => 'color'
	);	

?>