<?php
function utm_print(){
        if(isset($_GET['utm_source']) && !empty($_GET['utm_source'])) {
            printf('<input name="utm_source" type="hidden" value="%s" />', $_GET['utm_source']);
        }
        
        if(isset($_GET['utm_medium']) && !empty($_GET['utm_medium'])) {
            printf('<input name="utm_medium" type="hidden" value="%s" />', $_GET['utm_medium']);
        }
        
        if(isset($_GET['utm_campaign']) && !empty($_GET['utm_campaign'])) {
            printf('<input name="utm_campaign" type="hidden" value="%s" />', $_GET['utm_campaign']);
        }
        
        if(isset($_GET['utm_term']) && !empty($_GET['utm_term'])) {
            printf('<input name="utm_term" type="hidden" value="%s" />', $_GET['utm_term']);
        }
        
        if(isset($_GET['utm_content']) && !empty($_GET['utm_content'])) {
            printf('<input name="utm_content" type="hidden" value="%s" />', $_GET['utm_content']);
        }
    
    }

?>
	<!DOCTYPE html>
	<html lang="ru">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Актуальный каталог улучшенных проектов 2016-2017 | Dom1god.ru</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-flex.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.min.css"> </head>

	<body>
		<header class="main-head">
			<div class="container">
				<div class="row">
					<div class="main-logo col-md-6 col-lg-6 col-sm-6">
						<div class="main-head-table">
							<div class="main-logo-img main-head-cell"> <img src="img/logo.png" alt="Дом1год - продажа готовых проектов удобных частных домов" /> </div>
							<div class="main-birka hidden-md-down main-head-cell"> Компания по проектированию и продаже готовых проектов удобных частных домов и помощи в организации строительства по всей России. </div>
						</div>
					</div>
					<div class="main-btn col-md-6 col-lg-6 col-sm-6 hidden-xs-down">
						<div class="main-phone hidden-md-down"> +7 495 150-45-47 </div> <a href="#getCatalog" class="btn btn-responsive btn-primary btn-lg open-popup-link" data-effect="mfp-zoom-in">Скачать каталог</a> </div>
				</div>
			</div>
		</header>
		<section class="first-screen">
			<!--<div class="hidden-sm-up first-screen-mobile"> <img src="img/C04-3.jpg" /> </div>-->
			<div class="pre-first-screen-content">
				<div class="container">
					<h1>УЧАСТИЕ В НОВОГОДНЕЙ АКЦИИ</h1>
					<H2>~</H2>
					<H3>Заполните форму чтобы получить новогднюю<BR>
скидку на проекты домов</H3>
					<div class="row">
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">Как вас зовут?</h4>
								<form>
									<div class="form-group">
										<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Введите ваше имя"> </div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">Какой у вас адрес электронной почты?</h4>
								<form>
									<div class="form-group">
										<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Введите ваше e-mail"> </div>
								</form>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">Ваш номер телефона?</h4>
								<form>
									<div class="form-group">
										<input type="tel" class="form-control" aria-describedby="emailHelp" placeholder="Введите ваш номер"> </div>
								</form>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="center-btn"> <a href="#getCatalog" class="btn btn-responsive btn-primary btn-lg open-popup-link" data-effect="mfp-zoom-in">УЧАСТВОВАТЬ В АКЦИИ</a> </div>
					</div>
					
					<div class="row row-custom hidden-sm-down">
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">-30%</h4>
								<p>на полный комплект 
проекта</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">-50%</h4>
								<p>скидка на привязку дома к вашему участку</p>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-block">
								<h4 class="card-title">-70%</h4>
								<p>скидка на дополнительныую копию проекта</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="first-screen-content">
				<div class="container">
					<div class="first-screen-birka row">
						<div class="col-md-3 col-lg-2 first-screen-birka-img hidden-sm-down"> <img src="img/ico-catalog.png" width="165" height="86" alt="Каталог проектов" />
							<div class="first-screen-birka-pdf"> <i class="icon icon-file-pdf">&#xf1c1;</i> Получите на почту
								<br>PDF файл 5.23 Мбайт. </div>
						</div>
						<div class="col-sm-12 col-md-9 col-lg-10">
							<div class="first-screen-birka-title">Заберите актуальный каталог улучшенных проектов 2016-2017гг.</div>
							<div class="first-screen-birka-retitle">и выберите дом мечты прямо сейчас</div>
							<form class="first-screen-birka-form form-horizontal row" role="form" id="header-form">
								<div class="first-screen-birka-form-tz-input form-group col-md-4 col-sm-4 col-lg-3">
									<input type="text" name="name" class="" placeholder="Ваше имя"> </div>
								<div class="first-screen-birka-form-tz-input form-group col-md-4 col-sm-4 col-lg-3">
									<input type="email" name="email" class="" placeholder="Ваш email"> </div>
								<input type="hidden" name="tz_name" value="1 экран" />
								<input type="hidden" name="domain_name" value="55-77.ru" />
								<? utm_print(); ?>
									<div class="first-screen-birka-form-tz-button form-group col-md-4 col-sm-4 col-lg-3">
										<button type="sumbit" class="btn btn-primary">Получить</button>
									</div>
									<div class="checkbox-row col-md-12 col-sm-12 col-lg-12">
										<div class="checkbox">
											<label>
												<input name="accept" type="checkbox"> Нажав кнопку "Получить" я даю согласие на обработку компанией "Дом1год" моих персональных данных и условиями <a target="_blank" href="//dom1god.ru/public-oferta/">публичной оферты</a>. </label>
										</div>
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="advantage-screen offset-section">
			<div class="container">
				<div class="row">
					<h2 class="title-screen -orange">Построить дом можно<br>в любое время</h2> <span class="delimiter-title -orange">~</span> </div>
				<div class="row flex-items-xs-center ">
					<div class="advantage-item col-md-6 col-lg-3 col-sm-6 col-xs-12"> <img src="img/item-img-vsegda.png" width="147" height="143" alt="Всегда пригодится" /> <span class="delimiter-key"><img src="img/key.png"/></span>
						<h3 class="advantage-title">Всегда пригодится</h3>
						<p>Строить можно в любое время,
							<br>проекты актуальны на 100 лет вперед</p>
					</div>
					<div class="advantage-item col-md-6 col-lg-3 col-sm-6"> <img src="img/item-img-gost.png" width="150" height="143" alt="ГОСТ и СНИЛС" /> <span class="delimiter-key"><img src="img/key.png"/></span>
						<h3 class="advantage-title">ГОСТ и СНИЛС</h3>
						<p>Полное соответствие требованиям
							<br>российского законодательства</p>
					</div>
					<div class="advantage-item col-md-6 col-lg-3 col-sm-6"> <img src="img/item-img-udobstvo.png" width="150" height="145" alt="Удобство жизни" /> <span class="delimiter-key"><img src="img/key.png"/></span>
						<h3 class="advantage-title">Удобство жизни</h3>
						<p>Просторные комнаты,
							<br> удобные лестницы, гардеробные
							<br>и бытовые комнаты</p>
					</div>
				</div>
				<div class="row flex-items-xs-center ">
					<div class="advantage-item col-md-6 col-lg-3 col-sm-6"> <img src="img/item-img-vkus.png" alt="На любой вкус" width="149" height="144" /> <span class="delimiter-key"><img src="img/key.png"/></span>
						<h3 class="advantage-title">На любой вкус</h3>
						<p>Проекты для разных потребностей:
							<br>от эконом до премиум</p>
					</div>
					<div class="advantage-item col-md-6 col-lg-3 col-sm-6"> <img src="img/item-img-zdorov.png" alt="Здоровая семья" width="151" height="144" /> <span class="delimiter-key"><img src="img/key.png"/></span>
						<h3 class="advantage-title">Здоровая семья</h3>
						<p>Проекты только из долговечных
							<br>и экологчески чистых материалов</p>
					</div>
				</div>
			</div>
		</section>
		<section class="slider-screen offset-section">
			<div class="row">
				<h2 class="title-screen -orange">Примеры наших проектов</h2> <span class="delimiter-title -orange">~</span> </div>
			<div class="slider-section">
				<div class="slider-container">
					<div class="slider-item"><img src="img/slider/1.jpg" /></div>
					<div class="slider-item"><img src="img/slider/2.jpg" /></div>
					<div class="slider-item"><img src="img/slider/3.jpg" /></div>
					<div class="slider-item"><img src="img/slider/4.jpg" /></div>
					<div class="slider-item"><img src="img/slider/5.jpg" /></div>
				</div>
				<div class="slider-nav slider-nav-prev"><i class="icon icon-left-open-big">&#xe803;</i></div>
				<div class="slider-nav slider-nav-next"><i class="icon icon-right-open-big">&#xe804;</i></div>
			</div>
		</section>
		<section class="orange-screen offset-section">
			<div class="container">
			<div class="row">
						<div class="col-md-4">
											<div class="card card-block row">
																<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<h4 class="card-title shpere">30%</h4>
								</div>
								<div class="col-md-8 col-sm-6 col-xs-8 col-lg-8">
								<p>на полный комплект 
проекта</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-block row">
																<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<h4 class="card-title shpere">50%</h4>
								</div>
								<div class="col-md-8 col-sm-6 col-xs-8 col-lg-8">
								<p>скидка на привязку дома к вашему участку</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
											<div class="card card-block row">
																<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<h4 class="card-title shpere">70%</h4>
								</div>
								<div class="col-md-8 col-sm-6 col-xs-8 col-lg-8">
								<p>скидка на дополнительныую копию проекта</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>
		<section class="tz-screen offset-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-screen -white">УЧАСТИЕ В НОВОГОДНЕЙ АКЦИИ</h2> </div> 
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-2 tz-screen-content">
						<div class="tz-screen-content-title"> Заполните форму чтобы получить новогоднюю скидку на проекты домов </div>
						<form class="tz-screen-form form-inline row  flex-items-xs-center" role="form" id="footer-form">
							
							
							<div class="form-group tz-screen-form-name col-sm-12  col-md-3 col-lg-3">
								<input type="text" name="name" class="" placeholder="Ваше имя"> </div>
							<div class="form-group tz-screen-form-mail col-sm-12 col-md-3 col-lg-3">
								<input type="email" name="email" class="" placeholder="Ваш email"> </div>
							<div class="form-group tz-screen-form-phone col-sm-12  col-md-3 col-lg-3">
								<input type="tel" name="phone" class="" placeholder="Ваше телефон"> </div>
							<? utm_print(); ?>
								<input type="hidden" name="tz_name" value="последний экран">
								<input type="hidden" name="domain_name" value="55-77.ru" />
								<div class="form-group tz-screen-form-btn col-sm-12 col-md-3 col-lg-3">
									<button type="submit" class="btn btn-primary tz-screen-form-btn"><i class="icon icon-ok">&#xe802;</i> Получить</button>
								</div>
								<div class="checkbox-row col-md-12 col-sm-12 col-lg-12">
									<div class="checkbox">
										<label>
											<input name="accept" type="checkbox"> Нажав кнопку "Получить" я даю согласие на обработку компанией
											<br>"Дом1год" моих персональных данных и условиями <a target="_blank" href="//dom1god.ru/public-oferta/">публичной оферты</a>. </label>
									</div>
								</div>
						</form>
						<div class="tz-screen-content-info"> 
							<br> <i>Гарантируем</i> конфиденциальность данных и отстутсвие какого-либо спама. </div>  </div>
				</div>
			</div>
		</section>
		<!-- PoupUp -->
		<div id="getCatalog" class="popup-container white-popup mfp-hide mfp-with-anim col-md-4">
			<div class="popup-content">
				<div class="popup-title -orange"> Скачайте БЕСПЛАТНО актуальный каталог проектов 2016-2017 и выбирайте дом под ваши задачи и мечты </div> <span class="delimiter-title -orange">~</span>
				<div class="popup-info"> На указанную почту будет отправлен PDF файл размером 5.23 Мбайт. <i>Гарантируем</i> конфиденциальность данных
					<br>и отстутсвие какого-либо спама. </div>
				<div class="popup-form">
					<form class="form-inline row  flex-items-xs-center" id="popup-form">
						<div class="form-group col-md-4">
							<input type="text" name="name" class="" placeholder="Ваше имя"> </div>
						<div class="form-group col-md-4">
							<input type="email" name="email" class="" placeholder="Ваш email"> </div>
						<? utm_print(); ?>
							<input type="hidden" name="tz_name" value="всплывающее окно">
							<input type="hidden" name="domain_name" value="55-77.ru" />
							<div class="form-group col-md-4">
								<button type="sumbit" value="" class="btn btn-primary ">Скачать</button>
							</div>
							<div class="checkbox-row popup-checkbox">
								<div class="checkbox">
									<label>
										<input name="accept" type="checkbox"> Нажав кнопку "Скачать" я даю согласие на обработку компанией
										<br>"Дом1год" моих персональных данных и условиями <a target="_blank" href="//dom1god.ru/public-oferta/">публичной оферты</a>. </label>
								</div>
							</div>
					</form>
				</div> <span class="delimiter-title -orange">~</span>
				<div class="popup-ps"> Также данный каталог проектов можно купить на ЛитРес,
					<br>всего за 855 рублей. </div>
			</div>
		</div>
		<div id="success-form" class="success-form white-popup blue-popup mfp-hide mfp-with-anim"> <img src="img/smile.png" width="150" height="150" />
			<div>Благодарим</div> <span>Актуальный каталог улучшенных проектов 2016-2017<br>отправлен на Вашу почту</span> </div>
		<!-- Scripts -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/main.js"></script>
	</body>

	</html>