<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

function optionsframework_options() {

	$options = array();	

	// Animation array
	$animation_array = array(

		'slideInDown' => __( 'slideInDown', 'theme-textdomain' ),

		'bounce' => __( 'bounce', 'theme-textdomain' ),
		'flash' => __( 'flash', 'theme-textdomain' ),
		'pulse' => __( 'pulse', 'theme-textdomain' ),
		'rubberBand' => __( 'rubberBand', 'theme-textdomain' ),
		'shake' => __( 'shake', 'theme-textdomain' ),
		'headShake' => __( 'headShake', 'theme-textdomain' ),
		'swing' => __( 'swing', 'theme-textdomain' ),
		'tada' => __( 'tada', 'theme-textdomain' ),
		'wobble' => __( 'wobble', 'theme-textdomain' ),
		'jello' => __( 'jello', 'theme-textdomain' ),
		'bounceIn' => __( 'bounceIn', 'theme-textdomain' ),
		'bounceInDown' => __( 'bounceInDown', 'theme-textdomain' ),
		'bounceInLeft' => __( 'bounceInLeft', 'theme-textdomain' ),
		'bounceInRight' => __( 'bounceInRight', 'theme-textdomain' ),
		'bounceInUp' => __( 'bounceInUp', 'theme-textdomain' ),
		'bounceOut' => __( 'bounceOut', 'theme-textdomain' ),
		'bounceOutDown' => __( 'bounceOutDown', 'theme-textdomain' ),
		'bounceOutLeft' => __( 'bounceOutLeft', 'theme-textdomain' ),
		'bounceOutRight' => __( 'bounceOutRight', 'theme-textdomain' ),
		'bounceOutUp' => __( 'bounceOutUp', 'theme-textdomain' ),
		'fadeIn' => __( 'fadeIn', 'theme-textdomain' ),
		'fadeInDown' => __( 'fadeInDown', 'theme-textdomain' ),
		'fadeInDownBig' => __( 'fadeInDownBig', 'theme-textdomain' ),
		'fadeInLeft' => __( 'fadeInLeft', 'theme-textdomain' ),
		'fadeInLeftBig' => __( 'fadeInLeftBig', 'theme-textdomain' ),
		'fadeInRight' => __( 'fadeInRight', 'theme-textdomain' ),
		'fadeInRightBig' => __( 'fadeInRightBig', 'theme-textdomain' ),
		'fadeInUp' => __( 'fadeInUp', 'theme-textdomain' ),
		'fadeInUpBig' => __( 'fadeInUpBig', 'theme-textdomain' ),
		'fadeOut' => __( 'fadeOut', 'theme-textdomain' ),
		'fadeOutDown' => __( 'fadeOutDown', 'theme-textdomain' ),
		'fadeOutDownBig' => __( 'fadeOutDownBig', 'theme-textdomain' ),
		'fadeOutLeft' => __( 'fadeOutLeft', 'theme-textdomain' ),
		'fadeOutLeftBig' => __( 'fadeOutLeftBig', 'theme-textdomain' )

	);

	// --------- General Settings --------- //
	include_once('lib/skt_general_options.php');

	// --------- Header Settings Area Start --------- //
	include_once('lib/header/skt_header_options.php');

	// --------- Menu Settings --------- //	
	include_once('lib/menu/skt_menu_options.php');

	// --------- Slider Settings --------- //	
	include_once('lib/slider/skt_slider_options.php');

	// --------- Feature Content Settings --------- //
	include_once('lib/feature_content/skt_feature_content_options.php');

	// --------- Picture Feature Content Settings --------- //
	include_once('lib/pic_feature_content/skt_pic_feature_content_options.php');

	// --------- Portfolio Settings --------- //
	include_once('lib/portfolio/skt_portfolio_options.php');	

	// --------- Footer Settings --------- //
	include_once('lib/footer/skt_footer_options.php');

	// --------- Social Settings --------- //
	include_once('lib/social/skt_social_options.php');

	return $options;
}