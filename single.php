<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */
 if(has_post_format('video')) {
//   download_thumbnail();
 }
 get_header();
 ?>

    <?php get_template_part( 'template-parts/featured-image' ); ?>

 		<main id="main" class="site-main">
 			<?php if ( have_posts() ) : ?>


 				<?php while ( have_posts() ) : the_post(); ?>


          <div class="site-module">
		  		
		  		
		  		
		  			
		  			<div class="module-inner-wrap site-module">
		  			
		  						
		  					<div class="columns-wrap flex-controlled">	
		  						
		  						
		  						<div class="column-spacings column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">
		  						 
		  						
		  						
		  						<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		  						
		  						
		  						<?php
		  						if(get_the_tag_list()) {
		  						    echo get_the_tag_list('<dl class="tags" ><dt>Tagged:</dt><dd>',', </dd><dd>','</dd></dl>');
		  						}
		  						?>
		  						
		  					
		  						
		  						
		  						                <?php
		  						                //Is there a next or previous post?
		  						                $prev_link = get_previous_post_link();
		  						                $next_link = get_next_post_link();
		  						
		  						                //Get the next or previous link url
		  						                $previous = get_previous_post();
		  						                $next = get_next_post();
		  						
		  						                ?>
		  						
		  						                <?php if ($prev_link || $next_link): ?>
		  						
		  							                 <ul class="single-pagination">
		  						
		  								                     <li class="single-pagination__link">
		  						
		  									                      <?php if ($prev_link) : ?>
		  						
		  												                   <a class="main-btn block-button dark" href="<?php echo $previous->guid ?>"><i class="far fa-angle-left"></i>  Previous Post</a>
		  						
		  									                      <?php endif; ?>
		  						
		  								                     </li>
		  						
		  								                     <li class="single-pagination__link">
		  						
		  								                         <?php if ($next_link) : ?>
		  						
		  											                     <a class="main-btn block-button dark" href="<?php echo $next->guid ?>">Next Post <i class="far fa-angle-right"></i></a>
		  						
		  								                         <?php endif; ?>
		  								                    </li>
		  						
		  						 	                 </ul><!-- single-pagination -->
		  						
		  						
		  						                 <?php endif; ?>
		  						
		  							
		  							<?php get_template_part( 'template-parts/meet-author' ); ?>
		  							
		  							
		  						
		  										         <?php if ( comments_open() || get_comments_number() ) : ?>
		  						
		  						
		  										           <div class="comments-container">
		  						
		  											              <?php  comments_template(); ?>
		  						
		  										           </div> <!-- comments-container -->
		  						
		  										         <?php endif; ?>
		  						
		  						
		  						 				
		  						
		  						
		  						
		  						
		  						
		  						
		  						</div> <!--column-->
		  						
		  						
		  						<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">
		  						
		  						<?php get_template_part( 'template-parts/sidebar-standard');?>
		  						
		  						</div> <!--column-->
		  					
		  					</div> <!--columns-wrap--> 
		  			
		  			
		  			</div> <!--module-inner-wrap-->
		  	
		  		
					<?php endwhile; ?>


			<?php endif;  wp_reset_query(); ?>
			
		  </div> <!--content-container-->
			

 		</main><!-- #main -->


 	<?php get_footer(); ?>
