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
<h2>Here are your next posts</h2>

<?php
  $prevPost = get_previous_post(true);
  if($prevPost):
 ?>
  <div class="previous-box">
    <h4 class="post-category"><?php list_categories($prevPost->ID); ?></h4>
    <?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'medium');?>
    <?php previous_post_link('%link',"$prevthumbnail  <h3>%title</h3>", TRUE); ?>
		<p><i class="post-auth"><?php echo get_the_author_meta('display_name', $prevPost->post_author) ?></i></p>
  </div>
<? endif; ?>

<?php
  $nextPost = get_next_post(true);
  if($nextPost):
 ?>
  <div class="previous-box">
    <h4 class="post-category"><?php list_categories($nextPost->ID); ?></h4>
    <?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'medium');?>
    <?php previous_post_link('%link',"$nextthumbnail  <h3>%title</h3>", TRUE); ?>
		<p><i class="post-auth"><?php get_the_author_meta('display_name', $nextPost->post_author) ?></i></p>
  </div>
<? endif; ?>

</div>
