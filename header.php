<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Testing_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'testing-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
			<div class="header-wrapper">
				<div class="site-branding">

					<a class="logo" href="<?php echo home_url(); ?>"><img src="http://placeholder.pics/svg/300x200/000000/ff0000/logo.svg"></a>

				</div><!-- .site-branding -->

				<div class="toggle-container">
					<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><img class="mobile-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAsklEQVRoQ+2WMQ7EIAwE4/8/mijl6YopnFXAmrQOK5hBxnUd/tXh+788wNcGNaCBJgGvUBNge/k8A2ut1cYSDKiqH+h/BjxAkP4TPd9AGODr8fO60OuIwoEaCAPGeA0govAP8ww4SqSvjMNcmDDF4zBHAbvV53Wh3QjTfjRAhNJ1DaQJU/48A85C5LxZx5dYA03CtBwNUMBu9XldaDfCtB8NEKF0XQNpwpSvASKUrh9v4AbQsjAxOjNvzAAAAABJRU5ErkJggg==" width="48" height="48"></button>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">

					<?php wp_nav_menu( array( 'theme_location' => 'desktop-nav', 'menu_id' => 'primary-menu' ) ); ?>

					<div class="mobile-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_id' => 'mobile-menu' ) ); ?>
					</div>

				</nav><!-- #site-navigation -->
			</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">