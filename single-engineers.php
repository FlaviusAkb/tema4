<?php
get_header();


while ( have_posts() ) {
    the_post();
    $html  = '<div>';
    $html .= '<h2><a href="' . get_permalink() . '"</a> ' . get_the_title() . '</h2>';
    $url   = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );
    $html .= '<img src="' . $url . '" class="single-engineers-img"/>';
    $html .= '<p>' . get_the_content() . '</p>';

    $date = get_field( 'date_of_birth' );
    $birthday = new DateTime( $date );
    $interval = $birthday->diff( new DateTime() );
    $html .= $interval->y . ' years old';


    $software = get_field( 'software' );
    if ( $software ) :
        $html .= '<ul class = "software-list">';
        foreach ( $software as $item ) :
            $permalink = get_permalink( $item->ID );
            $title = get_the_title( $item->ID );
            $custom_field = get_field( 'field_name', $item->ID );
            $html .= '<li>';
            $html .= '<a href=" class = "software-list"' . esc_url( $permalink ) . ' ">' . esc_html( $title ) . '</a>';
            $html .= '</li>';
        endforeach;
        $html .= '</ul>';
    endif;
    $html .= '</div>';
    echo $html;
}

get_footer();
?>