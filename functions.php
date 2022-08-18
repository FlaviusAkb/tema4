<?php

function akb_add_style() {
    wp_enqueue_style('akb-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'akb_add_style');


add_action( 'astra_html_before','add_contact_navbar' );
function add_contact_navbar () { ?> 
<div id="wpr-top-header">
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