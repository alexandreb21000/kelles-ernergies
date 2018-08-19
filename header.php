<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kelles_Energies
 */

?>
<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i|Playfair+Display:400,400i,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kelles-energies' ); ?></a>

	<header id="masthead" class="site-header d-flex ai-center jc-between w-1200 marg-center marg-sect">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$kelles_energies_description = get_bloginfo( 'description', 'display' );
			if ( $kelles_energies_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $kelles_energies_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation fs15">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'kelles-energies' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<div class="w-1200 m-auto d-flex jc-end m-icon line-header mb-social">
		<a href="https://www.facebook.com/KellesEnergies"><img class="social_media m-icon " src="<?php echo THEME_IMG_PATH; ?>/facebook_logo.jpg" alt="test"></a>
		<a href=""><img class="social_media m-icon " src="<?php echo THEME_IMG_PATH; ?>/insta_logo.jpg" alt="test"></a>
	</div>