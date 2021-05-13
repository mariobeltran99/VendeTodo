@extends('..layouts.homeLayout')
@section('container')
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
                        <h1>No hay productos relacionados con esta categoria</h1>
                    </div>
                @endif
                <!-- fin del div -->
            </div>
        </div>
    <br>
@endsection
