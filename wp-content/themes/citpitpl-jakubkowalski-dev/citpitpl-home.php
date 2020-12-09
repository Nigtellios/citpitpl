<?php
/**
 * Template Name: CITPITPL Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CitPitPL_-_jakubkowalski.dev
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php
			the_content();
		?>

		<section id="hero" class="container-fluid content-mod"> <!-- section 1 - hero -->
			<div class="hero"> <!-- hero -->
				<div class="row hero-content">
					<div class="col-12 hero-content__align">
						<p class="toptag light">NOWY WYMIAR</p>
						<h1 class="light">Finansów i rachunkowości</h1>
						<p class="p-hero light">
							Profesjonalne, transparentne usługi księgowe dla Twojej działaności. </br>
							Współpraca z księgową jeszcze nigdy nie była tak przyjemna i wygodna!
						</p>
						<a class="cta-button" href="http://citpitpl.test/#oferta">
							<p class="p-btns pink">SPRAWDŹ OFERTĘ</p>
						</a>
					</div>
				</div>
			</div> <!-- /hero -->
			<div class="customer-carousel"> <!-- carousel -->
				<h5>Zaufali nam</h5>
				<div class="icons-container">
						<!-- Here goes Glider -->
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logotype.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logo-2.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logo-3.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logo-4.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logotype.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logo-2.svg"></div>
						<div class="icons-container__item"><img src="http://citpitpl.test/wp-content/uploads/2020/12/dummy-logo-3.svg"></div>
				</div>

			</div><!-- /carousel -->
		</section> <!-- /section 1 - hero -->


	</main><!-- #main -->

<?php
get_footer();
