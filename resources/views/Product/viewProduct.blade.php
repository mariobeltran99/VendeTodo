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
.imgfx{

    display: block;
    max-width:500px;
    max-height:250px;
    width: auto;
    height: auto;
}
</style>

@section('container')

    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 mt-6 bg-white rounded-2xl mb-6">
        <div class="flex flex-col md:flex-row -mx-4">
            <div class="md:flex-1 px-4">
                <div x-data="{ image: 1 }" x-cloak>
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
                        <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://www.muycomputerpro.com/wp-content/uploads/2019/11/Laptop3.jpg" >
                        </div>

                        <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://www.muycomputerpro.com/wp-content/uploads/2019/11/laptop3_1.jpg" >
                        </div>

                        <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://www.muycomputerpro.com/wp-content/uploads/2019/11/laptop3_2.jpg" >
                        </div>

                        <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img src="https://www.muycomputerpro.com/wp-content/uploads/2019/11/Laptop3_3.jpg" >
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

                <p class="text-gray-500 my-4">Valoración: {{$product->average}} / 5</p>
                <div class="flex items-center space-x-4 my-4">
                    <div>
                        <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                            <span class="font-bold text-indigo-600 text-3xl">$ {{ $product->precio }}</span>
                        </div>
                    </div>
                    <div class="flex-1">
                        <p class="text-green-500 text-xl font-semibold">5</p>
                        <p class="text-gray-400 text-sm">Existencias</p>
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
                <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-lg">
                    <form class="w-full max-w-xl bg-white rounded-lg px-4 pt-2">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Ingrese su valoración (0-5)</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <input type="number" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" value="0" min="0" max="5" required/>
                            </div>
                            <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Agregue un nuevo comentario</h2>
                            <div class="w-full md:w-full px-3 mb-2 mt-2">
                                <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder='Escriba su comentario...' required></textarea>
                            </div>
                            <div class="w-full md:w-full flex items-start md:w-full px-3">
                                <div class="-mr-1">
                                    <input type='submit' class="bg-white text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100 cursor-pointer" value='Publicar Comentario'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @if (count($product->valoracion) ==0)
            <h1>No hay valoraciones a mostrar.</h1>
        @else
            @foreach($product->valoracion as $val)
                <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                    <div class="flex flex-row justify-center mr-2">
                        <img alt="avatar" width="48" height="48" class="rounded-full w-10 h-10 mr-4 shadow-lg mb-4" src="https://cdn1.iconfinder.com/data/icons/technology-devices-2/100/Profile-512.png">
                        <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $val->id_usuario }}</h3>
                        <div class="flex ml-3">
                              <span class="flex items-center">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-yellow-500" viewBox="0 0 24 24">
                                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <span class="text-gray-600 ml-3">{{$val->estrella}} Estrellas</span>
                              </span>
                        </div>
                    </div>
                    <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $val->comentario }}</p>
                </div>
            @endforeach
        @endif
    </div>
    <br>
@endsection
