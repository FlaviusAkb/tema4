<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles () {
    wp_enqueue_style( 'astra-child', get_stylesheet_uri(),
        array( 'astra' ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );   
}

add_action( 'astra_html_before','add_contact_navbar' );
function add_contact_navbar () { ?> 

<style>

ul {
    margin: 0 1em!important;
}

#wpr-top-header {
    background: #0E3C52!important;
    height: 40px;
    position: sticky!important;
    top: 0!important;
}
.wpr-container-top-navbar {
    height: inherit;
    display: flex;
    justify-content: space-between;
}
.wpr-container-top-navbar ul {
    height: inherit;
    list-style-type: none;
    display: flex;
    justify-content: space-between;
    align-items: center;

}
.wpr-menu-item
 {
    margin-right: 1rem!important;
    
}
.wpr-menu-item a
 {

}

.wpr-menu-item a:hover,
.wpr-navbar-left-item a:hover {
    color: #0E3C52!important;
    background-color: #fff!important;
}

.wpr-navbar-left-item a, 
.wpr-menu-item a {
    color: #fff!important;
    font-weight: 600;
}

h2 {
    font-weight: 600;
}
    </style>
    
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