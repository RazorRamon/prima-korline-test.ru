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
				<h1>������� ��� ��������. ��������</h1>
				<div class="tovar_img-block">
					<div class="img_wrap">
						<img src="/images/tovar_image.png" />
					</div>
					<h3>��������� ������</h3>
					<form class="form_modal" method="post" action="#">
						<label class="line_field" for="USER_NAME">���<span class="starrequired">*</span> <input type="text" name="USER_NAME" maxlength="50" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="PHONE">�������<span class="starrequired">*</span> <input type="text" name="PHONE" maxlength="255" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label class="line_field" for="USER_EMAIL">E-Mail<span class="starrequired">*</span> <input type="text" name="USER_EMAIL" maxlength="255" size="30" value="" /></label>
						<div style="margin-bottom: -5px;" class="clear_div">&nbsp;</div>
						<label for="INFO_POLE">�����<br/>���������<span class="starrequired">*</span> <textarea name="INFO_POLE" rows="5" cols="30"></textarea></label>
						<div class="clear_div">&nbsp;</div>
						<label for="CAPTCHA">�������<br/>�������<span class="starrequired">*</span> <div style="margin: -20px 10px 10px 20px; float: right;"><img src="/images/captcha.png" style="" /><input class="short" type="text" name="CAPTCHA" maxlength="255" size="15" value="" /></div></label>
						<div class="clear_div">&nbsp;</div>
						<button name="" value="" type="submit">���������</button>
					</form>
				</div>
				<div class="tovar_text-block">
					<h2>������ Orlett �� ������������� ������ ����� BIOCERAMIC SWR-102</h2>
					<div class="manufacture">ORLETT, ��������</div>
					<div class="price">����: 570 ���.</div>
					<hr />
					<h3>���������� ������ SWR-102</h3>
					<p>������� ����� BIOCERAMIC ��������� �� ������������ ���������, �������������� ���������� ������, ��� �������� �������� ������������ ������� ��������� � ��������� ���������� ����, ������������� � ������ ������������ ������� �� ����������� ����������. ������� ����� BIOCERAMIC ������������ ������ ������� ��������, ��������� ����� � �������� �������������� ������ ������, ����������� � �������. ��������� ��������������� �������, ������������ ���������� ����� � ��������� �������������.</p>
					<p>������ Orlett ���������� �� ������������� ������ BIOCERAMIC, ���. SWR-102 ������������ ������ ������� ��������, ���������� � ���������� �������������� �������.</p>
					<h3>����������</h3>
					<ul>
						<li>������, �����, ���������� ������ ��������;</li>
						<li>������������ �������� � ���������� �������������� ����������� �������� (��������, ����������, ��������������);</li>
						<li>������� ������� ��� ����������� �������������� ������������ �������� (�������� � �������������);</li>
						<li>������������ ����� ��� �������� �������, ���������������� ��������� �� ������, �������� � �������� ��� ����� ������.</li>
					</ul>
					<h3>�����������</h3>
					<ul>
						<li>�������� �� ���������� BIOCERAMIC</li>
						<li>�������� ������� ��������� ����� � �������� �������������� � ������� ��������� �������</li>
						<li>���������� ������� ������������ ���������� ���������� ��������� � ������ � ���������� ��������� ��������;</li>
						<li>������� ������� ��������� �������� ������ �� ���������� �������� ������������� ������� (����, ����, �����);</li>
						<li>������������ �������� �����;</li>
						<li>�������, �������������, �����������, �� �������� �������� � ����������� ����.</li>
					</ul>
					<p class="option"><b>�����:</b> �����</p>
					<p class="option"><b>�������:</b> XS, S, M, L, XL</p>
					<hr />
					<img style="float: right; margin: 40px 0 10px 15px;" src="/images/pictogramma.png" />
					<p class="option" style="margin-top: 35px;"><b>������ ��������</b></p>
					<p>������������� ������ ������, �� �� �������� ���������� ���������� �������������� �������.</p>
					<p>�������� ���������� ����������� ��������� ����������� ������ ������� Orlett �� ������� ������� ��������.</p>
					<p class="option"><b>������� ������� ��������</b></p>
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
							<td>���������� �������������� ������� (��)</td>
							<td>�� 15</td>
							<td>5-17</td>
							<td>17-19</td>
							<td>19-22</td>
							<td>����� 22</td>
						</tr>
					</table>
				</div>
				<div class="clear_div">&nbsp;</div>

			</div>
			<div class="clear_div">&nbsp;</div>
		</main>
		<footer>
			<div class="copyright">����� ������� � 2007 � 2014</div>
			<div class="creator"><a href="http://www.divier.ru/" target="_blank">�������� �����</a> ������</div>
		</footer>
	</body>
</html>