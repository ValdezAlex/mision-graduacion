<?php
/**
 * The header template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alt_Custom_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!-- Site favicon -->
<!-- 		<link rel="icon" href="<?php echo esc_attr( get_stylesheet_directory_uri() . '/img/favicon.ico' ); ?>" type="image/x-icon"> -->
<?php wp_site_icon(); ?>
<?php wp_head(); ?>
	</head>
	<body <?php alt_custom_theme_print_body_class(); ?>>
		<header class="main-theme-header">
			<div class="inner-container">
				<img class="site-icon-header" src="<?php site_icon_url(); ?>"> 
				<a href="<?php bloginfo( 'url' ); ?>" class="text-header" aria-label="Ir a la sección de inicio del sitio">
					
				</a>

<?php alt_custom_theme_print_menu( 'header' ); ?>
				<button id="hamburger-menu-toggler">
					<div class="bar"><h1></h1></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</button>
				<div id="hamburger-menu-container">
<?php alt_custom_theme_print_menu( 'hamburger' ); ?>
				</div>
			</div>
		</header>
		<main>
