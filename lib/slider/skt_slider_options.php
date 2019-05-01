<?php 
	// --------- Slider Settings --------- //
	$options[] = array(
		'name' => __( 'Slider', 'theme-textdomain' ),
		'type' => 'heading'
	);	

	$options[] = array(
		'name' => __( 'Slider Background Color', 'theme-textdomain' ),
		'desc' => __( 'Select Background Color.', 'theme-textdomain' ),
		'id' => 'slider_bg_color',
		'std' => '#ffffff',
		'type' => 'color'
	);	

	$options[] = array(
		'name' => __( 'Overlay Point', 'theme-textdomain' ),
		'desc' => __( 'Example checkbox, defaults to false.', 'theme-textdomain' ),
		'id' => 'overlay_point',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Overlay Mask', 'theme-textdomain' ),
		'desc' => __( 'Example checkbox, defaults to false.', 'theme-textdomain' ),
		'id' => 'overlay_mask',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Overlay Mask Background Color Opacity', 'theme-textdomain' ),
		'desc' => __( 'Select Overlay Mask Background Color Opacity.', 'theme-textdomain' ),
		'id' => 'overlay_mask_bg_color_opacity',
		'std' => '50',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Overlay Mask Color', 'theme-textdomain' ),
		'desc' => __( 'Select Mask Background Color.', 'theme-textdomain' ),
		'id' => 'overlay_mask_bg_color',
		'std' => '#a1a1a1',
		'type' => 'color'
	);		

	$options[] = array(
		'name' => __( 'Indicator Color', 'theme-textdomain' ),
		'desc' => __( 'Select Indicator Color.', 'theme-textdomain' ),
		'id' => 'indicator_color',
		'std' => '#000000',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Overlay Text Background Color', 'theme-textdomain' ),
		'desc' => __( 'Input Sub Menu Background Color.', 'theme-textdomain' ),
		'id' => 'overlay_text_bg_color',
		'std' => '#000000',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Overlay Text Background Color Opacity', 'theme-textdomain' ),
		'desc' => __( 'Input Overlay Text Background Color Opacity.', 'theme-textdomain' ),
		'id' => 'overlay_text_bg_color_opacity',
		'std' => '70',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Slider Picture In Animation Class', 'theme-textdomain' ),
		'desc' => __( 'Input Slider Picture Animation Class.', 'theme-textdomain' ),
		'id' => 'slider_bg_in_animation_class',
		'std' => 'fadeIn',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		// 'options' => $sub_menu_animation_array
		'options' => $animation_array
		
	);

	$options[] = array(
		'name' => __( 'Slider Picture Out Animation Class', 'theme-textdomain' ),
		'desc' => __( 'Input Slider Picture Out Animation Class.', 'theme-textdomain' ),
		'id' => 'slider_bg_out_animation_class',
		'std' => 'fadeOut',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		// 'options' => $sub_menu_animation_array
		'options' => $animation_array
	);

	$options[] = array(
		'name' => __( 'Slider Text In Animation Class', 'theme-textdomain' ),
		'desc' => __( 'Input Slider Text In Animation Class.', 'theme-textdomain' ),
		'id' => 'slider_txt_in_animation_class',
		'std' => 'fadeInDown',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		// 'options' => $sub_menu_animation_array
		'options' => $animation_array
	);

	$options[] = array(
		'name' => __( 'Slider Text Out Animation Class', 'theme-textdomain' ),
		'desc' => __( 'Input Slider Text Out Animation Class.', 'theme-textdomain' ),
		'id' => 'slider_txt_out_animation_class',
		'std' => 'fadeOutDown',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		// 'options' => $sub_menu_animation_array
		'options' => $animation_array
	);

	$options[] = array(
		'name' => __( 'Overlay Mask Gradient', 'theme-textdomain' ),
		'desc' => __( 'Overlay Mask Gradient, defaults to false.', 'theme-textdomain' ),
		'id' => 'overlay_mask_gradient',
		'std' => '0',
		'type' => 'checkbox'
	);

	$overlay_mask_gradient_array = array(//radio button		
		'overlay_mask_lineer_gradient' => __( 'Lineer Gradient', 'theme-textdomain' ),
		'overlay_mask_radial_gradient' => __( 'Radial Gradient', 'theme-textdomain' )
	);

	$options[] = array(//radio button
		'name' => __( 'Select Overlay Mask Gradient', 'theme-textdomain' ),
		'desc' => __( 'Overlay Mask Gradient.', 'theme-textdomain' ),
		'id' => 'overlay_mask_gradient_option',
		'std' => 'overlay_mask_lineer_gradient',
		'type' => 'radio',
		'options' => $overlay_mask_gradient_array
	);


	$options[] = array(
		'name' => __( 'Overlay Mask SkewX Degree', 'theme-textdomain' ),
		'desc' => __( 'Overlay Mask SkewX Degree.', 'theme-textdomain' ),
		'id' => 'mask_skewx_deg',
		'std' => '20',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Overlay Mask Shift Left', 'theme-textdomain' ),
		'desc' => __( 'Overlay Mask Shift Left. (px or %)', 'theme-textdomain' ),
		'id' => 'mask_shift_left',
		'std' => '50',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Overlay Mask Box Shadow', 'theme-textdomain' ),
		'desc' => __( 'Select Overlay Mask Box Shadow, defaults to true.', 'theme-textdomain' ),
		'id' => 'overlay_mask_boxshadow',
		'std' => '1',
		'type' => 'checkbox'
	);
?>