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

<div class="featured-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="item-text">
    <h4 class="post-category"><?php
    list_categories();
    ?></h4>
		<h3 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
		<p><?php excerpt(20); ?></p>
    <p><i class="post-auth"><?php the_author(); ?></i></p>
	</div>
  <div class="post-img">
    <a href="<?php the_permalink(); ?>">
      <?php default_image('large'); ?>
    </a>
  </div>
</div>
