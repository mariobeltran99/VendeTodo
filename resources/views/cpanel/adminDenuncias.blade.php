@extends('..layouts.homeLayout')
@section('container')
    <div class="container mx-auto mt-6">
        <div class="py-8">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                ID del usuario denunciado <!-- PROXIMAMENTE EL NOMBRE DE USUARIO -->
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Motivo de la denuncia
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Negado
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Baneado
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listdenuncia as $denuncia)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $denuncia->id_usuario_denunciado }}
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap">
                                    {{ $denuncia->motivo }}
                                </p>
                            </td>
                            <form method="POST" action="/procesarDenuncia" >
                                @csrf
                                <input type="hidden" name="_id" value="{{ $denuncia->id }}">
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <button type="submit" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" name="negado" value="1">
                                                <i class="fas fa-check-double"></i>
                                            </button>
                                        </div>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <div class="inline-block mr-2 mt-2">
                                            <button type="submit" class="focus:outline-none text-white text-sm py-2 px-3 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg" name="baneado" value="1">
                                                <i class="fas fa-ban"></i>
                                            </button>
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
