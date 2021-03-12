<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
        <title>Vende Todo</title>
    </head>
    <style>
        .bg-img {
            background-image: url("../resources/img/portada.jpg");
            background-size: cover;
            height: 500px;
            background-position: center;
        }
        .bg-rest{
            height: 500px;
            width: 700px;
        }
    </style>
    <body>
        <div class="min-w-screen bg-img flex items-center justify-center px-5 py-5">
            <div class="w-full mx-auto bg-transparent" style="max-width: 300px">
                <form>
                    <div class="w-full px-5 py-5 text-center">
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400"></label>
                            <input type="text" name="name" id="name" placeholder="Ingrese su correo electrónico" required class="w-full px-3 py-2 placeholder-gray-500 border border-gray-500 rounded-md focus:outline-none focus:ring focus:ring-gray-700 focus:border-gray-700 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6 w-full">
                            <button type="button" class="focus:outline-none
                            text-white text-md py-2.5 px-5 p-1
                            rounded-md bg-indigo-700 hover:bg-indigo-900 hover:shadow-lg">Vender o Comprar  <i class="fas fa-sign-in-alt"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bg-gray-900">
            <div class="flex flex-wrap content-center justify-items-center">
                <div class="mx-auto p-5">
                    <h1 class="text-white text-xl">Una mejor manera de hacer negocios.</h1>
                </div>
                <div class="py-5 mx-5">
                    <img class="bg-rest sm:img-fluid" src="../resources/img/img1.jpg">
                </div>
            </div>
            <div class="flex flex-wrap content-center justify-items-center">
                <div class="p-5">
                    <img class="bg-rest" src="../resources/img/img2.jpg">
                </div>
                <div class="mx-auto py-5">
                    <h1 class="text-white text-xl">Una mejor manera de hacer negocios.</h1>
                </div>
            </div>
        </div>
        <footer class="footer bg-white relative pt-1 border-b-2 border-blue-700">
            <div class="container mx-auto px-6">

                <div class="sm:flex sm:mt-8">
                    <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Condiciones de Uso</span>
                            <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Políticas de Privacidad</a></span>
                            <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Condiciones del Servicio</a></span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Anuncios Clasificados</span>
                            <span class="my-2"><a href="#" class="text-blue-700 text-md hover:text-blue-500">Clasificados</a></span>
                            <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Automóviles</a></span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Ayuda Técnica</span>
                            <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Uso de la plataforma</a></span>
                            <span class="my-2"><a href="#" class="text-blue-700  text-md hover:text-blue-500">Realización de negocios</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto px-6">
                <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                    <div class="sm:w-2/3 text-center py-6">
                        <p class="text-sm text-blue-700 font-bold mb-2">
                            © 2020 por Netux.Inc
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
