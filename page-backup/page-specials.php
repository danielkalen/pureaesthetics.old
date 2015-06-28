<?php
/**
 * The template for displaying the contact page.
 *
 *
 * @package Pure Aesthetics
 */

get_header(); ?>

	<header class="section section-services-intro">
		<div class="vertical-align">
			<h1 class="special">Specials</h1>
			<ul class="anchor-links">
				<li class="first"><p>Have to get skin treatment? Afraid to spend too much? Start saving money on top-quality skin care with these specials.</p></li>
			</ul>
		</div>
	</header>

	<?php 
		$args = array( 'post_type' => 'coupon', 'order' => 'ASC');
		$my_query = new WP_Query( $args ); 

		if ( $my_query->have_posts() ) { 
			while ( $my_query->have_posts() ) { $my_query->the_post();?>
			<article class="coupon coupon-<?php the_id(); ?> <?php if(!has_post_thumbnail()) {echo 'imageless';} ?>">
				<div class="site-wrap">
					<div class="different-site-wrap">
						<div class="vertical-align">
							<div class="align">
								<h6 class="service-title"><?php the_title(); ?></h6>
								<p class="coupon-desc"><?php the_content(); ?></p>
								<?php 
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full', true);
								$thumb_url = $thumb_url_array[0];
								?>

								<div class="button button-large"><p><?php the_excerpt();?></p></div>

							</div>
						</div>
					</div>
				</div>
			</article>

			<?php if (has_post_thumbnail()) { ?>
				<style>
					.coupon-<?php the_id(); ?> .site-wrap:after {
						background: url("<?php echo $thumb_url;?>");
					}
				</style>
			<?php } else { ?>
				<style>
					.coupon-<?php the_id(); ?> .site-wrap:after {
						background: url("//daniels-imac.home:5757/wp-content/uploads/2014/12/gift-bg.jpg");
					}
				</style>
			<?php }
			
// wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			
			wp_reset_postdata();
		}
	}
		// // 	else {
		// // 	_e( 'Sorry, no posts matched your criteria.' );
		// // }
	?>

<?php get_footer(); ?>
