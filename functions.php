<?php
/**
 * Php version 7 *
 *
 * @category Template_Class
 * @package Template_Class
 * @author Author <author@domain.com>
 * @license https://opensource.org/licenses/MIT MIT License
 *  @link http://localhost/
 */

/**
 * Loads child CSS
 */
function akb_add_files() {
	wp_enqueue_style( 'akb-style', get_stylesheet_directory_uri() . '/style.css', '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'akb_add_files' );

/**
 * Adds the top navbar like Arival
 */
function add_contact_navbar() {
	?> 
<div id="wpr-top-header" class="fixed">
		<div class="wpr-container-top-navbar">
			<ul class="wpr-navbar-left">
				<li class="wpr-navbar-left-item">
					<a href="#"><strong>Child theme:</strong>contact navbar content	<i class="fas fa-chevron-right"></i></a>
				</li>
			</ul>

			<ul class="wpr-menu-top">
				<li class="wpr-menu-item"><a href="#">First item</a></li>
				<li class="wpr-menu-item"><a href="#">Second item</a></li>
				<li class="wpr-menu-item"><a href="#">Third item</a></li>
			</ul>
		</div> <!-- .container -->
</div>
	<?php
}
add_action( 'astra_main_header_bar_top', 'add_contact_navbar' );

/**
 * Adds a custom post type name Engineers
 */
function register_engineers_cpt() {
	$engargs = array(
		'labels'        => array(
			'name'              => __( 'Industries', '' ),
			'singular_name'     => __( 'Industry', '' ),
			'search_items'      => __( 'Search Industry', '' ),
			'all_items'         => __( 'All Industries', '' ),
			'parent_item'       => __( 'Parent Industry', '' ),
			'parent_item_colon' => __( 'Parent Industry:', '' ),
			'edit_item'         => __( 'Edit Industry', '' ),
			'update_item'       => __( 'Update Industry', '' ),
			'add_new_item'      => __( 'Add new Industry', '' ),
			'new_item_name'     => __( 'New Industry', '' ),
		),
		'show_ui'       => true,
		'show_tagcloud' => false,
		'hierarchical'  => true,
		'show_in_rest'  => true,
		'has_archive'   => true,
	);
	register_taxonomy( 'industries', array( 'industries' ), $engargs );

	$args = array(
		'label'               => __( 'Engineers', '' ),
		'labels'              => array(
			'name'                  => __( 'Engineers', '' ),
			'singular_name'         => __( 'Engineer', '' ),
			'featured_image'        => __( 'Engineer Photo', '' ),
			'set_featured_image'    => __( 'Set Engineer Photo', '' ),
			'remove_featured_image' => __( 'Remove Engineer Photo', '' ),
			'use_featured_image'    => __( 'Use Engineer Photo', '' ),
			'add_new_item'          => __( 'Add a new Engineer', '' ),
			'add_new'               => __( 'Add Engineer', '' ),
			'edit_item'             => __( 'Edit Engineer', '' ),
			'view_items'            => __( 'View Engineers', '' ),
			'view_item'             => __( 'View Engineer', '' ),
		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'thumbnail', 'editor' ),
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-plugins-checked',
		'taxonomies'          => array( 'industries' ),
	);

	register_post_type( 'engineers', $args );
}
add_action( 'init', 'register_engineers_cpt' );
flush_rewrite_rules( false );

/**
 * Adds a custom post type name Software
 */
function register_software_cpt() {

	$taxargs = array(
		'labels'        => array(
			'name'              => __( 'Regions', '' ),
			'singular_name'     => __( 'Region', '' ),
			'search_items'      => __( 'Search Region', '' ),
			'all_items'         => __( 'All Regions', '' ),
			'parent_item'       => __( 'Parent Region', '' ),
			'parent_item_colon' => __( 'Parent Region:', '' ),
			'edit_item'         => __( 'Edit Region', '' ),
			'update_item'       => __( 'Update Region', '' ),
			'add_new_item'      => __( 'Add new Region', '' ),
			'new_item_name'     => __( 'New Region', '' ),
		),
		'show_ui'       => true,
		'show_tagcloud' => false,
		'hierarchical'  => true,
		'show_in_rest'  => true,
		'has_archive'   => true,
	);
	register_taxonomy( 'regions', array( 'regions' ), $taxargs );

	$args = array(
		'label'               => __( 'Software', '' ),
		'labels'              => array(
			'name'          => __( 'Software', '' ),
			'singular_name' => __( 'Software', '' ),
			'add_new_item'  => __( 'Add a new Software', '' ),
			'add_new'       => __( 'Add Software', '' ),
			'edit_item'     => __( 'Edit Software', '' ),
			'view_items'    => __( 'View Software', '' ),
			'view_item'     => __( 'View Software', '' ),

		),
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'has_archive'         => true,
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'map_meta_cap'        => true,
		'hierarchical'        => true,
		'query_var'           => true,
		'supports'            => array( 'title', 'editor' ),
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-album',
		'taxonomies'          => array( 'regions' ),
	);
		register_post_type( 'software', $args );
}
	add_action( 'init', 'register_software_cpt' );

/**
 * Adds a custom post
 *
 * @param args $args this is a comment.
 */
function tema_7_section_a_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Edit Section A settings.', 'wpr' ); ?></p>
	<?php
}

/**
 * Adds a custom post
 *
 * @param args $args this is a comment.
 */
function tema_7_section_b_callback( $args ) {
	?>
	<p id="<?php echo esc_attr( $args['id'] ); ?>"><?php esc_html_e( 'Edit Section B settings.', 'wpr' ); ?></p>
	<?php
}

/**
 * Adds
 *
 * @param args $args is ffsdfs.
 */
function token_field_callback( $args ) {
	// Get the value of the setting we've registered with register_setting().
	$options = get_option( 'wpr_options' );
	?>
<input
		value="<?php echo esc_attr( $options[ $args['label_for'] ] ); ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="text">
	<?php
}
/**
 * Adds
 *
 * @param args $args is ffsdfs.
 */
function client_id_callback( $args ) {
	// Get the value of the setting we've registered with register_setting().
	$options = get_option( 'wpr_options' );
	?>
<input
		value="<?php echo esc_attr( $options[ $args['label_for'] ] ); ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="text">
	<?php
}
/**
 * Adds
 *
 * @param args $args is ffsdfs.
 */
function software_discount_callback( $args ) {
	// Get the value of the setting we've registered with register_setting().
	$options = get_option( 'wpr_options' );
	?>
<input
		value="<?php echo esc_attr( $options[ $args['label_for'] ] ); ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="number">
	<?php
}
/**
 * Adds
 *
 * @param args $args is ffsdfs.
 */
function software_discount_period_callback( $args ) {
	// Get the value of the setting we've registered with register_setting().
	$options = get_option( 'wpr_options' );
	?>
<input
		value="<?php echo esc_attr( $options[ $args['label_for'] ] ); ?>"
		id="<?php echo esc_attr( $args['label_for'] ); ?>"
		data-custom="<?php echo esc_attr( $args['wpr_custom_data'] ); ?>"
		name="wpr_options[<?php echo esc_attr( $args['label_for'] ); ?>]"
		type="number">
	<?php
}

	add_action(
		'admin_init',
		function() {
			register_setting(
				'wpr_academy',
				'wpr_options'
			);
			add_settings_section(
				'tema_7_section_a_fields',
				'Section A',
				'tema_7_section_a_callback',
				'wpr_academy'
			);
			add_settings_section(
				'tema_7_section_b_fields',
				'Section B',
				'tema_7_section_b_callback',
				'wpr_academy'
			);
			add_settings_field(
				'wpr_token_tema',
				'Token',
				'token_field_callback',
				'wpr_academy',
				'tema_7_section_a_fields',
				array(
					'label_for'       => 'wpr_token_tema',
					'class'           => 'wpr_row',
					'wpr_custom_data' => 'custom',
				)
			);
			add_settings_field(
				'wpr_client_id_tema',
				'Client ID',
				'client_id_callback',
				'wpr_academy',
				'tema_7_section_a_fields',
				array(
					'label_for'       => 'wpr_client_id_tema',
					'class'           => 'wpr_row',
					'wpr_custom_data' => 'custom',
				)
			);
			add_settings_field(
				'wpr_software_discount_tema',
				'Software Discount (%)',
				'software_discount_callback',
				'wpr_academy',
				'tema_7_section_b_fields',
				array(
					'label_for'       => 'wpr_software_discount_tema',
					'class'           => 'wpr_row',
					'wpr_custom_data' => 'custom',
				)
			);
			add_settings_field(
				'wpr_discount_period_tema',
				'Software Period (no of days)',
				'software_discount_period_callback',
				'wpr_academy',
				'tema_7_section_b_fields',
				array(
					'label_for'       => 'wpr_discount_period_tema',
					'class'           => 'wpr_row',
					'wpr_custom_data' => 'custom',
				)
			);

		}
	);

	add_action(
		'admin_menu',
		function() {
			add_menu_page(
				'Tema 7 settings',
				'Tema 7 options',
				'manage_options',
				'tema_7_settings',
				'tema_7_page_html',
				'dashicons-admin-settings',
				1
			);
		}
	);

	/**
	 * The function to be called to output the content for this page (used in add_menu_page above)
	 */
	function tema_7_page_html() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		// check if the user have submitted the settings
		// WordPress will add the "settings-updated" $_GET parameter to the url.
		if ( isset( $_GET['settings-updated'] ) ) {
			// add settings saved message with the class of "updated".
			add_settings_error( 'wpr_messages', 'wpr_message', __( 'Settings Saved', 'wpr' ), 'updated' );
		}

		// show error/update messages.
		settings_errors( 'wpr_messages' );
		?>
		<div class="wrap">
			<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
			<form action="options.php" method="post">
				<?php
				// output security fields for the registered setting "wpr".
				settings_fields( 'wpr_academy' );
				// output setting sections and their fields
				// (sections are registered for "wpr", each field is registered to a specific section).
				do_settings_sections( 'wpr_academy' );
				// output save settings button.
				submit_button( 'Save Settings' );
				?>
			</form>
		</div>


		<?php

	}
	flush_rewrite_rules( false );
	?>
