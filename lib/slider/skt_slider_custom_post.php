<?php

	/* 
		========== Custom post type, taxonomy and custom metabox section start ==========
	*/
	//custom post type
	function sktSlider_register_post_type() {
		
		$singular = 'Slide';
		$plural = 'Skt Slider';

		$labels = array(

			'name' 				=> $plural,
			'single_name' 		=> $singular,
			'add_name' 			=> 'Add New Slide ',
			'add_new_item' 		=> 'Add New Item ' .  $singular,
			'edit' 				=> 'Edit ' . $singular,
			'edit_item' 		=> 'Edit ' . $singular,
			'new_item' 			=> 'New ' . $singular,
			'view' 				=> 'View ' . $singular,
			'view_item' 		=> 'View ' . $singular,
			'search_term' 		=> 'Search ' . $plural,
			'parent' 			=> 'Parent ' . $singular,
			'not_found' 		=> 'No ' . $plural . ' found',
			'not_found_in_trash' => 'No ' . $plural . ' in trash',
 
		); 

		$args = array(

			'labels' => $labels,
			'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => true,
	        'show_ui'             => true,
	        //'show_in_menu'        => true,
	        'show_in_menu' => 'skt-menu',
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-businessman',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => true,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'page',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array( 
	        	// 'slug' 			  => $slug,
	        	'with_front' 	  => true,
	        	'pages' 		  => true,
	        	'feeds' 		  => false,
	        ),
	        'supports'            => array( 
	        	'title', 
	        	//'editor',
	        	'page-attributes', 
	        	//'author', 
	        	//'custom-fields',
	        	'thumbnail'
	        )

		);

		add_theme_support('post-thumbnails');
		register_post_type( 'sktSlider', $args );
	}
	add_action( 'init', 'sktSlider_register_post_type' );
	
	//All Metaboxes here
	$prefix = 'skt_'; 

	$saSlider_meta_box = array( 
	    'id' => 'sktSlider-meta-box', 
	    'title' => 'Slider Text', 
	    'page' => 'sktSlider', //custom post type name here
	    'context' => 'normal', 
	    'priority' => 'high', 
	    'fields' => array(

	        array( 
	            'name' => 'Headline1', 
	            //'desc' => 'Enter something here', 
	            'desc' => '',
	            'id' => $prefix . 'text1', 
	            'type' => 'text', 
	            'std' => 'Default value 1' 
	        ),

	        array( 
	            'name' => 'Headline2', 
	            'desc' => '', 
	            'id' => $prefix . 'text2', 
	            'type' => 'text', 
	            'std' => 'Default value 2' 
	        ),

	        array( 
	            'name' => 'Headline3', 
	            'desc' => '', 
	            'id' => $prefix . 'text3', 
	            'type' => 'text', 
	            'std' => 'Default value 3' 
	        )

	    ) 
	);	 

	// Add meta box 
	function sktSlider_add_box() { 
	    global $saSlider_meta_box; 
	     
	    add_meta_box($saSlider_meta_box['id'], $saSlider_meta_box['title'], 'sktSlider_show_box', $saSlider_meta_box['page'], $saSlider_meta_box['context'], $saSlider_meta_box['priority']); 
	}
	add_action('admin_menu', 'sktSlider_add_box'); 

	// Callback function to show fields in meta box 
	function sktSlider_show_box() { 
	    global $saSlider_meta_box, $post; 
	     
	    // Use nonce for verification 
	    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />'; 
	     
	    echo '<table class="form-table">'; 

	    foreach ($saSlider_meta_box['fields'] as $field) { 
	        // get current post meta data 
	        $meta = get_post_meta($post->ID, $field['id'], true); 
	         
	        echo '<tr>', 
	                '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>', 
	                '<td>'; 
	        switch ($field['type']) { 
	            case 'text': 
	                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:100%" />', 
	                    '<br />', $field['desc']; 
	                break;

	            
	        } 
	        echo     '<td>', 
	            '</tr>'; 
	    } ?>

		<?php		

       	echo '</table>';
	}

	// Save data from meta box 
	function sktSlider_save_data($post_id) { 
	    global $saSlider_meta_box; 
	     
	    // verify nonce 
	    if (!wp_verify_nonce($_POST['mytheme_meta_box_nonce'], basename(__FILE__))) { 
	        return $post_id; 
	    } 

	    // check autosave 
	    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) { 
	        return $post_id; 
	    } 

	    // check permissions 
	    if ('page' == $_POST['post_type']) { 
	        if (!current_user_can('edit_page', $post_id)) { 
	            return $post_id; 
	        } 
	    } elseif (!current_user_can('edit_post', $post_id)) { 
	        return $post_id; 
	    } 
	     
	    foreach ($saSlider_meta_box['fields'] as $field) { 
	        $old = get_post_meta($post_id, $field['id'], true); 
	        $new = $_POST[$field['id']]; 
	         
	        if ($new && $new != $old) { 
	            update_post_meta($post_id, $field['id'], $new); 
	        } elseif ('' == $new && $old) { 
	            delete_post_meta($post_id, $field['id'], $old); 
	        } 
	    } 
	} 
	add_action('save_post', 'sktSlider_save_data');
	/* 
		========== Custom post type and custom metabox section finish ==========
	*/	
?> 