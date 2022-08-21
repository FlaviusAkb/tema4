<?php
/**
 * Php version *
 *
 * @category Template_Class
 * @package Template_Class
 * @author Author <author@domain.com>
 * @license https://opensource.org/licenses/MIT MIT License
 *  @link http://localhost/
 */

get_header();

$args = array(
	'post_type'   => 'software',
	'post_status' => 'publish',
	'tax_query'   => array(
		'relation' => 'and',
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'asia',
		),
		array(
			'taxonomy' => 'regions',
			'field'    => 'slug',
			'terms'    => 'europe',
		),
	),
);
// custom query!
$software = new WP_Query( $args );
?>

<hr>

<hr>


<?php

if ( $software->have_posts() ) {
	while ( $software->have_posts() ) {
		$software->the_post();

		the_title();
		echo '<br>';
	}
}

get_footer();
?>
