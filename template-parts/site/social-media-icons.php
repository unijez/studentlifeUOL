<?php
/**
 * Displays a list of social media icons
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<?php if ( have_rows( 'social_media_repeater', 'option' ) ) : ?>

	<ul class="social">

		<?php while ( have_rows( 'social_media_repeater', 'option' ) ) : the_row(); ?>

		<?php
			//Vars
			$socialchannel = get_sub_field( 'social_media_type' );
			$socialurl = get_sub_field( 'social_media_link' );
			$select_value = get_sub_field( 'social_media_type' );
		?>

		<li class="social__item">

		<?php if (strpos($select_value, 'envelope') !== false) : ?>

			<a href="mailto:<?php echo($socialurl) ?>"  target="_blank test">

		<?php else :  ?>

			<a href="<?php echo($socialurl) ?>" target="_blank" aria-label="">

		<?php endif; ?>

				<span class="icon_wrap">

						<?php if (stripos($select_value, "facebook") !== false) : ?>
							<span class="accessibility-text">Link to the Uni Facebook page</span>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-f"></i>

						<?php elseif (strpos($select_value, 'linkedin') !== false) :  ?>
							<span class="accessibility-text">Link to the Uni LinkedIn page</span>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-in"></i>

						<?php elseif (strpos($select_value, 'pinterest') !== false) :  ?>
							<span class="accessibility-text">Link to the Uni Pinterest page</span>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-p"></i>

						<?php elseif (strpos($select_value, 'vimeo') !== false) :  ?>
							<span class="accessibility-text">Link to the Uni Vimeo page</span>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-v"></i>

						<?php elseif (strpos($select_value, 'rss') !== false) :  ?>
							<span class="accessibility-text">Link to the Uni RSS Feed</span>
							<i class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>

						<?php elseif (strpos($select_value, 'google-plus') !== false) :  ?>
							<span class="accessibility-text">Link to the Uni Google Plus page</span>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-g"></i>

						<?php elseif (strpos($select_value, 'envelope') !== false) :  ?>
							<span class="accessibility-text">Link tothe Uni Envelope page</span>
							<i class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>

						<?php else :  ?>
							<i class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>"></i>

						<?php endif; ?>


				</span> <!--icon_wrap-->

			</a>
		</li>

		<?php endwhile; ?>

	</ul>

	<?php else : ?>

		<?php // no rows found ?>


<?php endif; ?>
