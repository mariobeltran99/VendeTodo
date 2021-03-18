@extends('layout')
@section('content')
    <div class="bg-gray-400">
        <x-navigation flagR="A" />
        <br>
        <h3>JJJJJJj</h3>
        <div>
            <h3>{{ $product->user->nombre }}</h3>
            <h3>{{ $product->user->nombre_usuario }}</h3>
            <h3>{{ $product->nombre }}</h3>
            <h3>{{ $product->precio }}</h3>
            <h3>{{ $product->descripcion }}</h3>
            @foreach($product->imagen as $img)
            <img src={{asset('img/' . $img->foto)}}></img>
           
            @endforeach
        </div>
        <br>
    </div>
@endsection
