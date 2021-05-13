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

    <form enctype="multipart/form-data" class="mt-6" action="/editMeUser" method="POST">
        @csrf
        <div class="p-10 xs:p-0 mx-auto md:w-full mt-4 md:max-w-6xl">
            <div class="bg-white shadow w-full divide-y divide-gray-200 mt-4 p-2">
                <div class="px-5 py-7 mt-5">
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Nombre del perfil</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="250" placeholder="Nombre del usuario" value="{{ $arrayUser->nombre }}" name="nombre"/>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Correo electronico</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="250" placeholder="Correo electronico" value="{{ $arrayUser->nombre_usuario  }}" name="correo"/>
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Contraseña de acceso</label>
                    <input type="text" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" maxlength="50" placeholder="Contraseña, si no desea cambiarla dejarla en blanco " name="pass"/>
                    <div class="mb-2"> <span>Foto de perfil, si no desea cambiarla dejarla en blanco</span>
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
                    <br><br>
                    <button type="submit" class="transition duration-200 bg-blue-500 mb-3 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block" name="corregir" value="1">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-user"></i> Actualizar datos</span>
                    </button>
                    <button type="submit" class="transition duration-200 bg-red-500 mb-3 hover:bg-red-600 focus:bg-red-700 focus:shadow-sm focus:ring-4 focus:ring-red-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block" value="1" name="borrar">
                        <span class="inline-block mr-2 mt-2 mb-2"><i class="fas fa-ban"></i> Suspender cuenta</span>
                    </button>
                </div>
            </div>
        </div>
        <br><br>
    </form>
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
