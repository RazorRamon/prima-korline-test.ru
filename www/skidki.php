<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>���������</title>
		<meta name="description" content="opisanie" />
		<meta name="keywords" content="keywords" />
		<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />

	    <link rel="stylesheet" type="text/css" href="/css/style.css" />
		<link rel="stylesheet" type="text/css" href="/css/normalize.css" />

		<link rel="icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="alternate" type="application/rss+xml" title="RSS Feed" href="/news/rss/" />
		
		<!� ����������� jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.js"></script>
		
		<!-- �������� ������� �� ������� -->
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
		
		<!� jQuery-������� -->
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
			<a href="/" id="logo">�������������� �����</a>
			<div class="phone">8 (499) 257-33-73<br /><br />8 (499) 257-33-82</div>
			<div class="e_feedback">
				<a class="mail" href="mailto:info@primacorline.ru">info@primacorline.ru</a>
				<div class="icq">398-365-192</div>
			</div>
			<div class="clear_div">&nbsp;</div>
			<div class="top_menu">
				<ul>
					<li class="active"><a href="/">�������</a></li>
					<li><a href="#">� ��������</a></li>
					<li><a href="#">�������</a></li>
					<li><a href="#">��� ������</a></li>
					<li><a href="#">��������</a></li>
					<li><a href="#">��������<br />����������</a></li>
					<li><a href="#">��������<br />�����������</a></li>
					<li><a href="#">����� � ������</a></li>
					<li><a href="#">�������� �����</a></li>
					<li><a href="#">��������</a></li>
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
					<input class='search' name="name" type="text" value="" placeholder='�����' />
					<input class="button_form" type="submit" value="������" />
				</form>

				<div id="center">
					<ul id="tabs">
						<li>�������</li>
						<li>������</li>
					</ul>
					<ul id="tabsText">
						<li>
							<ul class="catalog">
								<li><a href="#">������ ��� ������ ����� �����������</a></li>
								<li><a href="#">��� ������� ���</a></li>
								<li><a href="#">�������������� ��������</a></li>
								<li class="active expand">
									<a class="active" href="#">�������������� �������</a>
									<ul class="open">
										<li><a href="#">������� ��� ������������</a></li>
										<li class="active expand"><a class="selected" href="#">������� ��� ��������</a>
											<ul class="open">
												<li><a href="#">�����</a></li>
												<li><a href="#">������</a></li>
												<li class="active expand"><a class="selected" href="#">��������</a></li>
												<li><a href="#">�����</a></li>
												<li><a href="#">������</a></li>
												<li><a href="#">����������</a></li>
											</ul>
										</li>
										<li><a href="#">������� �����������</a></li>
									</ul>
								</li>
								<li><a href="#">������� � �������������� ��� �����</a></li>
								<li><a href="#">������� ��������������� ������������</a></li>
								<li><a href="#">�������������� �����</a></li>
								<li><a href="#">�������� �����</a></li>
								<li><a href="#">�������������� �������</a></li>
								<li><a href="#">���������</a></li>
								<li><a href="#">������������� ��������</a></li>
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
					<p><b>����������� �������� ������ � �����, �������������� ��������� �� �������:</b></p>
					<ul class="adresa">
						<li>�. ������, �. �����������, ������������� ��-�, �.5 ���.2</li>
						<li>�. ������, �. ��������, ��. ���������������� ����, �. 26</li>
					</ul>
					<p><b>������ �������������� ��������� �� �������:</b></p>
					<ul class="adresa" style="margin-top: 30px;">
						<li>�. ������, �. ������������ 4-� ������������ ���., �.4, 5 ��. ��� ����������� ��� ��� ��</li>
						<li>�. ������, �. ����� ������������, ��. ����������������, �. 45, ������ 2, ��� ������������ �������� ��� �� 1-� ���� �������� �������<br /><b>(������ ��� �������� ����������)</b></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>����� � ������</h1>
				<img style="margin: 30px 0;" src="/images/skidka_1.png" />
				<img style="margin: 10px 0;" src="/images/skidka_2.png" />
				<div class="skidki_advertisement">������ �� ������ � �� ���������� ������ �� �����������!</div>
			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">����� ������� � 2007 � 2014</div>
			<div class="creator"><a href="http://www.divier.ru/" target="_blank">�������� �����</a> ������</div>
		</footer>
	</body>
</html>