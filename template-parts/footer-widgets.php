<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage studentlifeUOL
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<div class="row">

  <?php if( is_active_sidebar('footer-1') ):?>

    <div class="column">


        <?php dynamic_sidebar('footer-1');?>


    </div>	 <!--column-->

  <?php endif; ?>

  <?php if( function_exists('acf_add_local_field_group') )	:?>

  <div class="column socials">
      <!--Display Social Media List-->
      <h2 class="widget-title">Follow Us</h2><?php endif; ?>
      <?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

  </div>	 <!--column-->

  <div class="column">

    <?php if( function_exists('acf_add_local_field_group') )	:?>

    <div class="widget-container widget_text">
        <h2 class="widget-title">Subscribe</h2>

        <div class="textwidget">
          <div class="footer-subscribe">
  					<form method="get">
  						<input type="search" placeholder="<?php _e( 'Enter your email', 'ServicesUOL' ); ?>" name="s" id="s" />
  					</form>
  				</div>
        </div>

    </div>	 <!--column-->


  </div>	 <!--column-->

  <?php endif; ?>
</div>
