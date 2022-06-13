@extends ('background')

@section('content')

<div class="shop_group">
				<h2>Асортимент</h2>
				<hr class="grayline">
				<div id="container">
					@foreach($sneakers as $sneaker)
					<div class="product">
						<div class="prod">
						<img class="prodimg" src="{{url('images/'.$sneaker->id.'.png')}}">
							<p>{{$sneaker->name}}</p>
						</div>
						<div class="toshoprect">
                            <a href="sneaker/1">
							<img class="shoppingcart" src="images/shopping-bag.png" onClick="show('airjordan1')" role="button">
</a>
					</div>
					
					</div>
					@endforeach
				</div>

@endsection