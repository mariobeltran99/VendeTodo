@extends('..layouts.homeLayout')
@section('container')
    <form class="mt-6" method="POST" action="/crearCategoria">
        @csrf
        <div class="p-10 xs:p-0 mx-auto md:w-full mt-4 md:max-w-6xl">
            <div class="bg-white shadow w-full divide-y divide-gray-200 mt-4 p-2">
                <div class="px-5 py-7 mt-5">
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="100" placeholder="Nombre de la categoria:" name="nombre" />
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="100" placeholder="Descripcion: " name="descripcion" />
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-list"></i> Ingresar categoria</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <br><br>
    <div class="w-full mx-auto rounded-xl shadow-lg p-10 text-gray-800 relative overflow-hidden max-w-3xl">
        <div class="relative mt-1">
            <input type="text" id="password" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar...">
            <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
        </div>
    </div>
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
                                Nombre de la categoria
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Descripción de la categoria
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Editar
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listCategorie as $categorie)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $categorie->nombre }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $categorie->descripcion }}
                                </p>
                            </td>
                            <form>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <a href="/admin/editCategory/{{ $categorie->id }}">
                                                <button type="button" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </a>
                                        </div>
                                    </p>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
