<?php	

	//--------------------------------------------------------------------------------//
	//					Custom post type, and custom metabox section
	//--------------------------------------------------------------------------------//

	//custom post type
	function circle_content_register_post_type() {
		
		$singular = 'our_services';
		$plural = 'Skt Feature Content';

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
		register_post_type( 'sktcircleContent', $args );
	}
	add_action( 'init', 'circle_content_register_post_type' );
	
	//All Metaboxes here
	$prefix_circle = 'circle_'; 

	$circle_meta_box_array = array( 
	    'id' => 'circle_content_meta_box', 
	    'title' => 'Content Text', 
	    'page' => 'sktcircleContent', //custom post type name here
	    'context' => 'normal', 
	    'priority' => 'high', 
	    'fields' => array(    

	        array( 
	            'name' => 'Animation', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'anim', 
	            'type' => 'text', 
	            'std' => 'slideInLeft',
	            
	        ),	

	        array( 
	            'name' => 'Icon', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'text3', 
	            'type' => 'text', 
	            'std' => 'Default value 3' 
	        ),

	        array( 
	            'name' => 'Icon Animation', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'icon_anim', 
	            'type' => 'text', 
	            'std' => 'hi-icon-effect-9 hi-icon-effect-9a' 
	        ),

	        array( 
	            'name' => 'Circle Caption', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'text4', 
	            'type' => 'text', 
	            'std' => 'Default value 4' 
	        ),

	        array( 
	            'name' => 'Circle Content', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'text5', 
	            'type' => 'text', 
	            'std' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis dolores excepturi maxime, quaerat quia modi. Atque magni laborum ratione optio itaque earum enim odit numquam, cupiditate, quia, voluptatum dolore dignissimos.' 
	        ),

	        array( 
	            'name' => 'Circle Link', 
	            'desc' => '', 
	            'id' => $prefix_circle . 'text6', 
	            'type' => 'text', 
	            'std' => 'Default value 6' 
	        ),

	    ) 
	);		 

	// Add meta box 
	function circle_content_add_box() { 
	    global $circle_meta_box_array; 
	     
	    add_meta_box($circle_meta_box_array['id'], $circle_meta_box_array['title'], 'circle_content_meta_show', $circle_meta_box_array['page'], $circle_meta_box_array['context'], $circle_meta_box_array['priority']); 
	}
	add_action('admin_menu', 'circle_content_add_box'); 

	// Callback function to show fields in meta box 
	function circle_content_meta_show() { 
	    global $circle_meta_box_array, $post; 
	     
	    // Use nonce for verification 
	    echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />'; 
	     
	    echo '<table class="form-table">'; 


	    foreach ($circle_meta_box_array['fields'] as $field) { 
	        // get current post meta data 
	        $meta = get_post_meta($post->ID, $field['id'], true); 
	         
	        echo '<tr>', 
	                '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>', 
	                '<td>'; 
	        switch ($field['type']) { 

	            case 'text': 
	                echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />', 
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
	function circle_content_save_data($post_id) { 
	    global $circle_meta_box_array; 
	     
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

	    foreach ($circle_meta_box_array['fields'] as $field) { 
	        $old = get_post_meta($post_id, $field['id'], true); 
	        $new = $_POST[$field['id']]; 
	         
	        if ($new && $new != $old) { 
	            update_post_meta($post_id, $field['id'], $new); 
	        } elseif ('' == $new && $old) { 
	            delete_post_meta($post_id, $field['id'], $old); 
	        } 
	    } 
	} 
	add_action('save_post', 'circle_content_save_data');
	
?> 