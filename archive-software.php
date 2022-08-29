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
	echo do_shortcode( '[shortcode_search]' );
	echo '<div id="software-archive">';
	while ( have_posts() ) {
		?>
	<div class="software-card-simple">
		<?php the_post(); ?>
		<div class="software-card-simple-title-container">
			<h2 class="scs-title">
				<a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
			</h2>
		</div>
	</div>
<?php } ?>
	</div>
</div>
<?php


get_footer();
?>
