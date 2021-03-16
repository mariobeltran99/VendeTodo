@extends('layout')
@section('content')
<div class="bg-gray-400">
    <x-navigation
            flagR="A"
    />
    <br><br>
    <form enctype="multipart/form-data">
        <div class="p-10 xs:p-0 mx-auto md:w-full mt-4 md:max-w-6xl">
            <div class="bg-white shadow w-full divide-y divide-gray-200 mt-4 p-2">
                <div class="px-5 py-7 mt-5">
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Nombre del perfil</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="250" placeholder="Nombre del usuario" value="{{ $arrayUser->nombre }}"/>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo electronico</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="250" placeholder="Correo electronico" value="{{ $arrayUser->nombre_usuario  }}"/>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña de acceso</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="50" placeholder="Contraseña, si no desea cambiarla dejarla en blanco " />
                    <div class="mb-2"> <span>Foto de perfil, si no desea cambiarla dejarla en blanco</span>
                        <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer"> <!-- AQUIIII -->
                            <div class="absolute">
                                <div class="flex flex-col items-center"><span class="block text-gray-400 font-normal">Sube tu foto aqui</span> <span class="block text-gray-400 font-normal"> <i class="fas fa-cloud-upload-alt fa-3x text-gray-200"></i></span> <span class="block text-blue-400 font-normal">Busca los archivos</span> </div>
                            </div> <input type="file" class="h-full w-full opacity-0" name="">
                        </div>
                        <div class="flex justify-between items-center text-gray-400"> <span>Tipo de archivos aceptados: JPG, JPEG, PNG</span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> Seguro </span> </div>
                    </div>
                    <br><br>
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-user"></i> Actualizar datos</span>
                    </button>
                    <button type="submit" class="transition duration-200 bg-red-500 mb-3 hover:bg-red-600 focus:bg-red-700 focus:shadow-sm focus:ring-4 focus:ring-red-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-ban"></i> Suspender cuenta</span>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <br><br>
@endsection
