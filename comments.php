<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php comment_form();
		?>
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$studentlifeUOL_comment_count = get_comments_number();
			if ( '1' === $studentlifeUOL_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Comments(%1$s)', 'studentlifeUOL' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( 'Comments(%1$s)', 'Comments(%1$s)', $studentlifeUOL_comment_count, 'comments title', 'studentlifeUOL' ) ),
					number_format_i18n( $studentlifeUOL_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<?php if ( have_comments() ) : ?>
		<?php the_comments_navigation(); ?>
			<ol class="comment-list">
		<?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
			</ol><!-- .comment-list -->
		<?php the_comments_navigation(); ?>
				<?php else : // or, if we don't have comments:
						if ( ! comments_open() ) : ?>
							<p class="nocomments"><?php _e( 'HELLOOOOOOOOOOOO', 'twentyten' ); ?></p>
						<?php endif; // end ! comments_open() ?>
		<?php endif; ?>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'studentlifeUOL' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>

</div><!-- #comments -->