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
	<main id="main" class="site-main site-module">

				<div class="module-inner-wrap">

					<h2 class="home-section-title content-heading">Latest</h2>

						
						
						<div class="news-wrapper module-inner-wrap">
										
				
						
	 					<?php
		 					$args = array(
		 						'post_type' => 'post',
		 						'posts_per_page' => 6,
		 						'post__not_in' => get_option( 'sticky_posts' )
								
							);
		 					$home_featured_posts = new WP_Query( $args );

		 					if ( $home_featured_posts->have_posts() ) :
								$i = 1;
	 					?>
	 					
	 					<div class="columns-wrap flex-controlled featured-boxes">	
	 							<?php while ( $home_featured_posts->have_posts() ) : $home_featured_posts->the_post() ?>
								
								<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">
								
								
											<?php get_template_part( 'template-parts/post-listing-front-page' ); ?>
											
											
											
								</div> <!--column-->
								
								
	 							<?php endwhile ?>
	 							
	 					</div> <!--columns-wrap	-->		
	 							
	 					<?php endif;  wp_reset_query(); ?>
						
						
						<?php 
							$post_page = get_post_type_archive_link( 'post' );
						 ?>
						
						
						<?php if( $post_page ): ?>
							
							<div class="more-button__wrap">
								
								<a class="more-button animated" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">More posts</a>
						
							</div> <!--more-button__wrap-->
						
						<?php endif; ?>
						
					</div><!-- news-wrapper -->






					

					

							<?php
			 					$args = array(
			 						'post_type' => 'post',
			 						'posts_per_page' => 2,
			 						'post__not_in' => get_option( 'sticky_posts' ),
									'meta_query' => array( 
										   
										    array(
										      // Key = ACF Field Name (True/False field)
										      'key' => 'home_featured_video_post',
										      'value' => 'yes',
										      'compare' => '==' // not really needed, this is the default
										    )
										  )
			 					);

			 					$home_featured_videos = new WP_Query( $args );

			 					if ( $home_featured_videos->have_posts() ) :?>
			 					
			 					
			 					<h2 class="home-section-title content-heading">Featured Videos</h2>
			 					<div class="video-wrapper  module-inner-wrap"><!-- video-wrapper -->
			 					
			 						
			 					<div class="columns-wrap flex-controlled featured-boxes">		
			 						
		 							<?php while  ( $home_featured_videos->have_posts() ) : $home_featured_videos->the_post() ?>
			 						
			 						<div class="column-spacings column column--1-of-2 column--medium-1-of-2 column--small-1-of-1 clear ">
			 							
									<?php get_template_part( 'template-parts/video-listing-front-page' ); ?>
									
									
						 			</div> <!--column-->
						 					
						 					
						 				<?php endwhile ?>
						 						
						 		</div> <!--columns-wrap	-->		
						 			
			 			
			 
	
							<?php
									    // Get the ID of a given category
									    $category_id = get_cat_ID( 'Videos' );
										
									    // Get the URL of this category
									    $category_video_link = get_category_link( $category_id );

									?>
									
									
									
									<?php if( $category_video_link ): ?>
									
									<div class="more-button__wrap">
								
												<a class="more-button animated" href="<?php echo  $category_video_link; ?>">More videos</a>
										
									</div> <!--more-button__wrap-->
									
										<?php endif; ?>
									
									
									
							</div><!-- video-wrapper -->
							

						 		<?php endif;  wp_reset_query(); ?>

							
							
				

						<?php
			 					$args = array(
			 					
			 						'post_type' => array('post','page'),
			 						'posts_per_page' => 2,
			 						'post__not_in' => get_option( 'sticky_posts' ), 
			 						'meta_query' => array( 
			 						   
			 						    array(
			 						      // Key = ACF Field Name (True/False field)
			 						      'key' => 'home_featured_post',
			 						      'value' => 'yes',
			 						      'compare' => '==' // not really needed, this is the default
			 						    )
			 						  )
			 					);

			 					$home_featured_select = new WP_Query( $args );

			 					if ( $home_featured_select->have_posts() ) :?>
			 			
							 	<h1 class="content-heading">Featured Posts</h1>
							 	<div class="featured-wrapper">
			
						
			 					
		 							<?php while ( $home_featured_select->have_posts() ) : $home_featured_select->the_post() ?>
									<div class="large-row">
										<?php	get_template_part( 'template-parts/featured-listing-front-page' ); ?>
									</div>
									
									
										<?php endwhile ?>
									
									
							 		</div><!-- selected-post-wrapper -->				
									
									
						 	<?php endif;  wp_reset_query(); ?>

				
					
					
					
					

				</div><!-- font-page_container -->



	</main><!-- #main -->


<?php get_footer(); ?>
