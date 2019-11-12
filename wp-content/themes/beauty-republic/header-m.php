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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header header">
    <div class="logo">
			<?php the_header_image_tag(array(        
        'alt' => 'beauty republic',
        'class' => 'logo__image',
        'sizes' => 'unset',
        'srcset' => 'none',
      )); ?>
    </div>
				<?php
			$beauty_republic_description = get_bloginfo( 'description', 'display' );
			if ( $beauty_republic_description || is_customize_preview() ) :
				?>				
			<?php endif; ?>
		</div>
		<nav id="site-navigation" class="main-navigation nav">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
        'menu_class' => 'nav__list',
        'container' => 'none',
      ) 
    );
   ?>
    </nav>
    <adress class="adress"><a class="adress__link" href="tel: 617-913-8083">617-913-8083</a></adress>
      <div class="cart"><svg class="cart__icon" viewBox="0 0 31 31" preserveAspectRatio="none">
          <use xlink:href="./sprite.svg#cart"></use>
        </svg></div>
      <div class="login"><svg class="login__icon" viewBox="0 0 27 27" preserveAspectRatio="none">
          <use xlink:href="./sprite.svg#login"></use>
        </svg></div><button class="btn">BOOK NOW</button>
	</header>
	<div id="content" class="site-content">
