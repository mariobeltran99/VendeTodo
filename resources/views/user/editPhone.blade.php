@extends('..layouts.homeLayout')
@section('container')

    <form class="mt-6" method="POST" action="/crearTelefono">
        @csrf
        <div class="p-10 xs:p-0 mx-auto md:w-full mt-4 md:max-w-6xl">
            <div class="bg-white shadow w-full divide-y divide-gray-200 mt-4 p-2">
                <div class="px-5 py-7 mt-5">
                    <input type="number" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" min="60000000" max="79999999" placeholder="Numero de telefono:" name="telefono" />
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-phone"></i> Ingresar numero telefonico</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <br><br>
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
                                Número de telefono
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Editar
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listPhone as $phone)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $phone->telefono }}
                                </p>
                            </td>
                            <form>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <a href="/user/editPhone/{{ $phone->id }}">
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
