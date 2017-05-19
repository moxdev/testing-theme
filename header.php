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

			    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="data:image/svg+xml;charset=utf-8,%3Csvg xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg' width%3D'300' height%3D'200'%3E%3Crect width%3D'100%25' height%3D'100%25' fill%3D'crimson'%2F%3E%3Ctext x%3D'150' y%3D'105' font-size%3D'20' font%3D'Verdana%2C sans-serif' fill%3D'white' text-anchor%3D'middle'%3E300 x 200%3C%2Ftext%3E%3C%2Fsvg%3E" class="brand"></a>

			    <?php
			    if ( is_front_page() && is_home() ) : ?>
			        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			    <?php else : ?>
			        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			    <?php
			    endif;

			    $description = get_bloginfo( 'description', 'display' );
			    if ( $description || is_customize_preview() ) : ?>
			        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			    <?php
			    endif; ?>

			</div><!-- .site-branding -->

			<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><img class="mobile-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAsklEQVRoQ+2WMQ7EIAwE4/8/mijl6YopnFXAmrQOK5hBxnUd/tXh+788wNcGNaCBJgGvUBNge/k8A2ut1cYSDKiqH+h/BjxAkP4TPd9AGODr8fO60OuIwoEaCAPGeA0govAP8ww4SqSvjMNcmDDF4zBHAbvV53Wh3QjTfjRAhNJ1DaQJU/48A85C5LxZx5dYA03CtBwNUMBu9XldaDfCtB8NEKF0XQNpwpSvASKUrh9v4AbQsjAxOjNvzAAAAABJRU5ErkJggg==" width="48" height="48"></button>

			<nav id="site-navigation" class="main-navigation" role="navigation">

				<?php $drop_menu = get_field('add_dropdown_menu', 'options');

					if( $drop_menu ):  ?>
						<div class="dropdown-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'drop-menu', 'menu_id' => 'drop-menu' ) ); ?>
						</div>
					<?php endif; ?>

				<?php wp_nav_menu( array( 'theme_location' => 'desktop-nav', 'menu_id' => 'primary-menu' ) ); ?>

				<div class="mobile-menu">
				    <?php wp_nav_menu( array( 'theme_location' => 'mobile-nav', 'menu_id' => 'mobile-menu' ) ); ?>
				</div>

			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
