@extends('layout')
@section('content')
<style>
    .container:hover input ~ .checkmark {
        background-color: #a0aec0;
    }
    .container input:checked ~ .checkmark {
        background-color: #0078d4;
    }
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    .container input:checked ~ .checkmark:after {
        display: block;
    }
    .container .checkmark:after {
        left: 9px;
        top: 6px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
</style>
<div class="bg-gray-200 flex items-center">
   <form>
        <!-- Start of component -->
        @foreach ($listCategorie as $categorie)
            <div class="max-w-2xl bg-white border-2 border-gray-300 p-5 rounded-md tracking-wide shadow-lg">
                <div id="header" class="flex">
                    <div id="body" class="flex flex-col ml-5">
                        <h4 id="name" class="text-xl font-semibold mb-2">{{ $categorie->nombre }}</h4>
                        <p id="job" class="text-gray-800 mt-2">{{ $categorie->descripcion }}</p>
                        <input type="checkbox" name="{{ $categorie->id }}">
                    </div>
                </div>
            </div>
        @endforeach
    <!-- End of component -->
   </form>
</div>
@endsection
