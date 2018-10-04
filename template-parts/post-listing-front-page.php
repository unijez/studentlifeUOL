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

<div id="post-<?php the_ID(); ?>" <?php post_class('latest-post'); ?>>

	<div class="item-text">
		<h4 class="slide-category"><?php
		list_categories(null, 2);
		?></h4>
		<div class="post-img thumbnail-aligner">
	    <a href="<?php the_permalink();?>">
	    		<?php default_image('post-intro-image'); ?>
					<?php if(get_post_format(get_the_ID()) == "video"): ?><span class="time-stamp"> &#9656;  <?php echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
	    </a>
		</div>
		<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<p><?php custom_excerpt(20);?></p>
		<p class="post-auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a>	</p>
	</div> <!-- item-text -->
</div> <!-- post -->
