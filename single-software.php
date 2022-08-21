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


while ( have_posts() ) {
	the_post(); ?>

	<div>
	<h2><a a href="<?php get_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php get_the_content(); ?></p>

	<?php
	$license   = get_field( 'license_validity' );
	$price     = get_field( 'price' );
	$engineers = new WP_Query(
		array(
			'post_type'   => 'engineers',
			'post_status' => 'published',
			'meta_query'  => array(
				array(
					'key'     => 'software',
					'value'   => get_the_ID(),
					'compare' => 'LIKE',
				),
			),
		)
	);

	?>

	<ul>
	<li>License: <?php echo esc_attr( $license ); ?></li>
	<li>Price: <?php echo esc_attr( $price ); ?></li>

	<?php
	if ( $engineers->have_posts() ) {
		?>
		<ul>
		<?php
		while ( $engineers->have_posts() ) {
			$engineers->the_post();
			?>
				<li><?php the_title(); ?></li>
			<?php
		}
		?>
		</ul>
		<?php
	}

	wp_reset_postdata();
	?>
	</ul>
</div>
	<?php
}

get_footer();
?>
