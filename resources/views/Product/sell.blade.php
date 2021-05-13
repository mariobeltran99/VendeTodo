@extends('..layouts.homeLayout')
@section('container')
    <style>
        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .file-upload-content {
            display: none;
            text-align: center;
        }
        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }
        .image-upload-wrap {
            margin-top: 20px;
            border: 4px solid #0f4c75;
            border-radius: 10px;
            position: relative;
            transition: ease-out 0.5s;
        }
        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #3282b8;
            border: 4px solid #3282b8;
            transition: ease-in 0.5s;
        }
        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }
        .drag-text {
            text-align: center;
        }
        .drag-text h3 {
            font-weight: 500;
            text-transform: uppercase;
            color: #010c13;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }
        .remove-image {
            width: 300px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            font-weight: 700;
        }
        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }
        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }
    </style>
<div class="flex flex-wrap justify-center">
        <form id="form" enctype="multipart/form-data" class="bg-white items-center w-full shadow-md rounded px-6 mt-6 md:ml-6 lg:ml-6 xl:ml-6 md:mr-6 lg:mr-6 xl:mr-6 mb-6" method="POST" action="/productoNuevo" >
            <br>
            @csrf
            <h1 class="block text-gray-700 font-bold mb-1 text-x5 text-center">Agregar Artículo</h1>
            <br>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Título del producto
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="name" id="name" type="text" placeholder="Ingresa el título del producto" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Precio ($)
                </label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    name="price" id="price" type="number" min="0.01" step="0.01" placeholder="Ingresa el precio del producto" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Cantidad disponible
                </label>
                <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="dispo" name="dispo" type="number" min="1"  placeholder="Ingresa el precio del producto" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Descripcion del producto
                </label>
                <textarea class="shadow resize-none appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="descripcion" id="message1" type="text" placeholder="Escríbe su descripción" required></textarea>
            </div>
            <div class="mb-4">

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Elegir tú número de teléfono para contactarte
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message1" id="message1" type="text" placeholder="--Seleccione--"required>
                    @if (count($listt) != 0)
                        @foreach ($listt as $item)
                            <option value="{{ $item->id }}">{{ $item->telefono }}</option>
                        @endforeach
                    @else
                        <option value="">No hay numeros</option>
                    @endif
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Elegir la categoria del producto
                </label>
                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="message2" id="message1" type="text" placeholder="--Seleccione--"required>
                    @if (count($listl) != 0)
                        @foreach ($listl as $item)
                            <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                        @endforeach
                    @else
                        <option value="">No hay numeros</option>
                    @endif
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                   Negociable?
                </label>
                <label class="inline-flex items-center mt-3">
                    <input type="checkbox" name="negociable"  class="form-checkbox h-5 w-5 text-blue-600"><span class="ml-2 text-gray-700"></span>
                </label>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Añadir Fotos(por motivos de espacio se sube unicamenete una foto)                </label>
                <div class="file-upload">
                    <div class="image-upload-wrap">
                        <input name="imagenperfil" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                            <h3>Seleccione una Imagen</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="Su Imagen" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Eliminar <span class="image-title"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto">
                <button id="submit"
                    class="mx-auto w-full
                     bg-green-500 hover:bg-green-700 text-white font-bold py-2 mb-6 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit"> Subir al sitio<i class="fas fa-arrow-right ml-2"></i>
                </button>
             </div>
        </form>
    <br>
</div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.image-upload-wrap').hide();
                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();
                    $('.image-title').html(input.files[0].name);
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                removeUpload();
            }
        }
        function removeUpload() {
            $('.file-upload-input').replaceWith($('.file-upload-input').clone());
            $('.file-upload-content').hide();
            $('.image-upload-wrap').show();
        }
        $('.image-upload-wrap').bind('dragover', function () {
            $('.image-upload-wrap').addClass('image-dropping');
        });
        $('.image-upload-wrap').bind('dragleave', function () {
            $('.image-upload-wrap').removeClass('image-dropping');
        });
    </script>
@endsection
