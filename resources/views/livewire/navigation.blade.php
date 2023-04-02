<div>
<div class="container mb-16 ">
    <div class="hidden md:flex justify-between pt-8">
        <div>
            <a href="{{route('home')}}">
                <img src="{{asset('img/logo-grande.png')}}" class="logo_web" alt="">
            </a>
        </div>
        <div>
            <div class="hidden md:flex gap-6 xl:gap-12 pt-6 text-lg">
                <div class="menunav">
                    <a href="{{route('home')}}" class="{{ request()->is('/') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Inicio</a>
                    <div class="{{ request()->is('/') ? 'active ' : 'hidden' }}">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </div>
                </div>
                <div class="menunav">
                    <a href="{{route('conocenos')}}" class="{{ request()->is('conocenos') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Conócenos</a>
                    <div class="{{ request()->is('conocenos') ? 'active ' : 'hidden' }}">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </div>
                </div>
                <div class="menunav">
                    <a href="{{route('servicios')}}" class="{{ request()->is('servicios') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Servicios</a>
                    <div class="{{ request()->is('servicios') ? 'active ' : 'hidden' }}">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </div>
                </div>
                <div class="menunav">
                    <a href="{{route('galeria')}}" class="{{ request()->is('galeria') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Galería</a>
                    <div class="{{ request()->is('galeria') ? 'active ' : 'hidden' }}">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </div>
                </div>
                <div class="menunav">
                    <a href="{{route('contactenos')}}" class="{{ request()->is('contactenos') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Contáctenos</a>
                    <div class="{{ request()->is('contactenos') ? 'active ' : 'hidden' }}">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </div>
                </div>
                <div  class="hidden md:flex gap-4 ">
                    <div class="relative">
                        <a href="https://www.facebook.com/DentalOralBeauty" class="btn-social" target="_blank">
                            <img src="{{asset('img/facebook-header.png')}}" class="icon-p">
                            <img src="{{asset('img/facebook-hover.png')}}" class="hidden icon-s">
                        </a>
                    </div>
                    <div class="relative">
                        <a href="https://www.instagram.com/clinicaoralbeauty" class="btn-social" target="_blank">
                            <img src="{{asset('img/instagram-header.png')}}" class="icon-p">
                            <img src="{{asset('img/instagram-hover.png')}}" class="hidden icon-s">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <header class=" md:hidden w-full top-0  border-gray-500 border-opacity-20 border-b-2 py-2" style="z-index: 900"
        x-data="dropdown()">

        <div class="container flex items-center h-12 justify-between  ">
            <div class="block md:hidden py-4 px-2 md:p-0">
                <a href="/">
                    <img src="{{ asset('img/logo-grande.png') }}" class="block h-8 "alt="">
                    {{-- <x-jet-application-mark class="block h-10 md:h-16 w-auto" /> --}}
                </a>
            </div>

            <a :class="{ 'bg-opacity-100 text-orange-500': open }" x-on:click="show()"
                class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25  cursor-pointer font-semibold h-full">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </a>

        </div>

        <nav id="navigation-menu" :class="{ 'block': open, 'hidden': !open }" x-show="open"
            class="bg-trueGray-700  z-40 bg-opacity-70 w-full absolute md:hidden">

            {{-- menu mobil --}}

            <div class="h-96 md:mt-2">
                <div x-on:click.away="close()">
                    <div class="md:hidden ">
                        <div class="w-full relative bg-white altura border-gray-500 border-opacity-20 border-t-2">

                            <ul class="bg-white pt-6 text-center">
                                <li>
                                    <a href="{{route('home')}}" class="{{ request()->is('/') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Inicio</a>
               
                                </li>
                                <li class="mt-8">
                                    <a href="{{route('conocenos')}}" class="{{ request()->is('conocenos') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Conócenos</a>
                
                                </li>
                                <li class="mt-8">
                                    <a href="{{route('servicios')}}" class="{{ request()->is('servicios') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Servicios</a>
               
                                </li>
                                <li class="mt-8">
                                    <a href="{{route('galeria')}}" class="{{ request()->is('galeria') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Galería</a>
               
                                </li>
                                <li class="mt-8">
                                    <a href="{{route('contactenos')}}" class="{{ request()->is('contactenos') ? 'active textColorFucsia font-bold ' : 'htxt' }}">Contáctenos</a>
                
                                </li>
                                <li class="mt-8">
                                    <div class="flex justify-center">

                                        <img src="{{ asset('img/logo-grande.png') }}" class="h-24"alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
    
</div>
