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


	<header id="masthead" class="site-header">

		<?php studentlifeUOL_header_top(); ?>


		<div class="site-branding">

			<div class="logo_container">
				<a href="http://www.lincoln.ac.uk/home/" rel="<?php bloginfo( 'name' ); ?>">
					<img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
				</a>
			</div>

			<div class="site-title_container">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<?php /*
			wp_nav_menu( array(
				'theme_location' => 'primary-menu',
				'menu'            => '',
				'container'       => '',
				'container_class' => '',
				'menu_class'      => 'primary-menu'
			) );
		*/?>
			<ul class="primary-menu">
			<?php
					$nav_args = array(
						'container' 		=> '',
						'theme_location' => 'primary-menu',
						'items_wrap' 		=> '%3$s'
					);

					wp_nav_menu( $nav_args );

			?>
				<a id="open-button">&#9776;</a>
			</ul>

		</nav><!-- #site-navigation -->




		<?php studentlifeUOL_header_bottom(); ?>


	</header><!-- #masthead -->
<!--	<ul class="mobile-header-control level-elements">

		<li class="search-toggle-menu-item"><button class="mobile-menu-button main-btn" aria-controls="primary-menu" aria-expanded="false"><i class="fal fa-align-left"></i></button></li>
		<li class="search-toggle-menu"><button href="#" class="search-toggle main-btn" title="<?php _e( 'Show the search field', 'schoolsUOL' ); ?>"><i class="fas fa-search"></i></button></li>

	</ul>
		<nav class="mobile-navigation hide">

		<ul class="primary-menu clear">

			<?php

				if ( has_nav_menu( 'primary-menu' ) ) {

						wp_nav_menu( $nav_args );

				} else {

						wp_list_pages( $list_pages_args );

				}

			?>

		</ul><!-- .main-menu -->

	</nav><!-- .mobile-navigation -->

	<nav class="overlay-navigation overlay-off">
		<a id="close-button second-button">
			<div class="nav-items items-off">
				<a id="close-button">&times;</a>
				<h1>Student Life</h1>
				<ul class="overlay-menu">
					<?php

						if ( has_nav_menu( 'primary-menu' ) ) {

								wp_nav_menu( $nav_args );

						} else {

								wp_list_pages( $list_pages_args );

						}

					?>
				</ul>
				<h1>Search</h1>
				<div class="ov-nav-search">
					<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" placeholder="<?php _e( 'Type and press enter', 'ServicesUOL' ); ?>" name="s" id="s" />
					</form>
				</div>

				<?php if( function_exists('acf_add_local_field_group') )	:?>
				<h1>Social</h1>
						<?php get_template_part( 'template-parts/site/social-media', 'icons' ); ?>

				</div>	 <!--column-->
			</div>
		<?php endif; ?>
		<a>
	</nav>

<?php studentlifeUOL_head_after(); ?>

<?php studentlifeUOL_content_before(); ?>

<div class="sitebody-content">

	<?php studentlifeUOL_content_top(); ?>
