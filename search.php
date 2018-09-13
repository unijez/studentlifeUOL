<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main site-module">

	<div class="module-inner-wrap">
		
		 			<?php if ( have_posts() ) : ?>
		 			
		 			<h2 class="home-section-title content-heading"><?php
		 			/* translators: %s: search query. */
		 			printf( esc_html__( 'Search Results for: %s', 'studentlifeUOL' ), '<span>' . get_search_query() . '</span>' );
		 			?></h2>
		 			
		 			
										<div class="columns-wrap flex-controlled featured-boxes">	
													<?php while ( have_posts() ) : the_post(); ?>
												
												<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">
												
												
															<?php get_template_part( 'template-parts/post-listing-front-page' ); ?>
															
															
															
												</div> <!--column-->
												
												
													<?php endwhile ?>
													
											</div> <!--columns-wrap	-->		
										
					
		 						
		 							<?php get_template_part( 'template-parts/site/loop', 'nav' ); ?>
		 					
		 					<?php else:  ?>
		 					
		 					<?php get_template_part( 'template-parts/content', 'none' ); ?>
		 					
		
					<?php endif;  wp_reset_query(); ?>
		
		
	</div> <!--module-inner-wrap-->

</main>


	<?php

get_footer();
