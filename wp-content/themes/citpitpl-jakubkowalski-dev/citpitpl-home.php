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
				<div class="col-sm-12 col-xl-6">
					<div class="row"> <!-- inner-row -> offer tiles -->
						<div class="col-sm-12 col-md-6 just-cont-md">
							<div id="tile-pro" class="offer-tile mw-355">
								<div class="offer-tile__heading">
									<span>
										<i class="offer-tile__heading-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/pro-tile-icon.svg" width="32" height="25"></i>
										<img src="http://citpitpl.test/wp-content/uploads/2020/12/tile1bcg.svg">
									</span>
									<h5>Profesjonalizm</h5>
								</div>
								<div class="offer-tile__content">
									<p class="p-tiles">Używamy najnowocześniejszych narzędzi do kontroli księgowości Twojej firmy.</p>
								</div>
							</div>
							<div id="tile-exp" class="offer-tile mw-355">
								<div class="offer-tile__heading">
									<span>
										<i class="offer-tile__heading-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/exp-tile-icon.svg" width="22" height="32"></i>
										<img src="http://citpitpl.test/wp-content/uploads/2020/12/tile3bcg.svg">
									</span>
									<h5>Doświadczenie</h5>
								</div>
								<div class="offer-tile__content">
									<p class="p-tiles">Posiadamy wiele lat doświadczenia w prowadzeniu księgowości w MŚP.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 just-cont-md">
							<div id="tile-time" class="offer-tile mw-355">
								<div class="offer-tile__heading">
									<span>
										<i class="offer-tile__heading-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/time-tile-icon.svg" width="27" height="32"></i>
										<img src="http://citpitpl.test/wp-content/uploads/2020/12/tile2bcg.svg">
									</span>
									<h5>Terminowość</h5>
								</div>
								<div class="offer-tile__content">
									<p class="p-tiles">Twoje ważne dokumenty zawsze zostaną złożone w wyznaczonym przez urząd terminie.</p>
								</div>
							</div>
							<div id="tile-coms" class="offer-tile mw-355">
								<div class="offer-tile__heading">
									<span>
										<i class="offer-tile__heading-icon"><img src="http://citpitpl.test/wp-content/uploads/2020/12/comms-tile-icon.svg" width="29" height="26"></i>
										<img src="http://citpitpl.test/wp-content/uploads/2020/12/tile4bcg.svg">
									</span>
									<h5>Komunikacja</h5>
								</div>
								<div class="offer-tile__content">
									<p class="p-tiles">Poinformujemy Cię o każdej ważnej zmianie której będzie podlegała Twoja firma.</p>
								</div>
							</div>
						</div>
					</div><!-- /inner-row -> offer tiles -->
				</div>
				<div class="col-sm-12 col-xl-6 justify-center"> <!-- inner-row offer content -->
					<div class="offer-desc-content mw-540">
						<h1>Nasz wspólny interes</h1>
						<p class="align-justify">Twoja firma to również nasz interes, dbamy o kontakt i odpowiednią komunikację abyś czuł się pewnie i bezpiecznie powieżając nam opiekę nad rozliczeniem Twojego biznesu. Zaufaj nam i zobacz szeroką gamę naszej oferty. Nie widzisz usług które Cię interesują? Zadzwoń do nas i dopytaj czy realizujemy płaszczyznę którą pragniesz.</p>
						<span class="check-offer">
							<a href="http://citpitpl.test/#cennik">
								<p class="cta pink">ZOBACZ CENNIK</p>
								<i><img src="http://citpitpl.test/wp-content/uploads/2020/12/cursor-icon.svg" width="20" height="25"></i>
							</a>
						</span>
					</div>
				</div> <!-- /inner-row offer content -->
			</div>
		</section>

		<section id="o-nas" class="container-fluid about-mod">
			<div class="row">
				<div class="col-sm-12 col-xl-6 c-order-2"> 
					<div class="about-owner">
						<div class="about-owner__content">
							<h1 class="pink">Adriana Prusik</h1>
							<p class="undertag">PREZES ZARZĄDU</p>
							<p>
								Magister Finansów i Rachunkowości na uniwersytecie Gdańskim. Przez paręnaście lat pracowała z wieloma firmami prowadzącymi różnorodne usługi na terenie całej Polski. Posiada szeroką wiedzę w zakresie rachunkowości. Jej profesjonalizm cieszy się uznaniem wśród klientów korzystających z usług spółki.
							</p>
							<a class="about-button" href="http://citpitpl.test/#kontakt">
								<p class="p-btns pink">KONTAKT</p>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xl-6 c-order-1">
					<div class="about-heading">
						<h1>Warto nam zaufać</h1>
						<img src="http://citpitpl.test/wp-content/uploads/2020/12/about-us-bcg-min.png">
					</div>
				</div>
			</div>
		</section>

		<section id="cennik" class="container-fluid pricing-mod">
			<div class="row">
				<div class="col-sm-12 col-xl-6">
					<div class="pricing-heading">
						<h1>Cennik naszych usług</h1>
						<img src="http://citpitpl.test/wp-content/uploads/2020/12/pricing-bcg-min.png">
					</div>
				</div>
				<div class="col-sm-12 col-xl-6"> <!-- Pricing Accordion -->
					<div class="accordion" id="accordionExample">
  					<div class="accordion-item">
  					  <h2 class="accordion-header" id="headingOne">
  					    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
  					      <p class="p-btns">PODATNIK ZWOLNIONY Z VAT</p>
  					    </button>
  					  </h2>
  					  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
  					    <div class="accordion-body">
									<div class="accordion-desc">
										<p>Cennik usług dla podatników zwolnionych z podatku VAT.</p>
									</div>
									<table class="table">
  									<thead>
  									  <tr>
  									    <th scope="col">Ilość dokumentów</th>
  									    <th scope="col">Cena</th>
  									  </tr>
  									</thead>
  									<tbody>
  									  <tr>
  									    <th scope="row">od 1 do 9 dokumentów miesięcznie</th>
  									    <td>od 100zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 10 do 24 dokumentów miesięcznie</th>
  									    <td>od 150zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 25 do 50 dokumentów miesięcznie</th>
  									    <td>od 250zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 51 do 100 dokumentów miesięcznie</th>
  									    <td>od 350zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 101 do 150 dokumentów miesięcznie</th>
  									    <td>od 450zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 151 do 200 dokumentów miesięcznie</th>
  									    <td>od 500zł + VAT</td>
											</tr>
											<tr>
												<th scope="row">powyżej 200 dokumentów miesięcznie</th>
												<td>wycena indywidualna</td>
  									  </tr>
  									</tbody>
									</table>
  					    </div>
  					  </div>
  					</div>
  					<div class="accordion-item">
  					  <h2 class="accordion-header" id="headingTwo">
  					    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<p class="p-btns">PŁATNIK VAT (KPIR)</p>
  					    </button>
  					  </h2>
  					  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
  					    <div class="accordion-body">
									<div class="accordion-desc">
										<p>Cennik usług dla płatników podatku VAT (Księga Przychodów i Rozchodów).</p>
									</div>
									<table class="table">
  									<thead>
  									  <tr>
  									    <th scope="col">Ilość dokumentów</th>
  									    <th scope="col">Cena</th>
  									  </tr>
  									</thead>
  									<tbody>
  									  <tr>
  									    <th scope="row">od 1 do 9 dokumentów miesięcznie</th>
  									    <td>od 150 - 250zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 10 do 24 dokumentów miesięcznie</th>
  									    <td>od 250 - 350zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 25 do 50 dokumentów miesięcznie</th>
  									    <td>od 350 - 500zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 51 do 100 dokumentów miesięcznie</th>
  									    <td>od 500 - 650zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 101 do 150 dokumentów miesięcznie</th>
  									    <td>od 650 - 800zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 151 do 200 dokumentów miesięcznie</th>
  									    <td>od 800 - 950zł + VAT</td>
											</tr>
  									</tbody>
									</table>
  					    </div>
  					  </div>
  					</div>
  					<div class="accordion-item">
  					  <h2 class="accordion-header" id="headingThree">
  					    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<p class="p-btns">KSIĘGI RACHUNKOWE</p>
  					    </button>
  					  </h2>
  					  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
  					    <div class="accordion-body">
									<div class="accordion-desc">
										<p>Cennik usług prowadzenia księgi rachunkowej.</p>
									</div>
									<table class="table">
  									<thead>
  									  <tr>
  									    <th scope="col">Ilość dokumentów</th>
  									    <th scope="col">Cena</th>
  									  </tr>
  									</thead>
  									<tbody>
  									  <tr>
  									    <th scope="row">od 1 do 9 dokumentów miesięcznie</th>
  									    <td> od 400 - 600zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 10 do 24 dokumentów miesięcznie</th>
  									    <td>od 600 - 700zł + VAT</td>
  									  </tr>
  									  <tr>
  									    <th scope="row">od 25 do 50 dokumentów miesięcznie</th>
  									    <td>od 700 - 900zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 51 do 100 dokumentów miesięcznie</th>
  									    <td>od 900 - 1400zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 101 do 150 dokumentów miesięcznie</th>
  									    <td>od 1400 - 1800zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">od 151 do 200 dokumentów miesięcznie</th>
  									    <td>od 1800 - 2100zł + VAT</td>
											</tr>
											<tr>
  									    <th scope="row">powyżej 200 dokumentów miesięcznie</th>
  									    <td>wycena indywidualna</td>
											</tr>
  									</tbody>
									</table>
  					    </div>
  					  </div>
  					</div>
					</div>
				</div> <!-- /pricing accordion -->
			</div>
		</section>

		<section id="aktualnosci" class="container-fluid news-mod">
			<div class="row">
				<div class="col-sm-12 col-xl-4 c-order-2 news"> <!-- News Glider navigation -->
					<div class="news-heading">
						<h1>Aktualności</h1>
						<p>Najnowsze informacje ze świata finansów i rachunkowości</p>
					</div>
					<div class="glider-navigation">
						<div class="dots">
						  <!-- Glider Class -->
							<div role="tablist" class="dots"></div>
						</div>
						<div class="arrows">
							<!-- Glider Class -->
							<button aria-label="Previous" class="glider-prev"><img src="http://citpitpl.test/wp-content/uploads/2020/12/arrow-left.svg" width="16" height="24"></button>
  						<button aria-label="Next" class="glider-next"><img src="http://citpitpl.test/wp-content/uploads/2020/12/arrow-right.svg" width="16" height="24"></button>
						</div>
					</div>
				</div> <!-- //Glider navigation -->
				<div class="col-sm-12 col-xl-8 c-order-1"> <!-- Glider content -->
					<div class="glider-contain">
						<div class="glider">
    					<div>
								<div class="news-wrapper">
									<img src="http://citpitpl.test/wp-content/uploads/2020/12/aktualnosci-heading-1-min.png">
									<div class="news-wrapper__content">
										<h5>Dla czekających na tarczę 6.0</h5>
										<p class="p-news">Dla większości przedsiębiorców 10 grudnia upływa termin zapłaty składek za listopad. Płatnicy (...)</p>
										<div class="news-wrapper__content-exc">
											<span class="social-share">
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/facebook-square.svg" width="22" height="23"></i></a>
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/instagram-icon.svg" width="23" height="23"></i></a>
											</span>
											<a class="news-button">
												<p class="p-btns pink">CZYTAJ</p>
											</a>
										</div>
									</div>
								</div>
							</div>
    					<div>
								<div class="news-wrapper">
									<img src="http://citpitpl.test/wp-content/uploads/2020/12/aktualnosci-heading-2-min.png">
									<div class="news-wrapper__content">
										<h5>Koniec roku podatkowego</h5>
										<p class="p-news">Pamiętajmy iż wysoka wartość remanentu na koniec roku podwyższy wartość dochodu do opodatkowania. (...)</p>
										<div class="news-wrapper__content-exc">
											<span class="social-share">
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/facebook-square.svg" width="22" height="23"></i></a>
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/instagram-icon.svg" width="23" height="23"></i></a>
											</span>
											<a class="news-button">
												<p class="p-btns pink">CZYTAJ</p>
											</a>
										</div>
									</div>
								</div>
							</div>
    					<div>
								<div class="news-wrapper">
									<img src="http://citpitpl.test/wp-content/uploads/2020/12/aktualnosci-heading-1-min.png">
									<div class="news-wrapper__content">
										<h5>Kasy fiskalne online</h5>
										<p class="p-news">Zbliża się termin wymiany  kas fiskalnych starego typu na kasy online. Od 1 stycznia 2021 kasy online (...)</p>
										<div class="news-wrapper__content-exc">
											<span class="social-share">
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/facebook-square.svg" width="22" height="23"></i></a>
												<a><i><img src="http://citpitpl.test/wp-content/uploads/2020/12/instagram-icon.svg" width="23" height="23"></i></a>
											</span>
											<a class="news-button">
												<p class="p-btns pink">CZYTAJ</p>
											</a>
										</div>
									</div>
								</div>
							</div>
  					</div>
					</div>
				</div> <!-- //Glider content -->
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
