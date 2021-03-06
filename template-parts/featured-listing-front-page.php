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

<div id="post-<?php the_ID(); ?>" <?php post_class('columns-wrap flex-controlled featured-boxes featured-post'); ?>>
	
	
	<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">
		<div class="item-text">
	    <h4 class="post-category"><?php
	    list_categories();
	    ?></h4>
			<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
			<p><?php custom_excerpt(300); ?></p>
	    <p class="post-auth"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' )); ?>"><?php the_author(); ?></a>	</p>
		</div>
		
	</div> <!--column-->	
	
	<div class="column-spacings column column--2-of-3 column--medium-2-of-3 column--small-1-of-1 clear ">
		  
		  <div class="post-img">
		    <a href="<?php the_permalink(); ?>">
		      <?php default_image('post-intro-image-video'); ?>
		    </a>
		  </div>
  
	</div> <!--column-->	
  
</div> <!--columns-wrap-->
