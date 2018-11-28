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

<div <?php post_class('latest-post'); ?>>

	<div class="item-text">
		<span class="slide-category"><?php
		list_categories(null, 2);
		?></span>
		<div class="post-img thumbnail-aligner">
	    <a href="<?php the_permalink();?>">
	    		<?php default_image('post-intro-image', 720, 400); ?>
					<?php if((get_post_format(get_the_ID()) == "video")): ?><span><div class="play-icon"></div>  <?php //echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
	    </a>
		</div>
		<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<p><?php custom_excerpt(20);?></p>
		<p class="post-auth">
				<?php get_authors(); ?>
		</p>
	</div> <!-- item-text -->
</div> <!-- post -->
