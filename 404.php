<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Pure Aesthetics
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
			<div class="site-wrap">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page doesn&rsquo;t seem to exist.', 'pureaesthetics' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pureaesthetics' ); ?></p>

						<?php get_search_form(); ?>


						<?php if ( pureaesthetics_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories">
							<h2 class="widget-title"><?php _e( 'Most Used Categories', 'pureaesthetics' ); ?></h2>
							<ul>
							<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
							?>
							</ul>
						</div><!-- .widget -->
						<?php endif; ?>

				</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
