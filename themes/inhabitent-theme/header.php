<?php
/**
 * The header for our theme.
 *
 * @package Inhabitent_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="nav-container">

					<div class="site-branding">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> 	
							<div class="nav-logo">
							<!-- using backgrounf image for logo-->
							</div>
						</a>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						
						<!-- search button -->
						<div class="nav-search">
							<button class="search-button"><i class="fas fa-search"></i></button>
							<?php get_search_form(); ?>
						</div>

					</nav><!-- #site-navigation -->

					

				</div> <!-- nav-container -->

			</header><!-- #masthead -->

			<div id="content" class="site-content">
