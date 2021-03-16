@extends('layout')
@section('content')
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
@endsection
