<?php
/**
* The template for displaying all pages
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package WordPress
* @subpackage studentlifeUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
*
*
Template Name: Meet The Team Page
*/

get_header(); ?>
<?php get_template_part( 'template-parts/featured-acf' ); ?>
	<main id="main" class="site-main site-module teams-page">

		<div class="module-inner-wrap">

			<?php if ( have_posts() ) : ?>

				<div class="columns-wrap flex-controlled featured-boxes">

					<?php while ( have_posts() ) : the_post(); ?>



					<?php
					// Output the authors list.
					$contributor_ids = get_users( array(
					'fields'  => 'ID',
					'orderby' => 'post_count',
					'order'   => 'DESC',
					'who'     => 'authors',
					));



					foreach ( $contributor_ids as $contributor_id ) :
						$post_count = count_user_posts( $contributor_id );
						// Move on if user has not published a post (yet).
						if ( ! $post_count ) {
							continue;
						}
					?>

						<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">

							<div class="author-bio-card">



									<span class="author-prof-pic"><?php echo get_avatar( $contributor_id ); ?></span>


									<div>
										<h3 class="author-page-title"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></h3>
										<p class="author-page-bio"><?php echo custom_biography(get_the_author_meta( 'description', $contributor_id ), 30); ?></p>
										<a class="button contributor-posts-link" href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>">
											<?php printf( _n( '%d Article', '%d Articles', $post_count, 'dyad' ), $post_count ); ?>
										</a>
									</div>



							</div> <!--author-bio__name-->




						</div> <!--column-->


					<?php
					endforeach;
					?>



				<?php endwhile; ?>

			</div> <!--columns-wrap	-->

		<?php endif;  wp_reset_query(); ?>






</div> <!--module-inner-wrap-->



</main><!-- #main -->

<?php get_footer();  ?>
