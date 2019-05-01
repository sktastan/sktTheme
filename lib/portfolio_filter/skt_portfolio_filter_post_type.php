<?php 
    /* 
        ========== Custom post type, taxonomy and custom metabox section start ==========
    */
    //portfolio custom post type
    function register_skt_portfolio_filter() {

        $singular = 'Portfolio Filter';
        $plural = 'Skt Porfolio Filter';

        $labels = array(

            'name'              => $plural,
            'single_name'       => $singular,
            'add_name'          => 'Add New Filter ',
            'add_new_item'      => 'Add New Item ' .  $singular,
            'edit'              => 'Edit ' . $singular,
            'edit_item'         => 'Edit ' . $singular,
            'new_item'          => 'New ' . $singular,
            'view'              => 'View ' . $singular,
            'view_item'         => 'View ' . $singular,
            'search_term'       => 'Search ' . $plural,
            'parent'            => 'Parent ' . $singular,
            'not_found'         => 'No ' . $plural . ' found',
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
                // 'slug'            => $slug,
                'with_front'      => true,
                'pages'           => true,
                'feeds'           => false,
            ),
            'supports'            => array( 
                'title', 
                //'editor',
                'page-attributes', 
                //'author', 
                //'custom-fields',
                //'thumbnail'
            )

        );        
        register_post_type( 'sktPortfolioFilter', $args );
    }
    
    add_action( 'init', 'register_skt_portfolio_filter' );

    //All Metaboxes here
    $prefix_portfolio_filter = 'skt_portfolio_filter'; 

    $portfolio_filter_meta_box = array( 
        'id' => 'portfolio-filter-meta-box', 
        'title' => 'Portfolio Filter Text', 
        'page' => 'sktPortfolioFilter', //custom post type name here
        'context' => 'normal', 
        'priority' => 'high', 
        'fields' => array(            

            array( 
                'name' => 'Filter Category', 
                'desc' => '', 
                'id' => $prefix_portfolio_filter . 'text1', 
                'type' => 'text', 
                'std' => 'Default value 1' 
            )
        ) 
    );

    // Add meta box 
    function portfolio_filter_add_box() { 
        global $portfolio_filter_meta_box; 
         
        add_meta_box($portfolio_filter_meta_box['id'], $portfolio_filter_meta_box['title'], 'portfolio_filter_show_box', $portfolio_filter_meta_box['page'], $portfolio_filter_meta_box['context'], $portfolio_filter_meta_box['priority']); 
    }
    add_action('admin_menu', 'portfolio_filter_add_box');

    // Callback function to show fields in meta box 
    function portfolio_filter_show_box() { 
        global $portfolio_filter_meta_box, $post; 
         
        // Use nonce for verification 
        echo '<input type="hidden" name="mytheme_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />'; 
         
        echo '<table class="form-table">'; 

        foreach ($portfolio_filter_meta_box['fields'] as $field) { 
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
    function portfolio_filer_save_data($post_id) { 
        global $portfolio_filter_meta_box; 
         
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
         
        foreach ($portfolio_filter_meta_box['fields'] as $field) { 
            $old = get_post_meta($post_id, $field['id'], true); 
            $new = $_POST[$field['id']]; 
             
            if ($new && $new != $old) { 
                update_post_meta($post_id, $field['id'], $new); 
            } elseif ('' == $new && $old) { 
                delete_post_meta($post_id, $field['id'], $old); 
            } 
        } 
    } 
    add_action('save_post', 'portfolio_filer_save_data'); 
    /* 
        ========== Custom post type and custom metabox section finish ==========
    */   
?>