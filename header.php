<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevriX_Starter
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dxstarter' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="columns small-12">
				<div class="site-header-inner">
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

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<i class="fa fa-reorder"></i>
						</button>
						<div class="menu-primary-container">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div><!-- .menu-primary-container -->
					</nav><!-- #site-navigation -->

					<nav class="site-button-navigation">
						<span class="mobile mobile-menu-button"><i class="fa fa-bars"></i></span>
					</nav><!-- .site-button-navigation -->
				</div><!-- .site-header-inner -->
			</div><!-- /columns -->
		</div><!-- /row -->
	</header><!-- #site-header -->

	<?php
		// This is the advanced mobile menu.
		// ==================================================================
		// Since there will be over 60% of mobile users we can serve a bit
		// different content if needed, so we are moving it as a separate
		// component. ?>

	<nav class="mobile-menu">

		<div class="mobile-menu-top-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'mobile-top-nav', 'menu_id' => 'mobile-top-nav', 'depth' => 1 ) ); ?>
		</div><!-- .mobile-menu-top-nav -->

		<div class="mobile-menu-search">
			<?php get_search_form(); ?>
		</div><!-- .mobile-menu-top-nav -->

		<div class="mobile-menu-categories">
			<?php wp_list_categories(array(
			   'title_li' => ''
			)); ?>
		</div><!-- .mobile-menu-categories -->

		<div class="mobile-menu-social">
			<a href="#facebook" class="button facebook"><i class="fa fa-facebook"></i>Facebook</a>
			<a href="#twitter" class="button twitter"><i class="fa fa-twitter"></i>Twitter</a>
			<a href="#googleplus" class="button google-plus"><i class="fa fa-google-plus"></i>Google Plus</a>
			<a href="#rss" class="button rss"><i class="fa fa-rss"></i>RSS feed</a>
		</div><!-- .mobile-menu-social -->
	</nav><!-- .mobile-menu -->

	<div id="content" class="site-content">
