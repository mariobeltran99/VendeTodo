@extends('layout')
@section('content')
<<<<<<< HEAD
<style>
.toggle-checkbox:checked {
  @apply: right-0 border-green-400;
  right: 0;
  border-color: #68D391;
}
.toggle-checkbox:checked + .toggle-label {
  @apply: bg-green-400;
  background-color: #68D391;
}
</style>
<div class="container my-12 mx-auto px-4 md:px-12">
<h1 class="font-bold text-left text-4xl mt-4 mb-5 " >Elija sus Categorias de</h1>
<h1 class="font-bold text-left text-6xl mt-4 mb-5" >Preferencia</h1>
    <div class="flex flex-wrap -mx-1 lg:-mx-4">


        <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">
                <a href="#">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Nombre de la Categoria
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        14/4/19
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <p class="ml-2 text-sm">
                            descripcion de Categoria
                        </p>
                    </a>
                 <!-- Botton toggle -->
                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
    <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
    <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
         <!-- Column -->
         <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

<!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg">
    <a href="#">
    </a>

    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
            <a class="no-underline hover:underline text-black" href="#">
                Nombre de la Categoria
            </a>
        </h1>
        <p class="text-grey-darker text-sm">
            14/4/19
        </p>
    </header>

    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <a class="flex items-center no-underline hover:underline text-black" href="#">
            <p class="ml-2 text-sm">
                descripcion de Categoria
            </p>
        </a>
     <!-- Botton toggle -->
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
<input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
<label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
    </footer>

</article>
<!-- END Article -->

</div>
<!-- END Column -->
 <!-- Column -->
 <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

<!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg">
    <a href="#">
    </a>

    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
            <a class="no-underline hover:underline text-black" href="#">
                Nombre de la Categoria
            </a>
        </h1>
        <p class="text-grey-darker text-sm">
            14/4/19
        </p>
    </header>

    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <a class="flex items-center no-underline hover:underline text-black" href="#">
            <p class="ml-2 text-sm">
                descripcion de Categoria
            </p>
        </a>
     <!-- Botton toggle -->
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
<input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
<label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
    </footer>

</article>
<!-- END Article -->

</div>
<!-- END Column -->
 <!-- Column -->
 <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

<!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg">
    <a href="#">
    </a>

    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
            <a class="no-underline hover:underline text-black" href="#">
                Nombre de la Categoria
            </a>
        </h1>
        <p class="text-grey-darker text-sm">
            14/4/19
        </p>
    </header>

    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <a class="flex items-center no-underline hover:underline text-black" href="#">
            <p class="ml-2 text-sm">
                descripcion de Categoria
            </p>
        </a>
     <!-- Botton toggle -->
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
<input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
<label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
    </footer>

</article>
<!-- END Article -->

</div>
<!-- END Column -->
 <!-- Column -->
 <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

<!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg">
    <a href="#">
    </a>

    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
            <a class="no-underline hover:underline text-black" href="#">
                Nombre de la Categoria
            </a>
        </h1>
        <p class="text-grey-darker text-sm">
            14/4/19
        </p>
    </header>

    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <a class="flex items-center no-underline hover:underline text-black" href="#">
            <p class="ml-2 text-sm">
                descripcion de Categoria
            </p>
        </a>
     <!-- Botton toggle -->
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
<input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
<label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
    </footer>

</article>
<!-- END Article -->

</div>
<!-- END Column -->
 <!-- Column -->
 <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

<!-- Article -->
<article class="overflow-hidden rounded-lg shadow-lg">
    <a href="#">
    </a>

    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
        <h1 class="text-lg">
            <a class="no-underline hover:underline text-black" href="#">
                Nombre de la Categoria
            </a>
        </h1>
        <p class="text-grey-darker text-sm">
            14/4/19
        </p>
    </header>

    <footer class="flex items-center justify-between leading-none p-2 md:p-4">
        <a class="flex items-center no-underline hover:underline text-black" href="#">
            <p class="ml-2 text-sm">
                descripcion de Categoria
            </p>
        </a>
     <!-- Botton toggle -->
        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
<input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
<label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
</div>
<label for="toggle" class="text-xs text-gray-700">Activar.</label>
<!-- BOTON TOGGLE END -->
    </footer>

</article>
<!-- END Article -->

</div>
<!-- END Column -->
        

    </div>
</div>
=======
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

>>>>>>> 16bab728a0e34f87d41d0db1f39034fc7b279908
@endsection
