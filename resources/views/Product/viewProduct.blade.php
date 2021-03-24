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

    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 mt-6 bg-white rounded-2xl">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://images.emojiterra.com/google/android-nougat/512px/2b50.png ">
                        </div>

                        <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://www.usps.com/ecp/asset/images/O_BOX4-L0.jpg">
                        </div>

                        <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">3</span>
                        </div>

                        <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <span class="text-5xl">4</span>
                        </div>
                    </div>

                    <div class="flex -mx-2 mb-4">
                        <template x-for="i in 4">
                            <div class="flex-1 px-2">
                                <button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                                    <span x-text="i" class="text-2xl"></span>
                                </button>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            <div class="md:flex-1 px-4">
                <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{ $product->nombre }}</h2>
                <p class="text-gray-500 text-sm">Publicado por <a class="text-indigo-600 no-underline">{{ $product->user->nombre }}</a></p>

                <div class="flex items-center space-x-4 my-4">
                    <div>
                        <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                            <span class="font-bold text-indigo-600 text-3xl">$ {{ $product->precio }}</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-green-500 text-xl font-semibold">Save 12%</p>
                        <p class="text-gray-400 text-sm">Inclusive of all Taxes.</p>
                    </div>
                </div>

                <p class="text-gray-500">{{ $product->descripcion }}</p>

                <div class="flex py-4 space-x-4">
                    <div class="relative">

                    </div>
                    <a class="no-underline" href="#">
                        <button type="button" class="h-14 px-6 py-2 font-semibold rounded-xl bg-green-600 hover:bg-green-500 text-white">
                            <i class="fas fa-phone-alt mr-2"></i> Contactar por WhatsApp
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
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

@endsection
