<?php
	//Admin tool bar disable code
	add_filter('show_admin_bar', '__return_false');

	//Enqueue Script
	include_once('lib/skt_enqueue_script.php'); 

  include_once('lib/autoscroll/skt_autoscroll_enqueue_script.php');  

  include_once('lib/header/skt_header_enqueue_script.php');
  include_once('lib/menu/skt_menu_enqueue_script.php');

	include_once('lib/slider/skt_slider_enqueue_script.php');
	include_once('lib/slider/skt_slider_custom_post.php');	
	include_once('lib/slider/skt_slider_shortcode.php');
  
  include_once('lib/feature_content/skt_fc_enqueue_script.php');
  include_once('lib/feature_content/skt_feature_content_post_type.php');
  include_once('lib/feature_content/skt_feature_content_shortcode.php');

  include_once('lib/pic_feature_content/skt_pic_feature_content_enqueue_script.php');
  include_once('lib/pic_feature_content/skt_pic_feature_content_post_type.php');
  include_once('lib/pic_feature_content/skt_pic_feature_content_shortcode.php');

  // include_once('lib/content/skt_content_enqueue_script.php');
  // include_once('lib/content/skt_content_custom_post.php');  
  // include_once('lib/content/skt_content_shortcode.php');

  include_once('lib/portfolio/skt_porfolio_enqueue_script.php');
  include_once('lib/portfolio_filter/skt_portfolio_filter_post_type.php');
  include_once('lib/portfolio_filter/skt_portfolio_filter_shortcode.php');
  include_once('lib/portfolio/skt_portfolio_post_type.php');
  include_once('lib/portfolio/skt_portfolio_shortcode.php'); 

	include_once('lib/footer/skt_footer_enqueue_script.php');	

  include_once('lib/social/skt_social_enqueue_script.php');
  include_once('lib/social/skt_social_custom_post.php'); 
  include_once('lib/social/skt_social_shortcode.php');

	define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';	

	// Loads options.php from child or parent theme
	$optionsfile = locate_template( 'options.php' );
	load_template( $optionsfile );

	//primary menu register section
	function register_main_menu() {
	    register_nav_menus( array(
	        'primary' => __( 'Primary Menu', 'THEMENAME' ),
	    ) );
	}
	add_action( 'init', 'register_main_menu' );

	function general_typography_styles(){
		
		$output = '';
		$google_fonts = of_get_option( 'google_font' );
		//echo $typography['face'];
		$select_google_font = explode(',',$google_fonts['face']);

	    if ( of_get_option( 'radio_font_option' ) == 'google_font') {

	    	//$output = "<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>" ; 
	    	$output ="<link href='https://fonts.googleapis.com/css?family=". $select_google_font[0] .":100,200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>";
	    	
	    	echo $output;

	    }
	}
	add_action('wp_head', 'general_typography_styles');

  function wpse_226690_admin_menu() {
      add_menu_page(
          'Skt',
          'Skt Theme',
          'read',
          'skt-menu',
          '', // Callback, leave empty
          'dashicons-calendar',
          1 // Position
      );
  }
  add_action( 'admin_menu', 'wpse_226690_admin_menu' );


	 // Widgets start
  function wp_menu_widgets_init() {
    register_sidebar( array(
      'name'          => __( 'Footer 1', 'wp_menu' ),
      'id'            => 'footer_1',    
      'description'   => __( 'Add widgets footer area.', 'wp_menu' ),
      'before_widget' => '<aside id="%1$s" class="footer_left %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer 2', 'wp_menu' ),
      'id'            => 'footer_2',    
      'description'   => __( 'Add widgets footer area.', 'wp_menu' ),
      'before_widget' => '<aside id="%1$s" class="footer_mid_1 %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer 3', 'wp_menu' ),
      'id'            => 'footer_3',    
      'description'   => __( 'Add widgets footer area.', 'wp_menu' ),
      'before_widget' => '<aside id="%1$s" class="footer_mid_2 %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
      'name'          => __( 'Footer 4', 'wp_menu' ),
      'id'            => 'footer_4',    
      'description'   => __( 'Add widgets footer area.', 'wp_menu' ),
      'before_widget' => '<aside id="%1$s" class="footer_mid_3 %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) ); 

    register_sidebar( array(
      'name'          => __( 'Footer 5', 'wp_menu' ),
      'id'            => 'footer_5',    
      'description'   => __( 'Add widgets footer area.', 'wp_menu' ),
      'before_widget' => '<aside id="%1$s" class="footer_right %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) ); 
  }
  add_action( 'widgets_init', 'wp_menu_widgets_init' );
  // Widgets finish
  

	// function menu_typography_styles(){
		
	// 	$output = '';
	// 	$menu_google_fonts = of_get_option( 'menu_google_font' );
	// 	//echo $typography['face'];
	// 	$select_menu_google_font = explode(',',$menu_google_fonts['face']);

	//     	//$output = "<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>" ; 
	//     	$output ="<link href='https://fonts.googleapis.com/css?family=". $select_menu_google_font[0] .":100,200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>";
	    	
	//     	echo $output;

	// }
	// add_action('wp_head', 'menu_typography_styles');
  
?>