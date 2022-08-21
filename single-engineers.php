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
	<div class="akb-container-fluid">
		<div class="akb-container-fluid single-engineer-card">
			<div class="sec-left-side">
				<div class="sec-img-container">
						<?php
							$url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'full' );
						?>
						<img src="<?php echo esc_url( $url ); ?>" class="sec-img"/>
				</div>
			</div>
			<div class="sec-right-side">
				<div class="sec-page-title-container">
					<h2 class="sec-page-title">About us</h2>
				</div>
				<div class="sec-title-container">
					<h1 class="sec-title">Contact the engineer for details!</h1>
				</div>
				<div class="sec-content-container">
					<p><?php the_content(); ?></p>
				</div>
				<div class="sec-software-list-container">
				<?php
					$software = get_field( 'software' );
				if ( $software ) :
						echo '<ul class = "software-list">';
					foreach ( $software as $item ) :
							$permalink_item = get_permalink( $item->ID );
							$title_item     = get_the_title( $item->ID );
							$custom_field   = get_field( 'field_name', $item->ID );
						?>
							<li class = "software-list-item">
							<a href="<?php echo esc_url( $permalink_item ); ?>"> <?php echo esc_html( $title_item ); ?></a>
							</li>
						<?php endforeach; ?>
						</ul>
					<?php	endif; ?>
				</div>			
				<div class="sec-footer-container">
					<div class="sec-footer-left-container">
						<div class="sec-footer-img-container">
							<?php
								$icon_url = get_field( 'icon' );
							?>
							<img src="<?php echo esc_url( $icon_url ); ?>" class="sec-footer-img"/>
						</div>
						<div class="sec-engineer-name-container">
							<h2 class="sec-engineer-name">
								<a href=" <?php get_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<div class ="sec-engineer-age-container">
							<?php
							$date     = get_field( 'date_of_birth' );
							$birthday = new DateTime( $date );
							$interval = $birthday->diff( new DateTime() );
							$interval->y;
							?>
							<p class="sec-engineer-age"> <?php echo esc_html( $interval->format( '%Y years' ) ); ?></p>
						</div>
						</div>
					</div>
					<div class="sec-footer-right-container">
						<div class="sec-signature-container">
							<?php
								$signature_url = get_field( 'signature' );
							?>
							<img src="<?php echo esc_url( $signature_url ); ?>" class="attachment-full size-full" alt="" loading="lazy" width="137" height="47">
						</div>
					</div>	
				</div>
				<div class="akb-container-fluid">
					<button class="main-button"><span class="dashicons dashicons-superhero"></span>Contact engineer</button>
				</div>
			</div>
		</div>
	</div>
	<?php
}

get_footer();
?>
