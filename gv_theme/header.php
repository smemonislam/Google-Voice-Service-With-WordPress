<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GV_Theme
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
<?php wp_body_open(); ?>
<div id="page" class="site gv-wrapper">
	<!-- Header Area Start -->
	<header class="header">
		<nav class="navbar navbar-expand-md navbar-dark bg-navbar">
			<div class="container">
				<?php the_custom_logo(); ?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
						wp_nav_menu(
							array(
								'theme_location' 	=> 'menu-1',
								'container'			=> false,
								'menu_id'        	=> 'primary-menu',
								'fallback_cb'		=> '__return_false',
								'items_wrap' 		=> '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
								'depth' 			=> 2,
								'walker' 			=> new bootstrap_5_wp_nav_menu_walker()
							)
						);
					?>
				</div>
			</div>
		</nav>
    </header> 
	<!-- Header Area End -->

	
