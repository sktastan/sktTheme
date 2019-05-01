<?php 
	// --------- Genaral Tab Settings --------- //
	$options[] = array(
		'name' => __( 'General Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$test_array = array(//radio button		
		'system_font' => __( 'System Fonts', 'theme-textdomain' ),
		'google_font' => __( 'Google Fonts', 'theme-textdomain' )
	);

	$options[] = array(//radio button
		'name' => __( 'Select Font Source', 'theme-textdomain' ),
		'desc' => __( 'Radio select with default options "System Fonts".', 'theme-textdomain' ),
		'id' => 'radio_font_option',
		'std' => 'google_font',
		'type' => 'radio',
		'options' => $test_array
	);

	$options[] = array(
		'name' => __( 'Page Title', 'theme-textdomain' ),
		'desc' => __( 'Input Page Title.', 'theme-textdomain' ),
		'id' => 'page_title',
		'std' => 'Skt Page Demo',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Page Width', 'theme-textdomain' ),
		'desc' => __( '(px or %) Input Page Width.', 'theme-textdomain' ),
		'id' => 'page_width',
		'std' => '80%',
		'type' => 'text'
	);

	function options_typography_get_os_fonts() {
		// OS Font Defaults
		$os_faces = array(
			'Arial, sans-serif' => 'Arial',
			'"Avant Garde", sans-serif' => 'Avant Garde',
			'Cambria, Georgia, serif' => 'Cambria',
			'Copse, sans-serif' => 'Copse',
			'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',
			'Georgia, serif' => 'Georgia',
			'"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',
			'Tahoma, Geneva, sans-serif' => 'Tahoma'
		);
		return $os_faces;
	}

	// Google Font Defaults Start
	function options_typography_get_google_fonts() {	
		
		$google_faces = array(
			'Arvo, serif' => 'Arvo',
			'Copse, sans-serif' => 'Copse',
			'Droid Sans, sans-serif' => 'Droid Sans',
			'Droid Serif, serif' => 'Droid Serif',
			'Lobster, cursive' => 'Lobster',
			'Nobile, sans-serif' => 'Nobile',
			'Open Sans, sans-serif' => 'Open Sans',
			'Oswald, sans-serif' => 'Oswald',
			'Pacifico, cursive' => 'Pacifico',
			'Rokkitt, serif' => 'Rokkit',
			'PT Sans, sans-serif' => 'PT Sans',
			'Quattrocento, serif' => 'Quattrocento',
			'Raleway, cursive' => 'Raleway',
			'Ubuntu, sans-serif' => 'Ubuntu',
			'Yanone Kaffeesatz, sans-serif' => 'Yanone Kaffeesatz',
			'Source Sans Pro, sans-serif' => 'Source Sans Pro'
		);
		return $google_faces;
	}

	$options[] = array( 
		'name' => __( 'System Fonts', 'theme-textdomain' ),
		'desc' => 'System fonts.',
		'id' => 'system_font',
		// 'std' => array( 'size' => '14px', 'face' => 'Georgia, serif', 'color' => '#2c3e50'),
		'std' => array( 'size' => '100%', 'face' => 'Georgia, serif', 'color' => '#2c3e50'),
		'type' => 'typography',
		'options' => array(
							'faces' => options_typography_get_os_fonts()
						  )
		);	

	$options[] = array(
		'name' => __( 'Google Fonts', 'theme-textdomain' ),
		'desc' => 'Fifteen of the top google fonts.',
		'id' => 'google_font',
		// 'std' => array( 'size' => '14px', 'face' => 'Source Sans Pro, sans-serif', 'color' => '#2c3e50'),
		'std' => array( 'size' => '100%', 'face' => 'Source Sans Pro, sans-serif', 'color' => '#2c3e50'),
		'type' => 'typography',
		'options' => array(
							'faces' => options_typography_get_google_fonts(),
							'styles' => array(  'normal' => 'Normal',
												'bold' => 'Bold',
												'italic' => 'Italic'												
											 )/**/
						  )
		);

	// Extra font style
	$extra_style = array(
		'100' => __( '100', 'theme-textdomain' ),
		'200' => __( '200', 'theme-textdomain' ),
		'300' => __( '300', 'theme-textdomain' ),
		'400' => __( '400', 'theme-textdomain' ),
		'500' => __( '500', 'theme-textdomain' ),
		'600' => __( '600', 'theme-textdomain' ),
		'700' => __( '700', 'theme-textdomain' ),
		'800' => __( '800', 'theme-textdomain' ),
		'900' => __( '900', 'theme-textdomain' )
	);

	$options[] = array( 
		'name' => __( 'Extra Google Font Styles', 'theme-textdomain' ),
		'desc' => __( 'Select Google Extra Font Styles.', 'theme-textdomain' ),
		'id' => 'extra_font_style',
		'std' => '400',
		'type' => 'select',
		'class' => 'mini', //mini, tiny, small
		'options' => $extra_style
	);	

	// Google Font Defaults Finish		

	$options[] = array(
		'name' => __( 'Background Image', 'theme-textdomain' ),
		'desc' => __( 'Select Background Image.', 'theme-textdomain' ),
		'id' => 'page_bg_img',
		'type' => 'upload'
	);

	$options[] = array(
		'name' => __( 'Background Color', 'theme-textdomain' ),
		'desc' => __( 'Select Page Background Color', 'theme-textdomain' ),
		'id' => 'page_bg_color',
		'std' => '',
		'type' => 'color'
	);
?>