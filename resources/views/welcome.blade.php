@extends('layouts.layout')
@section('content')
    <style>
        .bg-img {
            background-image: url({{asset('img/portada.jpg')}});
            background-size: cover;
            height: 500px;
            background-position: center;
        }
        .bg-rest{
            height: 500px;
            width: 700px;
        }
        .bg-small{
            height: 300px;
            width: 150px;
        }
    </style>
    <div class="min-w-screen bg-img flex items-center justify-center px-5 py-5">
        <div class="w-full mx-auto bg-transparent" style="max-width: 300px">
            <form method="POST" action="loginRegister">
                @csrf
                <div class="w-full px-5 py-5 text-center">
                    <div class="mb-6 w-full">
                        <label for="name" class="block mb-4 text-gray-600"></label>
                        <input type="email" name="name" id="name" placeholder="Correo Electrónico" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-500 rounded-md focus:outline-none focus:ring focus:ring-gray-700 focus:border-gray-700 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2">Ingresar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="bg-gray-900">
        <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
            <div class="mx-auto p-5">
                <h1 class="text-white text-4xl text-center mt-6">Historia.</h1>
                <p class="text-white text-justify text-2xl mt-6"> Un día, conversamos acerca de esta idea. Una página de Clasificados disponible para todos que tengan algo que alquilar, vender, una oferta de empleo o un servicio para ofrecer. Además desde esta página Web el usuario podrá administrar sus listados, colocar fotos y actualizar todos los detalles para conseguir contacto directo de compradores. Y es asi como nacimos, como una pequeña idea que se volvió realidad y ahora esta disponible para ti. </p>
            </div>
            <div class="p-5 m-auto">
                <img class="xl:bg-rest lg:bg-rest md:bg-small sm:bg-small rounded-2xl shadow-2xl" src="{{asset('img/img1.jpg')}}">
            </div>
        </div>
        <div class="grid xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1">
            <div class="p-5 m-auto">
                <img class="xl:bg-rest lg:bg-rest md:bg-small sm:bg-small rounded-2xl shadow-2xl" src="{{ asset('img/img2.jpg') }}">
            </div>
            <div class="mx-auto p-5">
                <h1 class="text-white text-center text-4xl mt-6">Una mejor manera de hacer negocios.</h1>
                <p class="text-white text-justify text-2xl mt-6"> El equipo de Vende Todo está conformado de la ideal combinación de expertos en publicidad, programación, marketing online, talento creativo con la energía para hacer cambiar una pequeña idea en un poderoso concepto que maximice el potencial de efectividad de nuestros clientes con comunicación actualizada, todos nuestros servicios son completamente gratis, lo que nos hace la mejor opción!!!.  </p>
            </div>
        </div>
    </div>
@endsection
