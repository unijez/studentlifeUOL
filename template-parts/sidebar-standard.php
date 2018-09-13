<?php
/**
 * Template part for displaying the side bar on standard format pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<div class="fs-sidebar">
<h3>Here are your next posts</h3>

		<?php
		  $prevPost = get_previous_post(true);
		  if($prevPost):

		  
		 ?>
		  <div class="side-box previous-box">
		    <h4 class="post-category"><?php list_categories($prevPost->ID); ?></h4>
		    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'medium');?>
			
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
		
		<?php
		  $nextPost = get_next_post(true);
		  if($nextPost):
		  
		  
		 ?>
		  <div class="side-box next-box">
		    <h4 class="post-category"><?php list_categories($nextPost->ID); ?></h4>
		    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'medium');?>
			
			<a href="<?php echo get_permalink( $prevPost->ID ); ?>">
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

</div> <!--fs-sidebar-->
