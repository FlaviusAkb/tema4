<?php
get_header();


    while(have_posts()) {
        the_post();

        $html ='<div>';
        $html .='<h2><a href="' . get_permalink() . '"</a> ' . get_the_title() . '</h2>';
        $html .='<p>' . get_the_content() . '</p>';

        $license = get_field('license_validity');
        $price = get_field('price');


        $html .='<ul>';
        $html .='<li>License: ' . $license . '</li>';
        $html .='<li>Price: ' . $price . '</li>';
        $html .='</ul>';
        $html .='</div>';

        echo $html;
       
    }

get_footer();
?>