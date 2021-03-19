<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <title>Vende Todo</title>
    </head>
    <body>
        <main role="main" class="bg-gray-400">
            @yield('content')
        </main>

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
                            <span class="font-bold text-gray-700 uppercase mt-4 md:mt-0 mb-2">Politica sobre clasificados</span>
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
