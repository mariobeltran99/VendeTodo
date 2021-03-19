@extends('layout')
@section('content')
        <br>
        <h1>{{ $product->nombre }}</h1>
        <div>
            <h3>{{ $product->user->nombre }}</h3>
            <h3>{{ $product->user->nombre_usuario }}</h3>
            <h3>${{ $product->precio }}</h3>
            <h3>{{ $product->descripcion }}</h3>
            <br>
            @if (empty($product->imagen))
                <h3>NO HAY IMAGENES</h3>
            @else
                @foreach($product->imagen as $img)
                    <img src="https://www.usps.com/ecp/asset/images/O_BOX4-L0.jpg">
                    <!-- <img src= asset('storage/' . $img->foto)}}> -->
                    <br>
                @endforeach

            @endif
        <br>
@endsection
