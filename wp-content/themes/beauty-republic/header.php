<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Beauty_Republic
 */

?>
<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<header id="masthead" class="site-header header">
					<?php the_custom_logo();?>
					<nav id="site-navigation" class="main-navigation"><?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'container' => 'none',));?></nav>
					<div class="th-wrapper d-flex align-items-center">
						<a href="tel: 617-913-8083">617-913-8083</a>
						<a href="#"><i class="fal fa-shopping-cart"></i></a>
						<a href="#"><i class="fal fa-user"></i></a>
						<a href="#"><span class="btn">BOOK NOW</span></a>
					</div>			
	</header>
	<div id="content" class="site-content">
