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

			<a href="<?php echo($socialurl) ?>" target="_blank" rel="noopener noreferrer" aria-label="">

		<?php endif; ?>

				<span class="icon_wrap">
						
									<?php if (stripos($select_value, "facebook") !== false) : ?>
									<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-f"></span>
									
									<?php elseif (strpos($select_value, 'linkedin') !== false) :  ?>
									<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-in"></span>
									
									<?php elseif (strpos($select_value, 'pinterest') !== false) :  ?>
									<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-p"></span>
										
									<?php elseif (strpos($select_value, 'vimeo') !== false) :  ?>
										<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-v"></span>
									
									<?php elseif (strpos($select_value, 'rss') !== false) :  ?>
										<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></span>
						
									<?php elseif (strpos($select_value, 'google-plus') !== false) :  ?>
									<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>-g"></span>
				
									<?php elseif (strpos($select_value, 'envelope') !== false) :  ?>
										<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="far fa-<?php the_sub_field( 'social_media_type' ); ?>"></span>
									
									<?php else :  ?>
										<span class="screen-reader-text"> Link to the <?php the_sub_field( 'social_media_type' ); ?> account</span>
										<span title="<?php the_sub_field( 'social_media_type' ); ?>" class="fab fa-<?php the_sub_field( 'social_media_type' ); ?>"></span>
										
									<?php endif; ?>	
									
									
							</span> <!--icon_wrap-->
				

			</a>
		</li>

		<?php endwhile; ?>

	</ul>

	<?php else : ?>

		<?php // no rows found ?>


<?php endif; ?>
