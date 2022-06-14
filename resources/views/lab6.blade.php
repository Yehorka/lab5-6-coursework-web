@extends ('background')

@section('content')

<div class="group">
    <div class="left-column">
        <h1>Лабораторна робота 6</h1>
        @foreach($chefs as $chef)
        <p>Повар, який приготував страву з id: {{($chef->pivot->dish_id)}}</p>
        <p>{{$chef->name}} {{$chef->surname}}</p>
        <p>{{$chef}}</p>
        @endforeach
        @foreach($dishes as $dish)
        <p>Страви, приготовані поваром з id: {{$dish->pivot->chef_id}}</p>
        <p>{{$dish->name}}</p>
        <p>{{$dish}}</p>
        @endforeach
        <p>Страви, замовлені клієнтом з id 1 </p>
        <p>{{$my_dishes}}</p>
        <p>Клієнти, які замовляли страви з id 3 </p>
        <p>{{$my_clients}}</p>
    </div>
    <div class="right-column">
    </div>

</div>

@endsection