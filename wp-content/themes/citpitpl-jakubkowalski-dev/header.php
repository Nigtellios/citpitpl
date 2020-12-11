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
					<a class="menu-switcher" href="javascript:void(0)" onclick="openNav()">
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
			
		 	<h2>MENU</h2>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
			?>

				<div class="call-us">
					<a href="tel:+48506603482">
						<i><img src="http://citpitpl.test/wp-content/uploads/2020/12/cursor-icon.svg" width="38" height="35"></i>
						<div>
							<p><strong>ZADZWOŃ DO NAS!</strong></p>
							<p>Tel: +48 506 603 482</p>
						</div>
					</a>
				</div>

				<div class="menu-close" href="javascript:void(0)" onclick="closeNav()">
					<i><img src="http://citpitpl.test/wp-content/uploads/2020/12/close-icon-white.svg" width="35" height="35"></i>
				</div>
				
			</div>
		</div> <!-- /FULL WIDTH MENU -->

	</header><!-- /HEADER -->
