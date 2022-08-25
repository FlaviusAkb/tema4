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
	the_post();
	$license                 = get_field( 'license_validity' );
	$wpr_id                  = get_the_ID();
	$discount                = get_option( 'wpr_options' );
	$discount_days           = $discount['wpr_discount_period_tema'];
	$discount_days_remaining = '-' . (int) $discount_days . ' days';
	if ( ! get_option( 'wpr_options' ) || 0 === (int) $discount['wpr_software_discount_tema'] || strtotime( $post->post_date ) < strtotime( $discount_days_remaining ) ) {
		$price      = get_field( 'price' );
		$wpr_style  = 'style=display:none;';
		$wpr_style2 = 'style=display:none;';
	} else {
		$discount_percentage = $discount['wpr_software_discount_tema'];
		$price_old           = get_field( 'price' );
		$discount_value      = (int) $price_old * ( (int) $discount_percentage / 100 );
		$price               = (int) $price_old - $discount_value;
		$wpr_style           = 'style=text-decoration:line-through;';
	}

	?>

	<div>
	<h2><a a href="<?php get_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php get_the_content(); ?></p>

	<?php

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
	<ul class="single-software-list">
	<li class="single-software-list-item ssli-license">License (days): <?php echo esc_attr( $license ); ?></li>
	<li class="single-software-list-item ssli-old-price" <?php echo esc_attr( $wpr_style ); ?> >Price (old): <?php echo esc_attr( $price_old ); ?></li>
	<li class="single-software-list-item ssli-new-price" <?php echo esc_attr( $wpr_style2 ); ?>>Discount ($): <?php echo esc_attr( $discount_value ); ?> (<?php echo esc_attr( $discount_percentage ); ?> %)</li>
	<li class="single-software-list-item ssli-new-price">Price ($): <?php echo esc_attr( $price ); ?></li>

	<?php
	if ( $engineers->have_posts() ) {
		?>
		<ul class="ssl-engineers-list">
		<?php
		while ( $engineers->have_posts() ) {
			$engineers->the_post();
			?>
				<li class="ssl-engineers-list-item"><?php the_title(); ?></li>
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
