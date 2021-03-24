@extends('..layouts.homeLayout')
@section('container')
        <br>
        <h1>{{ $product->nombre }}</h1>
        <div>
            <h3>{{ $product->user->nombre }}</h3>
            <h3>{{ $product->user->nombre_usuario }}</h3>
            <h3>${{ $product->precio }}</h3>
            <h3>{{ $product->descripcion }}</h3>
            <h3>{{ $product->average }}</h3>
            <br>
            @if (count($product->imagen) ==0)
                <h1>No hay imagenes a mostrar</h1>
            @else
                @foreach($product->imagen as $img)
                    <img src="https://www.usps.com/ecp/asset/images/O_BOX4-L0.jpg">
                    <!--   <img src= asset('storage/' . $img->foto)}}> -->
                    <br>
                @endforeach
            @endif
            <br>
            @if (count($product->valoracion) ==0)
                    <h1>No hay valoraciones a mostrar</h1>
                @else
                    @foreach($product->valoracion as $val)
                    <h3>{{ $val->id_usuario }}</h3>
                    <h3>{{ $val->estrella }}</h3>   
                    <h3>{{ $val->comentario }}</h3>
                        <br>
                    @endforeach
                @endif
            <br>
@endsection
