@extends('..layout.homeLayout')
@section('container')
<!-- This is an example component -->
<style>
.imgfx{
 
  display: block;
  max-width:1000px;
  max-height:500px;
  width: auto;
  height: auto;
}

</style>
<h1 class="text-4xl text-black text-center sm:text-2xl font-bold p-6">Elija su foto de portada.</h1>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
    <div class="flex flex-col md:flex-row -mx-4">
      <div class="md:flex-1 px-4">
        <div x-data="{ image: 1 }" x-cloak>
          <div class=" h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
          
 
            <div x-show="image === 1" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
              <img class="imgfx object-fill h-48 w-full" src="https://i.picsum.photos/id/73/200/300.jpg?hmac=18C0Ky7sRbCcHNCGBISk2jzYf6gPrAJCyHxKbLKcu20">
            </div>
          <div x-show="image === 2" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
              <img class="imgfx  " src="https://i.picsum.photos/id/70/200/200.jpg?hmac=hRU7tEHltyLUTf0bCrAWFXlPRXOBTsvCcvL-dIUG2CE">
            </div>
 
            <div x-show="image === 3" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <img class="imgfx" src="https://i.picsum.photos/id/768/200/300.jpg?hmac=lFX2oZVTUayugh_YZQ5q6uoXJFYaOJz3d2_GLaIW2aU">
            </div> 

             <div x-show="image === 4" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
             <img class="imgfx" src="https://i.picsum.photos/id/367/200/300.jpg?hmac=9v6fvZlygxFPleXOePw645QmRd9ytp91VGVQaolJKIk">
            </div>
           
          </div>

          <div class="flex -mx-2 mb-4">
            <template x-for="i in 4">
              <div class="flex-1 px-2">
                <button x-on:click="image = i" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                  <span x-text="i" class="text-2xl"></span>
                </button>
              </div>
            </template>
          
           
</div>
<button
        type="button"
        class="border mx-auto w-full object-center  border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
        Publicar
      </button>    
@endsection