<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Заголовок</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	    <link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!— Подключение jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- Карусель Брэндов на главной -->
		<script src="/js/jcarousellite.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $("a.new_window").attr("target", "_blank");
			  
			  //carousel
			  $(".carousel").jCarouselLite({
				  visible: 6,
				  btnNext: ".next",
				  btnPrev: ".prev"
			  });
			});
		</script>
		
		<!— jQuery-вкладки -->
		<script type="text/javascript" src="/js/jquery.tools-1.1.1.js"></script>

		<script language="javascript">
			$(document).ready(function (){
				$('#tabs').tabs('#tabsText > li', {effect: 'fade', fadeOutSpeed: 300});
				
				var i=2;
				setInterval(function(){
					$('.imgg').fadeOut(2000);
					$('#img'+i).fadeIn(2000);
					i++;
					if(i==3){i=1;}
				}, 5000);
			});
		</script>

	</head>
	<body>
		<header>
			<a href="/" id="logo">ортопедический центр</a>
			<div class="phone">8 (499) 257-33-73<br /><br />8 (499) 257-33-82</div>
			<div class="e_feedback">
				<a class="mail" href="mailto:info@primacorline.ru">info@primacorline.ru</a>
				<div class="icq">398-365-192</div>
			</div>
			<div class="clear_div">&nbsp;</div>
			<div class="top_menu">
				<ul>
					<li class="active"><a href="/">Главная</a></li>
					<li><a href="#">О компании</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Где купить</a></li>
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Полезная<br />информация</a></li>
					<li><a href="#">Денежная<br />компенсация</a></li>
					<li><a href="#">Акции и скидки</a></li>
					<li><a href="#">Обратная связь</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
				<div class="two_lines_action"></div>
			</div>
			
			<div id="brendy">
				<div class="carousel-box">
					<a href="#"><div class="prev"></div></a>
					<a href="#"><div class="next"></div></a>
					<div class="carousel">
						<ul>
							<li>
								<div class="box">
									<a href="#"><img src="/images/brend_img1.png" /></a>
								</div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img2.png" /></a>
						        </div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img3.png" /></a>
						        </div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img4.png" /></a>
						        </div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img5.png" /></a>
						        </div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img6.png" /></a>
						        </div>
							</li>
							<li>
						        <div class="box">
									<a href="#"><img src="/images/brend_img7.png" /></a>
						        </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
		</header>

		<main>
			<div id="left_sitebar">
				<form class="form_search" autocomplete="on" method="get" action="/" >
					<input class='search' name="name" type="text" value="" placeholder='поиск' />
					<input class="button_form" type="submit" value="искать" />
				</form>

				<div id="center">
					<ul id="tabs">
						<li>Каталог</li>
						<li>Бренды</li>
					</ul>
					<ul id="tabsText">
						<li>
							<ul class="catalog">
								<li><a href="#">Товары для женщин после мастэктомии</a></li>
								<li><a href="#">Для будущих мам</a></li>
								<li><a href="#">Компрессионный трикотаж</a></li>
								<li class="active expand">
									<a class="active" href="#">Ортопедические изделия</a>
									<ul class="open">
										<li><a href="#">Изделия для позвоночника</a></li>
										<li class="active expand"><a class="selected" href="#">Изделия для суставов</a>
											<ul class="open">
												<li><a href="#">Плечо</a></li>
												<li><a href="#">Локоть</a></li>
												<li class="active expand"><a class="selected" href="#">Запястье</a></li>
												<li><a href="#">Бедро</a></li>
												<li><a href="#">Колено</a></li>
												<li><a href="#">Голеностоп</a></li>
											</ul>
										</li>
										<li><a href="#">Бандажи медицинские</a></li>
									</ul>
								</li>
								<li><a href="#">Стельки и приспособления для стопы</a></li>
								<li><a href="#">Стельки индивидуального изготовления</a></li>
								<li><a href="#">Ортопедическая обувь</a></li>
								<li><a href="#">Средства опоры</a></li>
								<li><a href="#">Ортопедические подушки</a></li>
								<li><a href="#">Массажеры</a></li>
								<li><a href="#">Косметические средства</a></li>
							</ul>
						</li>
						<li>
							<ul class="catalog">
								<li><a href="#">Anita</a></li>
								<li><a href="#">Amoena</a></li>
								<li><a href="#">BBREG</a></li>
								<li><a href="#">Orlett</a></li>
								<li><a href="#">Offo Bock</a></li>
								<li><a href="#">Bronigen</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="catalog-m_zigzag"></div>
				<div class="clear_div">&nbsp;</div>
				<div class="action_banner"></div>
				<div class="left-sitebar_adresa">
					<p><b>Экзопротезы молочной железы и белье, ортопедическая продукция по адресам:</b></p>
					<ul class="adresa">
						<li>г. Москва, м. Белорусская, Ленинградский пр-т, д.5 стр.2</li>
						<li>г. Москва, м. Жулебино, ул. Авиаконструктора Миля, д. 26</li>
					</ul>
					<p><b>Только ортопедическая продукция по адресам:</b></p>
					<ul class="adresa" style="margin-top: 30px;">
						<li>г. Москва, м. Добрынинская 4-й Добрынинский пер., д.4, 5 эт. КДЦ Мединцентра при МИД РФ</li>
						<li>г. Москва, м. Улица Подбельского, ул. Лосиноостровская, д. 45, корпус 2, ФГУ «Клиническая больница» УДП РФ 1-й этаж главного корпуса<br /><b>(только для клиентов стационара)</b></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>Где купить</h1>
				<h3><span>Экзопротезы молочной железы и белье, ортопедическая продукция по адресам:</span></h3>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map1.png" />
					<p><b>Адрес:</b> 125040, г. Москва, Ленинградский пр-т, д.5 стр.2</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">Телефон:</b> 8-499-257-33-73<br />
					<b style="width: 85px; display: inline-block">Факс:</b> 8-499-257-33-76</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 50px; display: inline-block; float: left;">Время работы:</b>Пн - Пт.: 10.00 — 19.00, без перерыва<br />Сб: по предварительной записи<br />Вс: выходной</p>
					<p><b>Как добраться:</b><br />м. Белорусская. Выход к Белорусскому вокзалу, идти вдоль вокзала до подъезда № 4, с указателем «Проход на Ленинградский проспект». Войти в подъезд и пройдя по переходу выйти на Ленинградский проспект (нечетная сторона). Идти по проспекту до дома № 5, перед ним повернуть налево во двор к дому № 5, стр. 2, третий офисный подъезд с вывеской «Ортопедический центр «Прима КОРЛАЙН». От метро 5-7 минут.</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map2.png" />
					<p><b>Адрес:</b> РФ, 109431, г. Москва, район Жулебино, ул. Авиаконструктора Миля, д. 26</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info2@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">Телефон:</b> 8-495-704-96-81<br />
					<b style="width: 85px; display: inline-block">Факс:</b> 8-495-704-96-82</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 50px; display: inline-block; float: left;">Время работы:</b>Пн - Пт.: 10.00 — 19.00, без перерыва<br />Сб: по предварительной записи<br />Вс: выходной</p>
					<p><b>Как добраться:</b><br />м. Жулебино, первый вагон из центра. Выход из метро направо, по длиннному переходу, двигаться прямо, по улице Авиаконструктора Миля до дома №26</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div style="margin-left: 2px;" class="content_line"></div>
				<h3><span>Только ортопедическая продукция по адресам:</span></h3>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map3.png" />
					<p><b>Адрес:</b> РФ, 119049, г. Москва, 4-й Добрынинский переулок, дом 4, этаж 5, КДЦ  Мединцентра при МИД РФ</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">Телефон:</b> 8-985-904-99-92</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 40px; display: inline-block; float: left;">Время работы:</b>Пн - Пт.: 9.00 — 18.00, без перерыва<br />Сб - Вс: выходной</p>
					<p><b>Как добраться:</b><br />м. Добрынинская. От станции метро направо 80 метров, свернуть направо в 1-й Люсиновский переулок, дойти до перекрестка с 1-м Добрынинским переулком, перейти дорогу, повернуть налево и через 5 метров свернуть направо — в 4-ый Добрынинский переулок. В помещении Клинико-диагностического центра Мединцентр ГлавУпДК при МИД РФ.</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="addres" style="margin-top: 25px;">
					<img style="float: right; margin-left: 40px;" src="/images/address_map4.png" />
					<p><b>Адрес:</b> РФ, 107150, г. Москва, ул. Лосиноостровская, д. 45, корпус 2, В помещении ФГУ «Клиническая больница» УДП РФ, 1-й этаж главного корпуса</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info2@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">Телефон:</b> 8-916-991-70-35<br />
					<b style="width: 85px; display: inline-block">Факс:</b> 8-499-257-33-73</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 40px; display: inline-block; float: left;">Время работы:</b>Пн.- Пт.: 9.00 — 16.00, без перерыва<br />Сб - Вс: выходной</p>
					<p class="addres_marker"><b>Только для клиентов стационара</b></p>
					<p><b>Как добраться:</b><br />м. Улица Подбельского. Автобус №775, остановка конечная.  В помещении ФГУ «Клиническая больница» УДП РФ, 1-й этаж главного корпуса.</p>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">Прима КОРЛАЙН © 2007 — 2014</div>
			<div class="creator"><a href="http://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</div>
		</footer>
	</body>
</html>