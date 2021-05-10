@extends('..layouts.homeLayout')
@section('container')
    @php
        $telefono = $telefono->first();
    @endphp
    <form class="mt-6">
        <div class="p-10 xs:p-0 mx-auto md:w-full mt-4 md:max-w-6xl">
            <div class="bg-white shadow w-full divide-y divide-gray-200 mt-4 p-2">
                <h1 class="text-xl text-center"> Editar Teléfono </h1>
                <div class="px-5 py-7 mt-5">
                    <input type="number" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" min="10000000" max="79999999" placeholder="Numero de telefono:" value="{{ $telefono->telefono }}" />
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-check-circle mr-2"></i> Aceptar cambios</span>
                    </button>
                    <a href="#" class="no-underline">
                        <button type="button" class="transition duration-200 bg-red-500 mb-3 hover:bg-red-600 focus:bg-red-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                            <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-times-circle mr-2"></i> Cancelar cambios</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </form>
@endsection
