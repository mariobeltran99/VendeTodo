@extends('..layouts.homeLayout')
@section('container')
    @if ($contra)
        <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300">
            <div
                    class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
        <span class="text-red-500">
            <svg fill="currentColor"
                 viewBox="0 0 20 20"
                 class="h-6 w-6">
                <path fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
            </svg>
        </span>
            </div>
            <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-red-800">
                    Error de seguridad
                </div>
                <div class="alert-description text-sm text-red-600">
                    Su contraseña fue reseteada recientemente
                </div>
            </div>
        </div>
    @endif
        <div class="w-full mx-auto rounded-xl shadow-lg mt-6 p-10 text-gray-800 relative overflow-hidden max-w-3xl">
            <div class="relative mt-1">
                <input type="text" id="textoBusqueda" name="textoBusqueda"  class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar..." onkeyup="renderUser()">
                <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <br>
        <br>
        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4" id="renderizado">
                <!-- repetir este div -->
                @if(count($listp) != 0)
                    @foreach($listp as $key)
                        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                            <x-card-product
                                    titleR="{{ $key->nombre }}"
                                    priceR="{{ $key->precio }}"
                                    categoryR="Informática"
                                    imgsrcR="/storage/{{ $key->foto }}"
                                    urlR="/viewProduct/{{ $key->id }}"
                            />
                        </div>
                @endforeach
            @else
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                        <h1>No hay productos</h1>
                    </div>
                @endif
                <!-- fin del div -->
            </div>
        </div>
    <br>
    <script>
        function renderUser() {
            var textoBusqueda = $("input#textoBusqueda").val();
            $.get("/renderProductHome?texto="+textoBusqueda, function(mensaje) {
                $("#renderizado").html(mensaje);
            });
        };
    </script>
@endsection
