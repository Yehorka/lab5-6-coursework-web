<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Sneaker-group</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&family=Stick+No+Bills&display=swap" rel="stylesheet">
	<script src="js/script.js"></script>
	<script src="https://kit.fontawesome.com/b17a47ede9.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="bg">
		<div class="beige_bg">
			<div class="dotted_vert1"></div>
			<div class="dotted_vert2"></div>
			<header> 
				<div class="header">
				<div class="logo">
				<div style="width:36px; height: 36px; background-color: #C0C0C0"></div>
				<h1><a href="{{ url('') }}">SNEAKER-GROUP</a></h1>
				<div style="width:36px; height: 36px; background-color: #C0C0C0"></div>
				</div>
				<div class="links">
					<a href="{{ url('about-us') }}">про нас</a>
					<a href="{{ url('contact') }}">контакти</a>
					<a href="{{ url('shop') }}">каталог</a>
				</div>
			</div>
			<hr class="grayline">  
			</header>
            @yield('content')
            <hr class="grayline">
			<div class="footer">
				<div class="footer-box">
					<a href="{{ url('shop') }}">
						<img class="footer_shop" src="{{url('images/shop.png')}}">
					</a>
					<a href="{{ url('about-us') }}">
						<img class="footer_about" src="{{url('images/about.png')}}">
					</a>
					<a href="contacts.php">
						<img class="footer_cont" src="{{url('images/cont.png')}}">
					</a>
				</div>
				sneaker-group.com
			</div>
			</div>
		<div class="red_bg">
			<img class="menu_button" src="{{url('images/Group 5.png')}}" onClick="show('menu')" role="button">
		</div>
		</div>
	<div class="popup" id="call_me">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('call_me')" role="button"></i>
  		<p>Введіть свій номер і ми вам зателефонуємо</p>
		<div class="call_me_grid">
		<input type="text">
		<div class="red_phone"><i class="fa-solid fa-phone" onclick="hide('call_me')" role="button"></i></div>
		</div>
		</div>
		<div class="popup" id="menu">
		<i class="fa-solid fa-xmark fa-sm" onclick="hide('menu')" role="button"></i>
			<p><a href="{{ url('shop') }}" class="menu_item">каталог</a></p>
			<p><a href="{{ url('contact') }}" class="menu_item">контакти</a></p>
			<p><a href="{{ url('about-us') }}" class="menu_item">про нас</a></p>
		</div>

	
</body>
</html>
