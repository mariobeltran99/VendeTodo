@extends('..layouts.homeLayout')
<style>
.pro{
    display:flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
}
.pro > img{
width: 20%;

}
</style>

@section('container')

        <br>
        <h1>{{ $product->nombre }}</h1>
        <div class = "pro">
            <h3>{{ $product->user->nombre }}</h3>
            <h3>{{ $product->user->nombre_usuario }}</h3>
            <h3>${{ $product->precio }}</h3>
            <h3>{{ $product->descripcion }}</h3>
            <h3>{{ $product->average }}</h3>
           
            @for ($i=0;$i < 5;$i++)
                @if ($product->average < $i)
                <img src="https://images.emojiterra.com/google/android-nougat/512px/2b50.png ">
                @else
                <img src="https://www.seekpng.com/png/detail/355-3555731_estrella-800x762-goomzilla-star.png ">

                @endif

            @endfor
            </div>
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
