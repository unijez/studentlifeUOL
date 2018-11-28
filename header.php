<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php studentlifeUOL_body_top(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'studentlifeUOL' ); ?></a>

	<div class="header-search site-module hide">

		<div class="module-inner-wrap">

		</div> <!--module-inner-wrap-->

	</div> <!--header-search-->


	<header id="masthead" class="site-header site-module">

		<?php studentlifeUOL_header_top(); ?>

		<div class="module-inner-wrap">

		<div class="level-elements header-level-elements">

		<div class="site-branding flex-controlled">

			<a class="site-branding__hero-logo"  href="<?php echo esc_url('lincoln.ac.uk/home' ); ?>" title="University Of Lincoln Logo" target="_blank" rel="noopener noreferrer" aria-label="Link to lincoln.ac.uk homepage">


				<?php get_template_part( 'template-parts/site/uol-logo', 'landscape' ); ?>

			</a>

			<div class="site-branding__hero-wording">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<button type="button" class="main-btn open-button w-hide" aria-label="Button to open the sidebar menu"><i class="fal fa-bars fa-lg"></i><span class="accessibility-text">Button to open the sidebar menu</span></button>

			</div>




		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation level-right flex-controlled">

			<ul class="primary-menu">
			<?php
					$nav_args = array(
						'container' 		=> '',
						'theme_location' => 'primary-menu',
						'items_wrap' 		=> '%3$s'
					);

					wp_nav_menu( $nav_args );

			?>

			</ul>


			<button type="button" class="main-btn open-button m-t-hide" aria-label="Button to open the sidebar menu"><i class="fal fa-bars fa-lg"></i><span class="accessibility-text">Button to open the sidebar menu</span></button>


		</nav><!-- #site-navigation -->




		<?php studentlifeUOL_header_bottom(); ?>


		</div> <!--level-elements-->

		</div> <!--module-inner-wrap-->

	</header><!-- #masthead -->


	<nav class="overlay-navigation overlay-off">
		<div class="navigation-items">
				<button type="button" class="main-btn close-button" aria-label="Button to close the sidebar menu"><i class="fal fa-times fa-lg"></i><span class="accessibility-text">Button to close the sidebar menu</span></button>


				<h3 class="larger-title top-spacer">Student Life</h3>

				<div class="holder-small">
				<ul class="overlay-first-menu">
				<?php
						$nav_args = array(
							'container' 		=> '',
							'theme_location' => 'primary-menu',
							'items_wrap' 		=> '%3$s'
						);

						wp_nav_menu( $nav_args );

				?>

				</ul>
				</div>
<!--
				<ul class="overlay-first-menu">
					<?php

						$nav_args = array(
							'container' 		=> '',
							'theme_location' => 'bm-first-menu',
							'items_wrap' 		=> '%3$s'
						);

						wp_nav_menu( $nav_args );
					?>
				</ul>
-->
				<h3>Topics</h3>
				<div class="holder-large">
				<ul class="overlay-second-menu">
					<?php

						$nav_args = array(
							'container' 		=> '',
							'theme_location' => 'bm-second-menu',
							'items_wrap' 		=> '%3$s'
						);

						wp_nav_menu( $nav_args );
					?>
				</ul>
				</div>

				<h3>Search</h3>
				<div class="ov-nav-search">
					<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" placeholder="<?php _e( 'Type and press enter', 'ServicesUOL' ); ?>" name="s" id="s" aria-label="Webpage search bar"/>
					</form>
				</div>

				<?php if( function_exists('acf_add_local_field_group') )	:?>
						<h3>Social</h3>
						<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

		<?php endif; ?>
		<div>
	</nav>

<?php studentlifeUOL_head_after(); ?>

<?php studentlifeUOL_content_before(); ?>

<div class="sitebody-content">

	<?php studentlifeUOL_content_top(); ?>
