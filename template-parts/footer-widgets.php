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


<?php if ( is_active_sidebar( 'footer-left' ) || is_active_sidebar( 'footer-middle') ) : ?>
	
	<div class="footer-middle site-module xl-b xl-t">
	
	
	  	<div class="module-inner-wrap">
	  	
		  	<div class="columns-wrap flex-controlled">
		  			
		  		
		  			<?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
		  			
		  				<div class="column-spacings column column--1-of-4  column--small-1-of-2">
		  				
		  					<div class="widgets">
		  			
		  						<?php dynamic_sidebar( 'footer-left' ); ?>
		  											
		  					</div>
		  					
		  				</div>
		  				
		  			<?php endif; ?><!-- .footer-left -->
		  				
		  			<?php if ( is_active_sidebar( 'footer-middle' ) ) : ?>
		  			
		  				<div class="column-spacings column column--1-of-4  column--small-1-of-2">
		  				
		  					<div class="widgets">
		  			
		  						<?php dynamic_sidebar( 'footer-middle' ); ?>
		  											
		  					</div><!-- .widgets -->
		  					
		  				</div>
		  				
		  			<?php endif; ?><!-- .footer-middle -->
		  								
		  		
		  			
		  			<?php if ( have_rows( 'social_media_repeater', 'option' ) ) : ?>
		  					
		  					<div class="column-spacings column column--1-of-4  column--small-1-of-2">
		  						
		  						<div class="widgets">
		  							
		  							<h3 class="widget-title"> Follow us</h3>
		  							
		  							<!--Display Social Media List-->
		  							<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>
		  						
		  						</div><!-- .widgets -->
		  						
		  					</div>	 <!-- .footer-right -->
		  					
		  				<?php endif; ?>
		  			
		  			
		  	</div><!-- .footer -->
		
	  	</div> <!--module-inner-wrap-->
	
	
	</div> <!--footer-top-->
	
<?php endif; ?>





