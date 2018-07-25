<?php
/**
 * The main Front page File
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
	<?php get_template_part( 'template-parts/slider' ); ?>
	<main id="main" class="site-main">

				<div class="content-container">

					<h1 class="content-heading">Latest</h1>
					<div class="news-wrapper">

						<!--More Details https://codex.wordpress.org/Class_Reference/WP_Query-->

	 					<?php
		 					$args = array(
		 						'post_type' => 'post',
		 						'posts_per_page' => 6,
		 						'post__not_in' => get_option( 'sticky_posts' ),
								'tax_query' => array(
								        array(
							            'taxonomy' => 'post_format',
							            'field' => 'slug',
							            'terms' => array( 'post-format-video' ),
							            'operator' => 'NOT IN'
								        )
						    	),
							);
		 					$home_featured_posts = new WP_Query( $args );

		 					if ( $home_featured_posts->have_posts() ) :
								$i = 1;
	 					?>
	 							<?php while ( $home_featured_posts->have_posts() ) : $home_featured_posts->the_post() ?>
								<?php if($i == 1): ?>
									<div class="row">
								<?php endif; ?>
											<?php get_template_part( 'template-parts/post-listing-front-page' ); ?>
								<?php if($i == 3): ?>
									</div>
								<?php
											$i = 0;
											endif;
											$i++;
								 ?>
	 							<?php endwhile ?>
	 					<?php endif;  wp_reset_query(); ?>

						<div class="more-button"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">More posts</a></div>

					</div><!-- news-wrapper -->

					<h1 class="content-heading">Videos</h1>
					<div class="video-wrapper"><!-- video-wrapper -->

						<div class="row">

							<?php
			 					$args = array(
			 						'post_type' => 'post',
			 						'posts_per_page' => 2,
			 						'post__not_in' => get_option( 'sticky_posts' ),
									'tax_query' => array(
						        array(
					            'taxonomy' => 'post_format',
					            'field' => 'slug',
					            'terms' => array( 'post-format', 'post-format-gallery', 'post-format-image' ),
					            'operator' => 'NOT IN'
						        )
							    ),
			 					);

			 					$home_featured_videos = new WP_Query( $args );

			 					if ( $home_featured_videos->have_posts() ) {
		 							while ( $home_featured_videos->have_posts() ) : $home_featured_videos->the_post() ?>
									<?php	get_template_part( 'template-parts/video-listing-front-page' ); ?>
						 			<?php endwhile;
				 				}
								wp_reset_query(); ?>

						</div>
						<div class="more-button"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">More videos</a></div>

					</div><!-- video-wrapper -->

					<h1 class="content-heading">Featured Posts</h1>
					<div class="featured-wrapper"><!-- video-wrapper -->

							<?php
			 					$args = array(
			 						'post_type' => 'post',
			 						'posts_per_page' => 3,
			 						'post__not_in' => get_option( 'sticky_posts' ),
									'meta_key' => 'feature_post',
									'meta_value' => true,
			 					);

			 					$home_featured_select = new WP_Query( $args );

			 					if ( $home_featured_select->have_posts() ) {
		 							while ( $home_featured_select->have_posts() ) : $home_featured_select->the_post() ?>
									<div class="large-row">
										<?php	get_template_part( 'template-parts/featured-listing-front-page' ); ?>
									</div>
						 			<?php endwhile;
				 				}
								wp_reset_query(); ?>

					</div><!-- selected-post-wrapper -->

				</div><!-- font-page_container -->



	</main><!-- #main -->


<?php get_footer(); ?>
