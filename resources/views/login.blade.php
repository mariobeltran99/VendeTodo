@extends('layout')
@section('content')
<div class="min-h-screen bg-gray-400 flex flex-col justify-center sm:py-12">
    <div class="p-10 xs:p-0 mx-auto md:w-full md:max-w-md mt-4">
      <h1 class="font-bold text-center text-2xl mt-4 mb-5">Vende Todo</h1>
      <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200 mt-4 p-2">
        <div class="px-5 py-7 mt-5">
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo Electrónico</label>
          <input type="email" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
          <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña</label>
          <input type="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
          <button type="button" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
              <span class="inline-block mr-2 mt-2 mb-2">Iniciar Sesión</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg>
          </button>
        </div>
        <div class="p-5">
            <div class="grid grid-cols-1 gap-1">
                <button type="button" class="transition duration-200 border p-2 border-gray-200 text-gray-500 w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-normal text-center inline-block">Registrarse</button>
            </div>
        </div>
          <div class="py-5">
          <div class="grid grid-cols-1 gap-1 justify-items-center">
            <div class="text-center">
                <h3 class="text-1xl">Al continuar,aceptas las <a href="#" class="text-blue-700">Condiciones de uso</a>  y el  <a href="#" class="text-blue-700">Aviso de Privacidad</a> de VendeTodo. </h3>
            </div>
          </div>
        </div>
      </div>
      <div class="py-5">
          <div class="grid grid-cols-2 gap-1">
            <div class="text-center sm:text-left whitespace-nowrap">
              <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-black hover:bg-gray-200 focus:outline-none focus:bg-gray-100 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                  </svg>
                  <span class="inline-block ml-1 text-1lg">Regresar</span>
              </button>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
