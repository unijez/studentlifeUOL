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

<div class="fs-sidebar sticky-box">
<h3>Here are your next posts</h3>

		<?php
		  $prevPost = get_previous_post();
		  if($prevPost):
	 

		 ?>
		  <div class="side-box previous-box">

		    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'post-sidebar');?>
			<div class="thumbnail-aligner">
			<a href="<?php echo get_permalink( $prevPost->ID ); ?>">
			<?php
			$prevthumbnail = str_replace('alt=""', 'alt="Previous post featured image"', $prevthumbnail);
			echo($prevthumbnail); ?>
			<?php if((get_post_format($prevPost->ID) == "video")): ?><span><div class="play-icon"></div>  <?php //echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
			</a>
			</div>
			<h3 class="post-title">
		   <a href="<?php echo get_permalink( $prevPost->ID ); ?>">
		           <?php echo apply_filters( 'the_title', $prevPost->post_title ); ?>
		       </a>
			</h3>


		  </div>
		<?php endif; ?>

		<?php
		  $nextPost = get_next_post();
		  if($nextPost):


		 ?>
		  <div class="side-box next-box">

		    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'post-sidebar');?>
			<div class="thumbnail-aligner">
			<a href="<?php echo get_permalink( $nextPost->ID ); ?>">
			<?php $nextthumbnail = str_replace('alt=""', 'alt="Next post featured image"', $nextthumbnail);

			echo($nextthumbnail); ?>
			<?php if((get_post_format($nextPost->ID) == "video")): ?><span><div class="play-icon"></div>  <?php //echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
			</a>
			</div>
			<h3 class="post-title">
		   <a href="<?php echo get_permalink( $nextPost->ID ); ?>">
		           <?php echo apply_filters( 'the_title', $nextPost->post_title ); ?>
		       </a>
			</h3>


		  </div>
		<?php endif; ?>

</div> <!--fs-sidebar-->
