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


<?php studentlifeUOL_content_bottom(); ?>

</div><!-- .sitebody-content -->

<?php studentlifeUOL_content_after(); ?>


<footer class="site-footer">

  <div class="footer-middle">

    <?php get_template_part( 'template-parts/footer-widgets' ); ?>

  </div>  <!-- footer-middle -->


  <div class="footer-bottom">

    <div class="logo_container">
      <a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
      </a>
      <p class="credit">Designed by <b>Thomas Moore</b> (2nd year Interactive Design). Developed by <b>Brennan Pena</b> (1st year Computer Science).</p>
    </div>

    <p class="coppyright">	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
