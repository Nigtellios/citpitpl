<?php
/**
 * Template Name: CITPITPL Home
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CitPitPL_-_jakubkowalski.dev
 */

get_header();
?>

	<main id="main" class="site-main">
		<?php
			the_content();
		?>

		<section id="hero" class="container-fluid content-mod"> <!-- section 1 - hero -->
			<div class="hero"> <!-- hero -->
				<div class="row hero-content">
					<div class="col-12 hero-content__align">
						<p class="toptag light">NOWY WYMIAR</p>
						<h1 class="light">Finansów i rachunkowości</h1>
						<p class="p-hero light mw-710">
							Profesjonalne, transparentne usługi księgowe dla Twojej działaności.
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

		<section id="oferta" class="container-fluid offer-mod">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="row"> <!-- inner-row -> offer tiles -->
						<div class="col-6">
							<div class="offer-tile mw-355">
								<div class="offer-tile__heading">
									<span>
										<i class="offer-tile__heading-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/pro-tile-icon.svg" width="32" height="25"></i>
										<img src="http://citpitpl.test/wp-content/uploads/2020/12/pro-tile-bcg.svg">
									</span>
									<h5>Profesjonalizm</h5>
								</div>
								<div class="offer-tile__content">
									<p class="p-tiles">Używamy najnowocześniejszych narzędzi do kontroli księgowości Twojej firmy.</p>
								</div>
							</div>
						</div>
						<div class="col-6">
							
						</div>
					</div><!-- /inner-row -> offer tiles -->
				</div>
				<div class="col-sm-12 col-md-6 justify-center">
					<div class="offer-desc-content mw-540">
						<h1>Nasz wspólny interes</h1>
						<p class="align-justify">Twoja firma to również nasz interes, dbamy o kontakt i odpowiednią komunikację abyś czuł się pewnie i bezpiecznie powieżając nam opiekę nad rozliczeniem Twojego biznesu. Zaufaj nam i zobacz szeroką gamę naszej oferty. Nie widzisz usług które Cię interesują? Zadzwoń do nas i dopytaj czy realizujemy płaszczyznę którą pragniesz.</p>
						<span class="check-offer">
							<a href="#cennik">
								<p class="cta pink">ZOBACZ CENNIK</p>
								<i><img src="http://citpitpl.test/wp-content/uploads/2020/12/cursor-icon.svg" width="20" height="25"></i>
							</a>
						</span>
					</div>
				</div>
			</div>
		</section>


	</main><!-- #main -->

<?php
get_footer();
