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
				<h1>Изделия для суставов. Запястье</h1>
				<div class="tovar_img-block">
					<div class="img_wrap">
						<img src="/images/tovar_image.png" />
					</div>
					<h3>Отправить заявку</h3>
					<form class="form_modal" method="post" action="#">
						<label class="line_field" for="USER_NAME">Имя<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="PHONE">Телефон<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label for="INFO_POLE">Текст<br/>сообщения<span class="starrequired">*</span> <textarea name="INFO_POLE" rows="5" cols="30"></textarea></label>
						<div class="clear_div">&nbsp;</div>
						<label for="CAPTCHA">Введите<br/>символы<span class="starrequired">*</span> <div style="margin: -20px 10px 10px 20px; float: right;"><img src="/images/captcha.png" style="" /><input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" /></div></label>
						<div class="clear_div">&nbsp;</div>
						<button name="" value="" type="submit">Отправить</button>
					</form>
				</div>
				<div class="tovar_text-block">
					<h2>Бандаж Orlett на лучезапястный сустав серии BIOCERAMIC SWR-102</h2>
					<div class="manufacture">ORLETT, Германия</div>
					<div class="price">Цена: 570 руб.</div>
					<hr />
					<h3>Эластичный бандаж SWR-102</h3>
					<p>Бандажи серии BIOCERAMIC выполнены из современного материала, технологичного заменителя шерсти, при создании которого керамический порошок добавляют в структуру полимерной нити, переплетенной в строго определенном порядке по специальной технологии. Бандажи серии BIOCERAMIC обеспечивают легкую степень фиксации, сохраняют тепло и улучшают кровообращение мягких тканей, прилегающих к суставу. Благодаря компрессионному эффекту, способствуют уменьшению отека и ускорению выздоровления.</p>
					<p>Бандаж Orlett эластичный на лучезапястный сустав BIOCERAMIC, арт. SWR-102 обеспечивает легкую степень фиксации, согревание и компрессию лучезапястного сустава.</p>
					<h3>Назначения</h3>
					<ul>
						<li>травмы, ушибы, растяжения связок суставов;</li>
						<li>профилактика развития и обострений воспалительных заболеваний суставов (артритов, тендинитов, тендовагинитов);</li>
						<li>болевой синдром при хронических дегенеративных заболеваниях суставов (артрозах и остеоартрозах);</li>
						<li>профилактика травм при занятиях спортом, производственных нагрузках на сустав, особенно в холодную или сырую погоду.</li>
					</ul>
					<h3>Особенности</h3>
					<ul>
						<li>выполнен по технологии BIOCERAMIC</li>
						<li>материал бандажа сохраняет тепло и улучшают кровообращение в области локтевого сустава</li>
						<li>применение бандажа способствует увеличению содержания кислорода в тканях и замедлению процессов старения;</li>
						<li>ношение бандажа усиливает лечебный эффект от применения наружных лекарственных средств (мази, гели, кремы);</li>
						<li>способствует снижению отека;</li>
						<li>прочный, износостойкий, гигиеничный, не вызывает аллергии и раздражения кожи.</li>
					</ul>
					<p class="option"><b>Цвета:</b> серый</p>
					<p class="option"><b>Размеры:</b> XS, S, M, L, XL</p>
					<hr />
					<img style="float: right; margin: 40px 0 10px 15px;" src="/images/pictogramma.png" />
					<p class="option" style="margin-top: 35px;"><b>Подбор размеров</b></p>
					<p>Сантиметровой лентой плотно, но не утягивая измеряется окружность лучезапястного сустава.</p>
					<p>Согласно полученным результатам подобрать необходимую модель бандажа Orlett по таблице подбора размеров.</p>
					<p class="option"><b>Таблица подбора размеров</b></p>
					<table cellspacing="0" cellpadding="12px">
						<tr>
							<th>&nbsp;</th>
							<th>XS</th>
							<th>S</th>
							<th>M</th>
							<th>L</th>
							<th>XL</th>
						</tr>
						<tr>
							<td>окружность лучезапястного сустава (см)</td>
							<td>до 15</td>
							<td>5-17</td>
							<td>17-19</td>
							<td>19-22</td>
							<td>более 22</td>
						</tr>
					</table>
				</div>
				<div class="clear_div">&nbsp;</div>

			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">Прима КОРЛАЙН © 2007 — 2014</div>
			<div class="creator"><a href="http://www.divier.ru/" target="_blank">Создание сайта</a> ДиВиЕР</div>
		</footer>
	</body>
</html>