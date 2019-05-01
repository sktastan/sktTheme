<?php 
	// --------- Header Tab Settings --------- //
	$options[] = array(
		'name' => __( 'Header Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	// Transparent Background Eneble/Disable
	$options[] = array(
		'name' => __( 'Header Transparent Background', 'theme-textdomain' ),
		'desc' => __( 'Header Transparent Background, defaults to true.', 'theme-textdomain' ),
		'id' => 'trans_bg',
		'std' => '1',
		'type' => 'checkbox'
	);

	// Header Background Color
	$options[] = array(
		'name' => __( 'Header Background Color', 'theme-textdomain' ),
		'desc' => __( 'Select Header Background Color', 'theme-textdomain' ),
		'id' => 'header_bg_color',
		'std' => '',
		'type' => 'color'
	);

	// Background Opacity value
	$options[] = array(
		'name' => __( 'Background Opacity', 'theme-textdomain' ),
		'desc' => __( 'Input Background Opacity Value.', 'theme-textdomain' ),
		'id' => 'header_bgc_opacity',
		'std' => '100',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Header border-top', 'theme-textdomain' ),
		'desc' => __( 'Header border-top , defaults to false.', 'theme-textdomain' ),
		'id' => 'border_top',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Header border-top color', 'theme-textdomain' ),
		'desc' => __( 'Select Header border-top color.', 'theme-textdomain' ),
		'id' => 'border_top_color',
		'std' => '#efefef',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Header border-top height', 'theme-textdomain' ),
		'desc' => __( 'Select Header border-top height.', 'theme-textdomain' ),
		'id' => 'border_top_height',
		'std' => '10px',
		'type' => 'text'
	);




	$options[] = array(
		'name' => __( 'Header border-bottom', 'theme-textdomain' ),
		'desc' => __( 'Header border-bottom , defaults to false.', 'theme-textdomain' ),
		'id' => 'border_bottom',
		'std' => '0',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Header border-bottom color', 'theme-textdomain' ),
		'desc' => __( 'Select Header border-bottom color.', 'theme-textdomain' ),
		'id' => 'border_bottom_color',
		'std' => '#efefef',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Header border-bottom Box Shadow', 'theme-textdomain' ),
		'desc' => __( 'Header border-bottom Box Shadow , defaults to true.', 'theme-textdomain' ),
		'id' => 'box_shadow',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Header Box Shadow Color', 'theme-textdomain' ),
		'desc' => __( 'Select Header Box Shadow Color.', 'theme-textdomain' ),
		'id' => 'box_shadow_color',
		'std' => '#efefef',
		'type' => 'color'
	);

	// Upload Logo Image
	$options[] = array(
		'name' => __( 'Logo Image', 'theme-textdomain' ),
		'desc' => __( 'Select logo Image.', 'theme-textdomain' ),
		'id' => 'logo_img',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Logo Width', 'theme-textdomain' ),
		'desc' => __( '(px) Input Logo Width Value.', 'theme-textdomain' ),
		'id' => 'logo_img_width',
		'std' => '140',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Logo Height', 'theme-textdomain' ),
		'desc' => __( '(px) Input Logo Height Value.', 'theme-textdomain' ),
		'id' => 'logo_img_height',
		'std' => '140',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Responsive Logo Width', 'theme-textdomain' ),
		'desc' => __( '(px) Input Logo Width Value.', 'theme-textdomain' ),
		'id' => 'res_logo_img_width',
		'std' => '70',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Responsive Logo Height', 'theme-textdomain' ),
		'desc' => __( '(px) Input Logo Height Value.', 'theme-textdomain' ),
		'id' => 'res_logo_img_height',
		'std' => '70',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Header Width', 'theme-textdomain' ),
		'desc' => __( '(px or %) Input Header Width.', 'theme-textdomain' ),
		'id' => 'header_width',
		'std' => '80',
		'type' => 'text'
	);

	// Animation
	$options[] = array(
		'name' => __( 'Header Animation', 'theme-textdomain' ),
		'desc' => __( 'Select Header Animation.', 'theme-textdomain' ),
		'id' => 'header_animation',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Header Animation', 'theme-textdomain' ),
		'desc' => __( 'Select Header Animation.', 'theme-textdomain' ),
		'id' => 'header_animation_style',
		'std' => 'slideInDown',
		'type' => 'select',
		'class' => 'small', //mini, tiny, small
		'options' => $animation_array
	);

	// Show Copyright Footer
	$options[] = array(
		'name' => __( 'Show Copyright Footer', 'theme-textdomain' ),
		'desc' => __( 'Select Show Copyright Footer.(for responsive)', 'theme-textdomain' ),
		'id' => 'copy_right',
		'std' => '1',
		'type' => 'checkbox'
	);

	$options[] = array(
		'name' => __( 'Copyright Text Color', 'theme-textdomain' ),
		'desc' => __( 'Input Copyright Text Color.', 'theme-textdomain' ),
		'id' => 'copy_right_text_color',
		'std' => '#005887',
		'type' => 'color'
	);

	$options[] = array(
		'name' => __( 'Copyright Background Color', 'theme-textdomain' ),
		'desc' => __( 'Input Copyright Background Color.', 'theme-textdomain' ),
		'id' => 'copy_right_bg_color',
		'std' => '#dddddd',
		'type' => 'color'
	);
?>