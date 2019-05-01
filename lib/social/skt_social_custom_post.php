	<?php 
	// Register Custom Post Type social
	// Post Type Key: social
	function create_social_cpt() {

		$labels = array(
			'name' => __( 'social icons', 'Post Type General Name', 'text_domain' ),
			'singular_name' => __( 'social', 'Post Type Singular Name', 'text_domain' ),
			'menu_name' => __( 'Skt Social Icons', 'text_domain' ),
			'name_admin_bar' => __( 'social', 'text_domain' ),
			'archives' => __( 'social Archives', 'text_domain' ),
			'attributes' => __( 'social Attributes', 'text_domain' ),
			'parent_item_colon' => __( 'Parent social:', 'text_domain' ),
			'all_items' => __( 'Skt Socials icons', 'text_domain' ),
			'add_new_item' => __( 'Add New social', 'text_domain' ),
			'add_new' => __( 'Add New', 'text_domain' ),
			'new_item' => __( 'New social', 'text_domain' ),
			'edit_item' => __( 'Edit social', 'text_domain' ),
			'update_item' => __( 'Update social', 'text_domain' ),
			'view_item' => __( 'View social', 'text_domain' ),
			'view_items' => __( 'View socials icons', 'text_domain' ),
			'search_items' => __( 'Search social', 'text_domain' ),
			'not_found' => __( 'Not found', 'text_domain' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'text_domain' ),
			'featured_image' => __( 'Featured Image', 'text_domain' ),
			'set_featured_image' => __( 'Set featured image', 'text_domain' ),
			'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
			'use_featured_image' => __( 'Use as featured image', 'text_domain' ),
			'insert_into_item' => __( 'Insert into social', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this social', 'text_domain' ),
			'items_list' => __( 'socials icons list', 'text_domain' ),
			'items_list_navigation' => __( 'socials icons list navigation', 'text_domain' ),
			'filter_items_list' => __( 'Filter socials icons list', 'text_domain' ),
		);
		$args = array(
			'label' => __( 'social', 'text_domain' ),
			'description' => __( 'Social Media Icons', 'text_domain' ),
			'labels' => $labels,
			'menu_icon' => 'dashicons-admin-site',
			'supports' => array('title', ' ', /*'editor',*/ 'thumbnail', 'page-attributes', ),
			'taxonomies' => array(),
			'public' => true,
			'show_ui' => true,
			//'show_in_menu' => true,
			'show_in_menu' => 'skt-menu',
			'menu_position' => 5,
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'exclude_from_search' => false,
			'show_in_rest' => true,
			'publicly_queryable' => true,
			'capability_type' => 'post',
		);
		// add_theme_support('post-thumbnails');
		register_post_type( 'social', $args ); //custom post type name "social"

	}
	add_action( 'init', 'create_social_cpt', 0 );

	class socialmetaboxMetabox {
		private $screen = array(
			'post',
			// 'page',
			'id' => 'sktsocial-meta-box', 
		    'title' => 'Social Icons', 
		    'page' => 'social', //custom post type name here "social"
		    'context' => 'normal', 
		    'priority' => 'high', 
		);
		private $meta_fields = array(
			array(
				'label' => 'social_icon_title',
				'id' => 'socialicontit_19515',
				'type' => 'text',
			),
			array(
				'label' => 'social_icons_name',
				'id' => 'socialiconsna_75441',
				'type' => 'text',
			),
		);
		public function __construct() {
			add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
			add_action( 'save_post', array( $this, 'save_fields' ) );
		}
		public function add_meta_boxes() {
			foreach ( $this->screen as $single_screen ) {
				add_meta_box(
					'socialmetabox',
					__( 'social_meta_box', 'textdomain' ),
					array( $this, 'meta_box_callback' ),
					$single_screen,
					'advanced',
					'default'
				);
			}
		}
		public function meta_box_callback( $post ) {
			wp_nonce_field( 'socialmetabox_data', 'socialmetabox_nonce' );
			echo 'Social Meta Box';
			$this->field_generator( $post );
		}
		public function field_generator( $post ) {
			$output = '';
			foreach ( $this->meta_fields as $meta_field ) {
				$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
				$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
				if ( empty( $meta_value ) ) {
					$meta_value = $meta_field['default']; }
				switch ( $meta_field['type'] ) {
					default:
						$input = sprintf(
							'<input %s id="%s" name="%s" type="%s" value="%s">',
							$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
							$meta_field['id'],
							$meta_field['id'],
							$meta_field['type'],
							$meta_value
						);
				}
				$output .= $this->format_rows( $label, $input );
			}
			echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
		}
		public function format_rows( $label, $input ) {
			return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
		}
		public function save_fields( $post_id ) {
			if ( ! isset( $_POST['socialmetabox_nonce'] ) )
				return $post_id;
			$nonce = $_POST['socialmetabox_nonce'];
			if ( !wp_verify_nonce( $nonce, 'socialmetabox_data' ) )
				return $post_id;
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
				return $post_id;
			foreach ( $this->meta_fields as $meta_field ) {
				if ( isset( $_POST[ $meta_field['id'] ] ) ) {
					switch ( $meta_field['type'] ) {
						case 'email':
							$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
							break;
						case 'text':
							$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
							break;
					}
					update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
				} else if ( $meta_field['type'] === 'checkbox' ) {
					update_post_meta( $post_id, $meta_field['id'], '0' );
				}
			}
		}
	}
	
	if (class_exists('socialmetaboxMetabox')) {
		new socialmetaboxMetabox;
	};
?>