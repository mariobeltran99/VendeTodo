@extends('..layouts.homeLayout')
@section('container')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <form method="POST">
            @csrf
            <div class="w-full mx-auto rounded-xl shadow-lg mt-6 p-10 text-gray-800 relative overflow-hidden max-w-3xl">
                <div class="relative mt-1">
                    <input type="text" id="textoBusqueda" name="textoBusqueda" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar..." onkeyup="renderUser()">
                    <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
        <br>
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Nombre Completo
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Rol
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Fecha de Creación
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Estado
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Departamento
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Reestablecer contraseña
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Activar/Desactivar
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Banear/Desbanear
                                </th>
                            </tr>
                            </thead>
                            <tbody id="renderizado">
                            @foreach($listUser as $item)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-full w-6 h-6"
                                                     src="/img/{{$item->foto}}"
                                                     alt="" />
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{$item->nombre}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        @if($item->rol == 'a')
                                            <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                        @else
                                            <p class="text-gray-900 whitespace-no-wrap">User</p>
                                        @endif

                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ date_format($item->created_at, 'd-m-y') }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                         <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        @if($item->activo == 1)
                                                 <span aria-hidden class="relative inset-0 bg-green-200 p-1 rounded-full text-green-900">
                                                     activo
                                                 </span>
                                             @else
                                                 <span aria-hidden class="relative inset-0 bg-red-200 p-1 rounded-full text-green-900">
                                                     inactivo
                                                 </span>
                                             @endif
                                    </span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            {{ $item->departamento }}
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <a href="/resetPass/{{$item->id}}">
                                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                                    <i class="fas fa-key"></i>
                                                </button>
                                            </a>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <div class="inline-block mr-2 mt-2">
                                                <a href="/activarDesactivar/{{$item->id}}">
                                                    <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">
                                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                                        <i class="fas fa-arrow-alt-circle-up"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <a href="/baneo/{{$item->id}}">
                                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                                                    <i class="fas fa-minus-circle"></i>
                                                    <i class="fas fa-circle"></i>
                                                </button>
                                            </a>
                                        </div>
                                        </p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<script>
    function renderUser() {
        var textoBusqueda = $("input#textoBusqueda").val();
        $.get("/renderUsuario?texto="+textoBusqueda, function(mensaje) {
            $("#renderizado").html(mensaje);
        });
    };
</script>
@endsection
