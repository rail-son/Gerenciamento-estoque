@extends('layouts.main')

@section('title', 'Cidades')

@section('content')

<div id="product-create-container">
    <h1>Cidades</h1>
    <div id="city">
        @foreach ($cidade as $city)
            <p>{{$city -> cidade}}</p>
        @endforeach
    </div>
</div>
@endsection