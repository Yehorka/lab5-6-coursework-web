@extends ('background')

@section('content')

<div class="shop_group">
    <h2>Асортимент</h2>
    <hr class="grayline">
    <div id="container">
        @if (count($sneakers)>0)
        @foreach($sneakers as $sneaker)

        <div class="product">
            <div class="prod">
                <img class="prodimg" src="{{url('images/'.$sneaker->id.'.png')}}">
                <p>{{$sneaker->name}}</p>
            </div>
            <div class="toshoprect">
                <a href="{{url('sneaker/'.$sneaker->id)}}">
                    <img class="shoppingcart" src="images/shopping-bag.png">
                </a>
            </div>

        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection
