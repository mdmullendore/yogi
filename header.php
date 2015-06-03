<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package yogi
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site" style="background-color:#f1f1f1;">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yogi' ); ?></a>

	<header id="nav-bar">
		<div class="container">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/yogi-logo@2x.png" /></a>
			</div>

			<nav id="site-navigation" role="navigation">
				<i class="icon icon-th-menu" data-toggle="nav"></i>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
