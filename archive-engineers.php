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


$today = gmdate( 'Y-m-d', strtotime( '-25 year' ) );
// $today     = gmdate( 'YYYYMMDD' );

$engineers = new WP_Query(
	array(
		'post_type'   => 'engineers',
		'post_status' => 'published',
		'meta_query'  => array(
			array(
				'key'     => 'date_of_birth',
				'value'   => $today,
				'compare' => '>=',
			),
		),
	)
);
echo '<div class="akb-container-fluid">';
if ( $engineers->have_posts() ) {
	while ( $engineers->have_posts() ) {
		$engineers->the_post();
		$date     = get_field( 'date_of_birth' );
		$birthday = new DateTime( $date );
		$interval = $birthday->diff( new DateTime() );
		$interval->y;
		?>
		<div class="engineers-card-simple">
			<div class="engineers-card-simple-title"><h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2></div>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?> 
			<div class="engineers-card-simple-img"><img src=" <?php echo esc_url( $url ); ?>" class="single-engineers-img"/></div>
			<p class="sec-engineer-age"> <?php echo esc_html( $interval->format( '%Y years' ) ); ?></p>
		</div>
		<?php
	}
}
echo '</div>';
?>

<?php
get_footer();
?>
