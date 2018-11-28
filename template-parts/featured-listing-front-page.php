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

<div <?php post_class('columns-wrap flex-controlled featured-boxes featured-post'); ?>>


	<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">
		<div class="item-text">
	    <span class="post-category"><?php
	    list_categories(null, 2);
	    ?></span>
			<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<p><?php custom_excerpt(300); ?></p>
	    <p class="post-auth">
				<?php get_authors(); ?>
			</p>
		</div>

	</div> <!--column-->

	<div class="column-spacings column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">

		  <div class="post-img">
		    <a href="<?php the_permalink(); ?>">
		      <?php default_image('post-intro-image-video', 895, 500); ?>
		    </a>
		  </div>

	</div> <!--column-->

</div> <!--columns-wrap-->
