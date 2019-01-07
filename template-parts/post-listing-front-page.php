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
		<a class="article-link" href="<?php the_permalink();?>">
		
			<div class="post-img thumbnail-aligner">
		   
		    	<?php default_image('post-intro-image', 720, 400); ?>
					<?php if((get_post_format(get_the_ID()) == "video")): ?><span class="stick-bottom"><div class="play-icon"></div>  <?php //echo video_length(get_field('yt_video_id')); ?></span> <?php endif; ?>
		    
			</div>
			
			<h3 class="post-title"><?php the_title();?></h3>
		
		</a>
			<p><?php custom_excerpt(20);?></p>
		<p class="post-auth">
				<?php get_authors(); ?>
		</p>
	</div> <!-- item-text -->
</div> <!-- post -->
