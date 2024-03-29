<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package food_truck
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'food_truck' ); ?></a>
	
	<header id="masthead" class="site-header" role="banner">
	
		<div class="wrapper">
			<div class="header-part">
			  <div class="container">
				<div class="menu-part-outer">
					<div class="menu-part">
						<ul>
						  <li class="active"><a href="index.html" title="Home">Home</a></li>
						  <li class="has-child"><a href="menu.html" title="Menu">Menu</a></li>
						  <li><a href="truck-locator.html" title="Truck locator">Truck locator</a></li>
						  
						  <?php if ( has_custom_logo() ){ ?>
							<li class="logo"> <?php the_custom_logo; ?> " </li>
						  <?php } ?>
						  
						  <li class="has-child">
							<a href="event.html" title="events">events<span class="caret"></span></a>
							<ul class="sub-menu">
							  <li><a href="event-detail.html">event detail</a></li>
							</ul>
						  </li>
						  <li class="has-child">
							<a href="news.html" title="News">News <span class="caret"></span></a>
							<ul class="sub-menu">
							  <li><a href="post-detail.html">News Detail</a></li>
							</ul>
						  </li>
						  <li><a href="contact.html" title="contact">contact</a></li>
						</ul>
					  </div> <!-- menu-part -->
				</div>
			</div>
		</div>
	
		<div class="site-branding">
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

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'food_truck' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
