@extends ('background')

@section('content')


			<div class="group">
				<div class="left-column">
					<div class="fish">
					<div class="fishcont">
						<hr class="orange">The Helvetica® typeface has been used by NASA extensively for decades, from the space shuttle to signage and printouts.
					</div>
					<div class="fishcont">
						<hr class="orange">Founded in Chicago, Air Jordan was created for Hall of Fame former basketball player Michael Jordan during his time with the Chicago Bulls
						</div>
						</div>
				<div class="sneaker-groupcont">
					<div class="toshopimage">
						<img class="jordan" src="{{ URL('images/image1.png') }}">
						</div>
					<a href="{{ url('shop') }}">
						<div class="toshoprect">
							<img class="shoppingcart" src="images/shopping-bag.png">
					</div>
					</a>
					</div>
					</div>
					<div class="right-column">
						<img class="air-jordan" src="images/Component 1.png">
						<div class="sneakergroup">
						<div class="sneaker">Sneaker</div>group</div>
						<h2>Єдиний і справжній</h2>
						<h3>твій магазин кросів.</h3>
						<h4>твій магазин кросів.</h4>
						<h5>твій магазин кросів.</h5>
						<p>твій магазин кросів.</p>
						<img class="bestsneakers" src="images/найкращі кроси.png">
					</div>
				</div>
			<hr class="grayline"> 
			<div class="group">
				<div class="left-column">
					Кожен має право одягатися як хоче
				</div>
				<div class="right-column">
					sneaker-group.com
				</div>
			</div>
			<div class="divider"></div>
			<hr class="grayline">
			<div class="group2">
				<div class="left-column">
					<div class="boldtext-field">
					Представлені тільки найкращі та автентичні моделі кросівок. З року в рік наш асортимент зростав. Крім класичних кросівок, ми також випускаємо лімітовані та ексклюзивні кросівки.
				    </div>
					<img class="heading" src="images/Why_.png">
					<div class="boldtext-field">
					З кожною новою подією чи проектом ми максимально розширюємо наші межі. Це допомогло нам вирости до групи SNEAKER GROUP, якою ми є сьогодні. Після цілих років діяльності SNEAKER GROUP залишається сімейним бізнесом, власниками якого є два брати Єгор і Вадим.
				    </div>
				</div>
				<div class="to_catc">
					<a href="{{ url('shop') }}">
				<img class="to_cat" src="images/to_cat.png">
					</a>
				</div>
				<div class="right-column">
					<img class="jordan2" src="images/image2.png">
				</div>
				
			</div>
			<hr class="grayline">
			<div class="divider"></div>
			<hr class="grayline">
			<div class="group3">
				<div class="left-column">
					<img class="jordan3" src="images/image3.png">
				</div>
				
				<div class="right-column">
					<div class="inner-group">
						<div class="boldtext-field">
							Ми піклуємося про наших клієнтів і робимо безкоштовні консультації для кожного. Ноги у всіх різні, і на них повинні бути ідеальні кросівки.
				    	</div>
						<div class="fish">SNEAKER GROUP 07.02.2022</div>
					</div>
					<h1>Наші контакти</h1>
					<div class="inner-group">
						<div class="left-column">
							<h4>+380963267933 - для консультації</h4>
							<h4>+380963268932 - для співпраці</h4>
							<h4>Електронна пошта:
							<p>sneakr@sneaker-group.com</p></h4></div>
						<div class="right-column">
							наша адреса:
							Oststr. 36 40211 Duesseldorf 
							Germany
						</div>
					
				</div>
					<img class="to_call" src="images/to_call.png" onclick="show('call_me')" role="button">
					
				</div>
			</div>
			@endsection