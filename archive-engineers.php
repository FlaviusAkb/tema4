<?php
get_header();

$html ='<div class="engineers-container">';
    while(have_posts()) {

        $html .='<div class="engineers-card">';
        the_post();
        
        $html .='<div class="card-title"><h2><a href="' . get_permalink() . '"</a> ' . get_the_title() . '</h2></div>';
        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); 
        $html .='<div class="card-img"><img src="' . $url .'" class="single-engineers-img"/></div>';
        $html .='</div>';


    
    
}
$html .='</div">';
echo $html;


get_footer();
?>