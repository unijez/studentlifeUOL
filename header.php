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

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'studentlifeUOL' ); ?></a>

	<div class="header-search site-module hide">

		<div class="module-inner-wrap">

		</div> <!--module-inner-wrap-->

	</div> <!--header-search-->


	<header id="masthead" class="site-header site-module">

		<?php studentlifeUOL_header_top(); ?>

		<div class="module-inner-wrap">

		<div class="level-elements header-level-elements">

		<div class="site-branding flex-controlled">

			<a class="site-branding__hero-logo"  href="<?php echo esc_url('lincoln.ac.uk/home' ); ?>" title="University Of Lincoln Logo" target="_blank" rel="noopener noreferrer">


				<?php get_template_part( 'template-parts/site/uol-logo', 'landscape' ); ?>

			</a>

			<div class="site-branding__hero-wording">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				<button type="button" class="main-btn open-button w-hide"><i class="fal fa-bars fa-lg"></i></button>

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


			<button type="button" class="main-btn open-button m-t-hide"><i class="fal fa-bars fa-lg"></i></button>


		</nav><!-- #site-navigation -->




		<?php studentlifeUOL_header_bottom(); ?>


		</div> <!--level-elements-->

		</div> <!--module-inner-wrap-->

	</header><!-- #masthead -->


	<nav class="overlay-navigation overlay-off">



			<div class="nav-items items-off">

				<div class="overlay-navigation-header">

					<button type="button" class="main-btn close-button"><i class="fal fa-times fa-lg"></i></button>

				</div> <!--overlay-navigation-header-->



				<h3 class="larger-title">Student Life</h3>

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
						<input type="search" placeholder="<?php _e( 'Type and press enter', 'ServicesUOL' ); ?>" name="s" id="s" />
					</form>
				</div>

				<?php if( function_exists('acf_add_local_field_group') )	:?>
						<h3>Social</h3>
						<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

				</div>	 <!--column-->
		<?php endif; ?>

	</nav>

<?php studentlifeUOL_head_after(); ?>

<?php studentlifeUOL_content_before(); ?>

<div class="sitebody-content">

	<?php studentlifeUOL_content_top(); ?>
