@extends('layout')
@section('content')
    <div class="bg-gray-400">
        <h1 class="text-4xl text-black text-center sm:text-2xl font-bold p-6">Elija sus categorías de preferencia.</h1>
        <div class="container my-12 mx-auto px-4 md:px-12" >
            <form class="flex flex-wrap -mx-1 lg:-mx-4">
                @foreach ($listCategorie as $categorie)
                    <div class="my-1 px-1 w-full md:w-1/2 lg:my-2 lg:px-2 lg:w-1/3">
                        <!-- Start of component -->
                        <div class="max-w-2xl mx-auto sm:px-6 lg:px-1">
                            <div class="overflow-hidden shadow-md">
                                <!-- card header -->
                                <div class="px-2 py-2 bg-white border-b border-gray-200 font-bold uppercase">
                                    {{ $categorie->nombre }}
                                </div>

                                <!-- card body -->
                                <div class="p-2 bg-white border-b border-gray-200">
                                    <!-- content goes here -->
                                    {{ $categorie->descripcion }}
                                </div>

                                <!-- card footer -->
                                <div class="p-2 bg-white border-gray-200 text-right">
                                    <!-- button link -->
                                    <label class="inline-flex items-center mt-3">
                                        <input type="checkbox" name="{{$categorie->id}}" class="form-checkbox h-5 w-5 text-blue-600"><span class="ml-2 text-gray-700"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- End of component -->
                    </div>
                @endforeach
                <button type="button" class="transition duration-200 bg-blue-500 mt-4 mb-4 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2">Siguiente</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                </button>
            </form>
        </div>
    </div>

@endsection
