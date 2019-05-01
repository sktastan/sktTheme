<?php 
	// --------- Menu Settings --------- //
	$options[] = array(
		'name' => __( 'Menu Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Menu Item Width', 'theme-textdomain' ),
		'desc' => __( '(px) Input Menu Item Width.', 'theme-textdomain' ),
		'id' => 'menu_item_width',
		'std' => '40',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Menu Item Height', 'theme-textdomain' ),
		'desc' => __( '(px) Input Item Height.', 'theme-textdomain' ),
		'id' => 'menu_item_height',
		'std' => '28',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Show Menu Item Hover', 'theme-textdomain' ),
		'desc' => __( 'Select Menu Item Hover.(for responsive)', 'theme-textdomain' ),
		'id' => 'menu_item_hover',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Menu Item Hover Color', 'theme-textdomain' ),
		'desc' => __( 'Input Item Hover Color.', 'theme-textdomain' ),
		'id' => 'menu_item_hover_color',
		'std' => '#e1e1e1',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Menu Item Border Bottom', 'theme-textdomain' ),
		'desc' => __( 'Select Menu Item Hover.(for responsive)', 'theme-textdomain' ),
		'id' => 'menu_item_border_bottom',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Menu Item Border Bottom Width', 'theme-textdomain' ),
		'desc' => __( 'Input Menu Item Border Bottom Width.', 'theme-textdomain' ),
		'id' => 'menu_item_border_bottom_width',
		'std' => '2',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Menu Item Border Bottom Color', 'theme-textdomain' ),
		'desc' => __( 'Input Menu Item Border Bottom Color.', 'theme-textdomain' ),
		'id' => 'menu_item_border_bottom_color',
		'std' => 'orange',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Menu Item Text Color', 'theme-textdomain' ),
		'desc' => __( 'Input Menu Item Text Color.', 'theme-textdomain' ),
		'id' => 'menu_item_text_color',
		'std' => '#005887',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Menu Item Text Hover Color', 'theme-textdomain' ),
		'desc' => __( 'Input Menu Item Text Hover Color.', 'theme-textdomain' ),
		'id' => 'menu_item_text_hover_color',
		'std' => 'orange',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Menu Item Selected Color', 'theme-textdomain' ),
		'desc' => __( 'Input Menu Item Selected Color.', 'theme-textdomain' ),
		'id' => 'menu_item_text_seleced_color',
		'std' => '#005887',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Sub Menu Item Animation', 'theme-textdomain' ),
		'desc' => __( 'Select Sub Menu Item Animation', 'theme-textdomain' ),
		'id' => 'sub_menu_animation',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Sub Menu Item Animation Class', 'theme-textdomain' ),
		'desc' => __( 'Input Sub Menu Item Animation Class.', 'theme-textdomain' ),
		'id' => 'sub_menu_animation_class',
		'std' => 'bounceIn',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		'options' => $animation_array
	);

	$options[] = array(
		'name' => __( 'Sub Menu Background Color', 'theme-textdomain' ),
		'desc' => __( 'Input Sub Menu Background Color.', 'theme-textdomain' ),
		'id' => 'sub_menu_bg_color',
		'std' => '#fafafa',
		'type' => 'color'
	);
?>