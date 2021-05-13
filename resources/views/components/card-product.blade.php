<style>
    .img-box {
        display: block;
        max-width:300px;
        max-height:180px;
        width: auto;
        height: auto;
    }
</style>
<div>
    <div class="p-56">
        <div class="w-96 m-auto ">
            <div class=" grid grid-cols-3 grid-rows-7 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <div class="col-span-3 row-span-4 p-1 m-1 content-around">
                    <a href="{{$url}}">
                        <img
                            src="{{$imgsrc}}"
                            class="rounded-xl img-box mx-auto"
                        />
                    </a>
                </div>
                <div class="col-span-3 row-span-1">
                    <p class="text-grey-darker text-sm px-2 md:px-4 text-right text-2xl">${{$price}}</p>
                </div>
                <div class="col-span-3 row-span-1">
                    <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                        <p class="text-lg text-justify">
                            <a class="no-underline hover:underline  text-black" href="{{$url}}">
                                {{$title}}
                            </a>
                        </p>
                    </header>
                </div>
            </div>
        </div>
    </div>
</div>
