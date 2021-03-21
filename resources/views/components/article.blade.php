<style>
    .img-box {
        display: block;
        max-width:300px;
        max-height:150px;
        width: auto;
        height: auto;
    }
</style>
<div>
    <div class="w-full bg-white border-2 border-gray-300 grid sm:grid-cols-1 md:grid-cols-1  lg:grid-cols-1 xl:grid-cols-2 p-1 rounded-md shadow-lg">
        <div class="lg:mr-5 md:mr-5 xl:mr-5 sm:mr-6">
            <img class="rounded img-box border-2 border-gray-300" src="https://www.muycomputer.com/wp-content/uploads/2020/01/ASUS_ZenBook_Duo.jpg" />
        </div>
        <div id="body">
                <h4 id="name" class="text-xl font-semibold mb-2 sm:mt-3 md:mt-3 lg:mt-1 xl:mt-1 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h4>
                <p id="job" class="text-gray-800 mt-2">Ut eni quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="mt-5">
                    <div class="inline-block mr-1 mt-2">
                        <a href="/viewProduct/{{ $id }}">
                            <button type="button" class="focus:outline-none text-white text-sm py-2 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                <i class="fas fa-info-circle"></i></button>
                        </a>
                    </div>
                    <div class="inline-block mr-1 mt-2">
                        <a href="/editProduct/{{ $id }}">
                            <button type="button" class="focus:outline-none text-white text-sm py-2 px-5 rounded-md bg-gray-500 hover:bg-gray-600 hover:shadow-lg">
                                <i class="fas fa-edit"></i></button>
                        </a>
                    </div>
                    <div class="inline-block mr-1 mt-2">
                        <button type="button" class="focus:outline-none text-white text-sm py-2 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">
                            <i class="fas fa-trash"></i></button>
                    </div>
                </div>
        </div>
    </div>
</div>
