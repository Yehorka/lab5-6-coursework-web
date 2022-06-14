@extends ('background')

@section('content')
<div id="product">
    <div class="popup_group">
        <img src="{{url('images/'.$sneaker->id.'.png')}}">
        <div class="right-column">
            <h2>{{$sneaker->name;}}</h2>
            <img class="sizes" src="{{url('images/sizes.png')}}">
            <h2>{{$sneaker->price;}}₴</h2>
            <a href="{{ url('contact') }}">
                <img class="buy_button" src="{{url('images/Group 22.png')}}">
            </a>
        </div>
    </div>
    <div class="description">
        {{$sneaker->description;}}
    </div>

</div>
@endsection
