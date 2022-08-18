<?php

function akb_add_files() {
    wp_enqueue_style('akb-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('navbar-js', get_theme_file_uri('/navbar.js'), NULL, '1.0', true );
}
add_action('wp_enqueue_scripts', 'akb_add_files');


add_action( 'astra_main_header_bar_top','add_contact_navbar' );
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

?>