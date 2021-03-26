@extends('..layouts.homeLayout')
@section('container')
        <div class="w-full mx-auto rounded-xl shadow-lg mt-6 p-10 text-gray-800 relative overflow-hidden max-w-3xl">
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
                            <tbody>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-full w-6 h-6"
                                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&w=160&h=160&q=80"
                                                 alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                Vera Carpenter
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Admin</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        Ene 21, 2020
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden
                                              class="relative inset-0 bg-green-200 p-1 rounded-full text-green-900">Activo</span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        San Salvador
                                    </p>
                                </td>
                                <form>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <button type="submit" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                                <i class="fas fa-key"></i>
                                            </button>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <div class="inline-block mr-2 mt-2">
                                                <button type="submit" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">
                                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                                    <i class="fas fa-arrow-alt-circle-up"></i>
                                                </button>
                                            </div>
                                        </div>
                                        </p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <button type="button" class="focus:outline-none text-white text-sm py-2 px-3
                                            rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                                                <i class="fas fa-minus-circle"></i>
                                                <i class="fas fa-circle"></i>
                                            </button>
                                        </div>
                                        </p>
                                    </td>
                                </form>
                            </tr>
                            </tbody>
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                        <span class="text-xs xs:text-sm text-gray-900">
                            Página 1 de 4
                        </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                    Anterior
                                </button>
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                    Siguiente
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
