@extends('..layouts.homeLayout')
@section('container')

    <div class="container my-12 mt-6 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- repetir este div -->
            @if (count($list) != 0)
                @foreach ($list as $item)
                    <div class="px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                        <x-article
                            id="{{ $item->idp }}"
                            titulo="{{ $item->nombrep }}"
                            descrp="{{ $item->descripcionp }}"
                        ></x-article>
                    </div>
                @endforeach
            @else
                <div class="px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                    No hay articulo
                </div>
            @endif

            <!-- fin del div -->
        </div>
    </div>
    <br>
@endsection
