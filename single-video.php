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
  download_thumbnail();
 }
 get_header();

 $youtube_link = get_field( 'youtube_link' );
 ?>



 		<main id="main" class="site-main">
 			<?php if ( have_posts() ) : ?>


 				<?php while ( have_posts() ) : the_post(); ?>


          <div class="site-module site-module-bypass">

		  				<div class="module-inner-wrap single-module video-module">


		  			<?php if( $youtube_link ): ?>
		  				<div class="posts-video_embed">

		  					<?php echo $youtube_link; ?>

		  				</div> <!--posts-video_embed-->

		  			<?php endif; ?>


		  				</div>

		  			<div class="module-inner-wrap site-module site-module-nopad">


		  					<div class="columns-wrap flex-controlled">


		  						<div class="column-spacings column column--1-of-2 column--medium-1-of-2 column--small-1-of-1 clear ">



				  						<div class="entry-content video-post">

                        <h5 class="slide-category">
                          <?php list_categories();?>
                        </h5>
                          <h2 class="slide-title">
                           <?php the_title(); ?>
                        </h2>

                        <h5 class="slide-date">
                          <i class="calendar-icon fal fa-calendar-alt"></i><time class="news-post-date date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('F jS, Y') ?></time>
                        </h5>

                      <div class="video-content-container">
				  						            <?php the_content(); ?>
                      </div>

				  						</div> <!--entry-content-->


		  						</div> <!--column-->


		  						<div class="column-spacings column column--1-of-2 column--medium-1-of-2 column--small-1-of-1 clear ">

                    <div class="social-buttons-container_single-video">
                      <?php share_buttons("facebook"); ?>
                      <?php share_buttons("twitter"); ?>
                    </div>

                    <?php
                      if(get_the_tag_list()) {
                          echo get_the_tag_list('<dl class="tags" ><dt>Tagged:</dt><dd>',', </dd><dd>','</dd></dl>');
                      }
                      ?>

		  									<?php get_template_part( 'template-parts/meet-author' ); ?>


		  						</div> <!--column-->




		  					</div> <!--columns-wrap-->






		  					<div class="columns-wrap flex-controlled fs-sidebar">

                    <h3 class="sticky-box-aligner">Here are your next posts</h3>
		  							<div class="column-spacings column column--1-of-2 column--medium-1-of-2 column--small-1-of-1 clear">


		  							           <?php
		  									  $prevPost = get_previous_post(true);
		  									  if($prevPost):


		  									 ?>
		  									  <div class="side-box previous-box video-box">
		  									    <h4 class="post-category"><?php list_categories($prevPost->ID); ?></h4>
		  									    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'post-intro-image-video');?>

		  										<a href="<?php echo get_permalink( $prevPost->ID ); ?>">
		  										<?php echo($prevthumbnail) ?>
		  										</a>
		  										<h3 class="post-title">
		  									   <a href="<?php echo get_permalink( $prevPost->ID ); ?>">
		  									           <?php echo apply_filters( 'the_title', $prevPost->post_title ); ?>
		  									       </a>
		  										</h3>

		  											<p><i class="post-auth"><?php echo get_the_author_meta('display_name', $prevPost->post_author) ?></i></p>
		  									  </div>
		  									<?php endif; ?>


		  							</div> <!--column-->


		  							<div class="column-spacings column column--1-of-2 column--medium-1-of-2 column--small-1-of-1 clear ">

		  						<?php
		  						  $nextPost = get_next_post(true);
		  						  if($nextPost):


		  						 ?>
		  						  <div class="side-box next-box video-box">
		  						    <h4 class="post-category"><?php list_categories($nextPost->ID); ?></h4>
		  						    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'post-intro-image-video');?>

		  							<a href="<?php echo get_permalink( $nextPost->ID ); ?>">
		  							<?php echo($nextthumbnail) ?>
		  							</a>
		  							<h3 class="post-title">
		  						   <a href="<?php echo get_permalink( $nextPost->ID ); ?>">
		  						           <?php echo apply_filters( 'the_title', $nextPost->post_title ); ?>
		  						       </a>
		  							</h3>

		  								<p><i class="post-auth"><?php get_the_author_meta('display_name', $nextPost->post_author) ?></i></p>
		  						  </div>
		  						<?php endif; ?>
		  							</div> <!--column-->




		  						</div> <!--columns-wrap-->






		  			</div> <!--module-inner-wrap-->


					<?php endwhile; ?>


			<?php endif;  wp_reset_query(); ?>

		  </div> <!--content-container-->


 		</main><!-- #main -->


 	<?php get_footer(); ?>
