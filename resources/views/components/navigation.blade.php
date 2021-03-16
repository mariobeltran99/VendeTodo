<div>
    <style>
        .inset-l-full {
            left: 100%;
        }
    </style>
        <div class="py-3 px-5 bg-white shadow-xl">
            <div class="-mx-1">
                <ul class="flex w-full flex-wrap items-center h-10">
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 bg-indigo-500 text-white" @click.prevent="showChildren=!showChildren">
                            <span class="mr-3 text-xl"> <i class="fas fa-tags"></i></span>
                            <span>Categorías</span>
                            <span class="ml-2"><i class="fas fa-chevron-down"></i></span>
                        </a>
                        <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" style="display: none;" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <!-- repetir este li para mostrar-->
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Autos</span>
                                        </a>
                                    </li>
                                    <!-- end li -->
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="block relative">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                            <span class="mr-3 text-xl"> <i class="fas fa-money-bill-wave"></i> </span>
                            <span>Vender</span>
                        </a>
                    </li>
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                            <span class="mr-3 text-xl"> <i class="fas fa-shopping-basket"></i></span>
                            <span>Mis artículos</span>
                        </a>
                    </li>
                @if($flag == 'A')
                    <!-- este li lo podes ocultar por el role del usuario -->
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                            <span class="mr-3 text-xl"> <i class="fas fa-tachometer-alt"></i></span>
                            <span>Panel de Control</span>
                            <span class="ml-2"> <i class="fas fa-chevron-down"></i></span>
                        </a>
                        <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" style="display: none;" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Administración de Usuarios</span>
                                        </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Administración de Categorías</span>
                                        </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Administración de Denuncias</span>
                                        </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Tráfico del sitio web</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                @endif
                    <!-- end li-->
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">
                        <a href="#" class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100" @click.prevent="showChildren=!showChildren">
                            <span class="mr-3 text-xl"> <i class="fas fa-cogs"></i></span>
                            <span>Ajustes</span>
                            <span class="ml-2"> <i class="fas fa-chevron-down"></i></span>
                        </a>
                        <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
                            <span class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Editar Perfil</span>
                                        </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Editar Teléfonos</span>
                                        </a>
                                    </li>
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false" @mouseenter="showChildren=true">
                                        <a href="#" class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
                                            <span class="flex-1">Desconectar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
