@extends('..layouts.homeLayout')
@section('container')

    <div class="container my-12 mt-6 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
            <!-- repetir este div -->
            <div class="px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                <x-article></x-article>
            </div>
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                <x-article></x-article>
            </div>
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                <x-article></x-article>
            </div>
            <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/2">
                <x-article></x-article>
            </div>
            <!-- fin del div -->
        </div>
    </div>
    <br>
@endsection
