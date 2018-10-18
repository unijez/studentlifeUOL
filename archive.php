<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
* @package WordPress
* @subpackage studentlifeUOL
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
 */

 get_header(); ?>

<main id="main" class="site-main site-module">

	<div class="module-inner-wrap">
          <?php
          if(get_the_author_meta('ID')):
            $author_archive = true;
            $author_id = get_the_author_meta( 'ID' );
          	$curauth = get_user_by('ID', $author_id);
          	$avatar = get_avatar( get_the_author_meta('ID', $author_id) );


          	$user_nicename    = $curauth->user_nicename;
          	$display_name     = $curauth->display_name;
          	$user_description = $curauth->user_description;
          ?>
          <div class="author-archive-card">
            <div>
              <h2 class="home-section-title content-heading"><?php echo $user_nicename?></h2>
              <p><?php echo $user_description; ?></p>
            </div>
            <?php $profile_pic = get_field( 'profile_picture', 'user_'. $author_id ); ?>
            <img src="<?php echo $profile_pic['url']?>" alt="profile picture">
          </div>

          <?php
          endif;
          ?>

		 			<?php if ( have_posts() ) : ?>

		 			<h2 class="home-section-title content-heading"><?php if($author_archive) { echo "Posts "; } else { the_archive_title(); } ?></h2>


										<div class="columns-wrap flex-controlled featured-boxes">
													<?php while ( have_posts() ) : the_post(); ?>

												<div class="column-spacings column column--1-of-3 column--medium-1-of-3 column--small-1-of-1 clear ">


															<?php get_template_part( 'template-parts/post-listing-front-page' ); ?>



												</div> <!--column-->


													<?php endwhile ?>

											</div> <!--columns-wrap	-->



		 							<?php get_template_part( 'template-parts/site/loop', 'nav' ); ?>

		 					<?php else:  ?>

		 					<?php get_template_part( 'template-parts/content', 'none' ); ?>


					<?php endif;  wp_reset_query(); ?>


	</div> <!--module-inner-wrap-->

</main>

<?php get_footer(); ?>
