@extends('layout')
@section('content')
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
<style>
  .dark{color:rgba(55, 65, 81,1);}
  body{background:white !important; }
</style>

<div class="holder place-self-stretch"> 
 <!-- Funcion foreach articulo segun usuario -->
  <div class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-lg m-5">
  <div class="profile w-full flex m-3 ml-4 text-white">
    <!-- Imagen -->  <img class="w-28 h-28 p-1 bg-white rounded-full" src="https://images.pexels.com/photos/61100/pexels-photo-61100.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""/>
      <div class="title mt-4 ml-3 font-bold flex flex-col">
        <div class="add font-semibold text-sm italic dark">Articulo</div>
        <!--  add [dark] class for bright background -->
        <div class="add font-semibold text-sm italic dark">Precio</div>
      </div>
    </div>
    <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
      <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Editar
      <img src="https://img.icons8.com/android/24/000000/pencil.png"/>
      </div>
      <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Eliminar
      <img src="https://img.icons8.com/android/24/000000/delete.png"/></div> 
    </div>
  </div>
  <!-- card end -->
@endsection
