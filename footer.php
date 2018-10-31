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


	    <?php get_template_part( 'template-parts/footer-widgets' ); ?>



  <div class="footer-bottom site-module xl-b xl-t">

		<div class="module-inner-wrap flex-controlled footer-alignment">


			  	<div class="footer-meta">

						<p><b>Student Life</b></p>
			  		<p class="credit">Designed by Thomas Moore (2nd year Interactive Design). </p>
						<p class="credit">Developed by Brennan Ceballos Peña (1st year Games Computing).</p>
						<br />
						<b>
			  		<?php university_links(); ?>
						</b>
		  			<p class="copyright">	&#169; <b>University of Lincoln.</b> All rights reserved</p>

			  </div> <!--footer-meta-->


				<a class="site-footer__logo" href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
					<?php get_template_part( 'template-parts/site/uol-logo', 'notext' ); ?>
				</a>


		</div> <!--module-inner-wrap	-->

  </div> <!-- footer-bottom -->



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
