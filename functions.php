<?php

function akb_add_files() {
    wp_enqueue_style('akb-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('navbar-js', get_theme_file_uri('/navbar.js'), NULL, '1.0', true );
}
add_action('wp_enqueue_scripts', 'akb_add_files');



function add_contact_navbar () { ?> 
<div id="wpr-top-header" class="fixed">
		<div class="wpr-container-top-navbar">
			<ul class="wpr-navbar-left">
                <li class="wpr-navbar-left-item">
                    <a href="#"><strong>Child theme:</strong>contact navbar content	<i class="fas fa-chevron-right"></i></a>
                </li>
			</ul>

            <ul class="wpr-menu-top">
                <li class="wpr-menu-item"><a href="#">First item</a></li>
                <li class="wpr-menu-item"><a href="#">Secont item</a></li>
                <li class="wpr-menu-item"><a href="#">Third item</a></li>
            </ul>
		</div> <!-- .container -->
</div>
<?php }
add_action( 'astra_main_header_bar_top','add_contact_navbar' );


function register_engineers_cpt() {
$args = array (
'label' => __('Engineers', ''),
'labels' => array(
    'name' => __('Engineers', ''),
    'singular_name' => __('Engineer', ''),
    'featured_image' => __('Engineer Photo', ''),
    'set_featured_image' => __('Set Engineer Photo', ''),
    'remove_featured_image' => __('Remove Engineer Photo', ''),
    'use_featured_image' => __('Use Engineer Photo', ''),
    'add_new_item' => __('Add a new Engineer', ''),
    'add_new' => __('Add Engineer', ''),
    'edit_item' => __('Edit Engineer', ''),
    'view_items' => __('View Engineers', ''),
    'view_item' => __('View Engineer', '')

),
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_rest' => true,
'has_archive' => true,
'show_in_menu' => true,
'exclude_from_search' => false,
'map_meta_cap' => true,
'hierarchical' => true,
'query_var' => true,
'supports' => array ('title', 'thumbnail', 'editor'),
'menu_position' => 4,
'menu_icon' => 'dashicons-plugins-checked',



);

    register_post_type('engineers', $args);
}
add_action('init', 'register_engineers_cpt');

function register_software_cpt() {
    $args = array (
    'label' => __('Software', ''),
    'labels' => array(
        'name' => __('Software', ''),
        'singular_name' => __('Software', ''),
        'add_new_item' => __('Add a new Software', ''),
        'add_new' => __('Add Software', ''),
        'edit_item' => __('Edit Software', ''),
        'view_items' => __('View Software', ''),
        'view_item' => __('View Software', '')
    
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_rest' => true,
    'has_archive' => false,
    'show_in_menu' => true,
    'exclude_from_search' => false,
    'map_meta_cap' => true,
    'hierarchical' => true,
    'query_var' => true,
    'supports' => array ('title', 'editor'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-album',
    
    
    
    );
    
        register_post_type('software', $args);
    }
    add_action('init', 'register_software_cpt');


    flush_rewrite_rules( false );
?>