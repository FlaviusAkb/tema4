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
?>
<div class="akb-container-fluid">
	<?php
	while ( have_posts() ) {
		?>
	<div class="engineers-card-simple">
		<?php the_post(); ?>
		<div class="engineers-card-simple-title"><h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2></div>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' ); ?> 
		<div class="engineers-card-simple-img"><img src=" <?php echo esc_url( $url ); ?>" class="single-engineers-img"/></div>
		</div>
<?php } ?>
</div>
<?php


get_footer();
?>
