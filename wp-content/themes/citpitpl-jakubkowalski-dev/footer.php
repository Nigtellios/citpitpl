<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CitPitPL_-_jakubkowalski.dev
 */

?>

	<footer class="site-footer"> <!-- FOOTER -->
		<div class="row top-wrap"> <!-- Logo + Footer-Nav -->
			<div class="col-sm-12 col-lg-6 just-start">
				<div class="footer-logotype">
					<img src="http://citpitpl.test/wp-content/uploads/2020/12/citpitpl-samo-logo-kolor-1-min.png" width="64" height="51">
					<h2 class="pink">CITPITPL</h2>
				</div>
			</div>
			<div class="col-sm-12 col-lg-6 just-end">
				<div class="footer-mini-nav">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'footer-menu',
								'menu_class'		 => 'mini-nav',
							)
						);
					?>
				</div>
			</div>
		</div>
		<div class="row copyrights"><!-- Copyrights -->
			<div class="col-sm-12 col-lg-6 just-start">
				<p>Copyright 2020 CITPITPL. Wszelkie prawa zastrzeżone.</p>
			</div>
			<div class="col-sm-12 col-lg-6 just-end">
				<p>Made with <span class="pink bolded">love</span> by <span class="tagged"><a href="https://jakubkowalski.dev/" target="_blank">jakubkowalski.dev</a></span></p>
			</div>
		</div>
	</footer><!-- /FOOTER -->

<?php wp_footer(); ?>

</body>
</html>
