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
				<h1>��� ������</h1>
				<h3><span>����������� �������� ������ � �����, �������������� ��������� �� �������:</span></h3>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map1.png" />
					<p><b>�����:</b> 125040, �. ������, ������������� ��-�, �.5 ���.2</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">�������:</b> 8-499-257-33-73<br />
					<b style="width: 85px; display: inline-block">����:</b> 8-499-257-33-76</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 50px; display: inline-block; float: left;">����� ������:</b>�� - ��.: 10.00 � 19.00, ��� ��������<br />��: �� ��������������� ������<br />��: ��������</p>
					<p><b>��� ���������:</b><br />�. �����������. ����� � ������������ �������, ���� ����� ������� �� �������� � 4, � ���������� ������� �� ������������� ��������. ����� � ������� � ������ �� �������� ����� �� ������������� �������� (�������� �������). ���� �� ��������� �� ���� � 5, ����� ��� ��������� ������ �� ���� � ���� � 5, ���. 2, ������ ������� ������� � �������� ��������������� ����� ������ ������ͻ. �� ����� 5-7 �����.</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map2.png" />
					<p><b>�����:</b> ��, 109431, �. ������, ����� ��������, ��. ���������������� ����, �. 26</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info2@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">�������:</b> 8-495-704-96-81<br />
					<b style="width: 85px; display: inline-block">����:</b> 8-495-704-96-82</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 50px; display: inline-block; float: left;">����� ������:</b>�� - ��.: 10.00 � 19.00, ��� ��������<br />��: �� ��������������� ������<br />��: ��������</p>
					<p><b>��� ���������:</b><br />�. ��������, ������ ����� �� ������. ����� �� ����� �������, �� ��������� ��������, ��������� �����, �� ����� ���������������� ���� �� ���� �26</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div style="margin-left: 2px;" class="content_line"></div>
				<h3><span>������ �������������� ��������� �� �������:</span></h3>
				<div class="addres">
					<img style="float: right; margin-left: 40px;" src="/images/address_map3.png" />
					<p><b>�����:</b> ��, 119049, �. ������, 4-� ������������ ��������, ��� 4, ���� 5, ���  ����������� ��� ��� ��</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">�������:</b> 8-985-904-99-92</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 40px; display: inline-block; float: left;">����� ������:</b>�� - ��.: 9.00 � 18.00, ��� ��������<br />�� - ��: ��������</p>
					<p><b>��� ���������:</b><br />�. ������������. �� ������� ����� ������� 80 ������, �������� ������� � 1-� ����������� ��������, ����� �� ����������� � 1-� ������������ ���������, ������� ������, ��������� ������ � ����� 5 ������ �������� ������� � � 4-�� ������������ ��������. � ��������� �������-���������������� ������ ���������� �������� ��� ��� ��.</p>
				</div>
				<div class="clear_div">&nbsp;</div>
				<div class="addres" style="margin-top: 25px;">
					<img style="float: right; margin-left: 40px;" src="/images/address_map4.png" />
					<p><b>�����:</b> ��, 107150, �. ������, ��. ����������������, �. 45, ������ 2, � ��������� ��� ������������ �������� ��� ��, 1-� ���� �������� �������</p>
					<p style="margin-top: -10px;"><b style="width: 85px; display: inline-block">E-mail:</b> info2@primacorline.ru<br />
					<b style="width: 85px; display: inline-block">�������:</b> 8-916-991-70-35<br />
					<b style="width: 85px; display: inline-block">����:</b> 8-499-257-33-73</p>
					<p style="margin-top: -10px;"><b style="width: 105px; height: 40px; display: inline-block; float: left;">����� ������:</b>��.- ��.: 9.00 � 16.00, ��� ��������<br />�� - ��: ��������</p>
					<p class="addres_marker"><b>������ ��� �������� ����������</b></p>
					<p><b>��� ���������:</b><br />�. ����� ������������. ������� �775, ��������� ��������.  � ��������� ��� ������������ �������� ��� ��, 1-� ���� �������� �������.</p>
				</div>
			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">����� ������� � 2007 � 2014</div>
			<div class="creator"><a href="http://www.divier.ru/" target="_blank">�������� �����</a> ������</div>
		</footer>
	</body>
</html>