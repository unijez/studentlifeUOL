<?php
/**
 * Displays Author panel
 * @package WordPress
 * @subpackage unilinc
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<?php
	// $author_id = get_the_author_meta( 'ID' );
	// $curauth = get_user_by('ID', $author_id);
	// $avatar = get_avatar( get_the_author_meta('ID', $author_id) );
  //
  //
	// $user_nicename    = $curauth->user_nicename;
	// $display_name     = $curauth->display_name;
	// $user_description = $curauth->user_description;
 ?>

<?php //if( $user_nicename ): ?>

<?php
$coauthors = get_coauthors();
 ?>
<div class="author-bio">



					<h4 class="meet-author">Meet the author</h4>
					<?php foreach ($coauthors as $key => $author):
					 			if($key > 1) { break; }
								$avatar = get_avatar( get_the_author_meta('ID', $author->ID) );
								$curauth = get_user_by('ID', $author->ID);
								$user_description = $curauth->user_description;
					 ?>
					<div class="author-bio__name">
							<a href="<?php echo get_author_posts_url( $author->ID, $author->display_name ); ?>">
							<?php if( $avatar ): ?>
												<?php echo $avatar; ?>
							<?php endif; ?>
							</a>

					<div class="author-bio__content">
							<a class="" href="<?php echo get_author_posts_url( $author->ID ); ?>"><h4 class="author-title"><?php echo $author->display_name; ?></h4></a>
							<?php if( $user_description ): ?>
							<?php echo $user_description; ?>
							<?php endif; ?>
					</div>



					</div> <!--author-bio__name-->
					<?php endforeach; ?>


			</div> <!--author-bio-->

<?php //endif; ?>
