@extends('..layouts.homeLayout')
@section('container')
        <div class="w-full mx-auto rounded-xl shadow-lg mt-6 p-10 text-gray-800 relative overflow-hidden max-w-3xl">
            <div class="relative mt-1">
                <input type="text" id="password" class="w-full pl-3 pr-10 py-2 border-2 border-gray-200 rounded-xl hover:border-gray-300 focus:outline-none focus:border-blue-300 transition-colors" placeholder="Buscar...">
                <button class="block w-7 h-7 text-center text-xl leading-0 absolute top-2 right-2 text-gray-400 focus:outline-none hover:text-gray-900 transition-colors"><i class="fas fa-search"></i></button>
            </div>
        </div>
        <br>
        <br>
        <div class="container my-12 mx-auto px-4 md:px-12">
            <div class="flex flex-wrap -mx-1 lg:-mx-4">
                <!-- repetir este div -->
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <x-card-product
                        titleR="Computadora"
                        priceR="1040.00"
                        categoryR="Informática"
                        imgsrcR="https://consumer-img.huawei.com/content/dam/huawei-cbg-site/latam/latin/mkt/pdp/plp-banner/x-pro.png"
                        urlR="/viewProduct/1"
                    />
                </div>
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <x-card-product
                        titleR="Computadora"
                        priceR="1240.00"
                        categoryR="Informática"
                        imgsrcR="https://www.profesionalreview.com/wp-content/uploads/2020/02/MSI-Modern-15-Nuevo-portatil-con-GeForce-MX330-e-Intel-Comet-Lake_2.jpg"
                        urlR="/viewProduct/2"
                    />
                </div>
                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
                    <x-card-product
                        titleR="Computadora"
                        priceR="2240.00"
                        categoryR="Informática"
                        imgsrcR="https://www.muycomputer.com/wp-content/uploads/2020/01/ASUS_ZenBook_Duo.jpg"
                        urlR="/viewProduct/3"
                    />
                </div>
                <!-- fin del div -->
            </div>
        </div>
    <br>
@endsection
