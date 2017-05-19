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
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://placehold.it/150x80" class="brand"></a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><img class="mobile-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAsklEQVRoQ+2WMQ7EIAwE4/8/mijl6YopnFXAmrQOK5hBxnUd/tXh+788wNcGNaCBJgGvUBNge/k8A2ut1cYSDKiqH+h/BjxAkP4TPd9AGODr8fO60OuIwoEaCAPGeA0govAP8ww4SqSvjMNcmDDF4zBHAbvV53Wh3QjTfjRAhNJ1DaQJU/48A85C5LxZx5dYA03CtBwNUMBu9XldaDfCtB8NEKF0XQNpwpSvASKUrh9v4AbQsjAxOjNvzAAAAABJRU5ErkJggg==" width="48" height="48"></button>

				<?php $drop_menu = get_field('add_dropdown_menu', 'options');

					if( $drop_menu ):  ?>
						<div class="dropdown-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'drop-menu', 'menu_id' => 'drop-menu' ) ); ?>
						</div>
					<?php endif; ?>

				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>

			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
