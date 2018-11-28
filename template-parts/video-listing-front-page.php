<?php
/**
 * Displays post listing grouping
 * @package WordPress
 * @subpackage unilinc
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<div class="latest-video-post" <?php post_class(); ?>>

	<div class="item-text">
		<div class="post-img">
			<a href="<?php the_permalink(); ?>">
				<?php default_image('post-intro-image-video', 895, 500); ?>
				<?php if((get_post_format(get_the_ID()) == "video")): ?><span class="stick-bottom"><div class="play-icon"></div>  <?php //echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
			</a>
		</div>
		<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<p><?php custom_excerpt(20); ?></p>
	</div>
</div>
