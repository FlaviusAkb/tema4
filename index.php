<?php
/**
 * Php version 7 *
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
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php
}


get_footer();
?>
