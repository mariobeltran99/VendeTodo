<div>
    <div class="p-56">
        <div class="w-96 m-auto ">
            <div class=" grid grid-cols-3 grid-rows-7 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <div class="col-span-3 row-span-4 p-1 m-1">
                    <a href="#">
                        <img
                            src="{{$imgsrc}}"
                            alt="Placeholder"
                            class="rounded-t-xl object-cover h-48 w-full"
                        />
                    </a>
                </div>
                <div class="col-span-3 row-span-1">
                    <ul class="flex flex-row pl-3 text-gray-600 hide-scroll-bar">
                        <li class="py-1">
                            <div class="transition duration-300 ease-in-out rounded-2xl mr-1 px-2 py-1 bg-blue-800 text-white">
                                <a class="text-white" href="#">{{$category}}</a>
                            </div>
                        </li>
                    </ul>
                    <p class="text-grey-darker text-sm px-2 md:px-4 text-right text-2xl">${{$price}}</p>
                </div>
                <div class="col-span-3 row-span-1">
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <p class="text-lg text-justify">
                            <a class="no-underline hover:underline  text-black" href="#">
                                {{$title}}
                            </a>
                        </p>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
