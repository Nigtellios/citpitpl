<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CitPitPL_-_jakubkowalski.dev
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

<body>

	<header id="masthead" class="site-header"> <!-- HEADER -->

		<nav class="navigation"> <!-- NAV -->
			<div class="nav-bar">
				<div class="just-start">
					<div class="logotype">
						<a href="http://citpitpl.test/">
							<img src="http://citpitpl.test/wp-content/uploads/2020/12/citpitpl-samo-logo-kolor-1-min.png">
						</a>
					</div>
				</div>
				<div class="just-end">
					<a class="menu-switcher" onclick="openNav()">
						<div class="menu-label">
							<i class="menu-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/menu-icon.svg"></i>
							<h2 class="pink">MENU</h2>
						</div>
					</a>
				</div>
			</div>
		</nav><!-- /NAV -->

		<div id="overlay" class="nav-overlay"> <!-- FULL WIDTH MENU OVERLAY -->
		 <div class="menu-content">
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</div>
			<div class="menu-close" onclick="closeNav()">
					
			</div>
		</div> <!-- /FULL WIDTH MENU -->

	</header><!-- /HEADER -->
