<x-app-layout>

    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div class=" {{ request()->is('/') ? 'z-10' : '' }}">
        <div class="relative hidden md:block">
            <div class="absolute z-50 w-full txtDp">
                <div class="container">
                    <div>
                        <p class="lg:text-3xl xl:text-6xl font-bold textColor leadtxt">Consigue la sonrisa</p>
                        <p class="lg:text-3xl xl:text-6xl font-bold textColor">que siempre deseaste...</p>
                    </div>
                    <div class="flex mt-12 z-40">
                        <div class="mr-4">
                            <a href="{{ route('servicios') }}"
                                class=" px-4 py-2 xl:px-7 inline-block xl:py-3 btnColor border-2 text-white rounded-3xl text-sm lg:text-lg font-bold btnColorFuc">VER
                                SERVICIOS</a>
                        </div>
                        <div class="mx-5">
                            <a href="{{ route('contactenos') }}"
                                class=" px-4 py-2 xl:px-7 inline-block xl:py-3 border-blue-800 border-2 bg-none text-blue-800 rounded-4xl text-sm lg:text-lg font-bold btnColorAzul">ESCRÍBENOS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg_slides">
                <div>
                    <div class="bg-opc" style="background-image: url({{ asset('fotos/slider01.png') }})"></div>
                </div>
                <div>
                    <div class="bg-opc" style="background-image: url({{ asset('fotos/slider02.png') }})"></div>
                </div>
                <div>
                    <div class="bg-opc" style="background-image: url({{ asset('fotos/slider03.png') }})"></div>
                </div>
            </div>
        </div>
    </div>

    <div class=" {{ request()->is('/') ? 'relative mt-16' : '' }}">
        <div class="relative block md:hidden">
            <div class="absolute z-50 w-full txtDpRp">
                <div class="container">
                    <div>
                        <p class=" font-bold textColor">Consigue la sonrisa</p>
                        <p class=" font-bold textColor">que siempre deseaste...</p>
                    </div>
                    <div class="grid grid-cols-1 mt-8 z-40">
                        <div class="mr-4">
                            <a href="{{ route('servicios') }}"
                                class="px-4 py-2 btnColor inline-block text-white rounded-3xl text-xs font-medium btnColorFuc">VER
                                SERVICIOS</a>
                        </div>
                        <div class="mt-8">
                            <a href="{{ route('contactenos') }}"
                                class="px-4 py-2 border-blue-800 inline-block border-4 bg-none text-blue-800 rounded-3xl text-xs font-bold btnColorAzul">ESCRÍBENOS</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg_slides">
                <div>
                    <div class="bg-opc-rp" style="background-image: url({{ asset('fotos/slider01.png') }})"></div>
                </div>
                <div>
                    <div class="bg-opc-rp" style="background-image: url({{ asset('fotos/slider02.png') }})"></div>
                </div>
                <div>
                    <div class="bg-opc-rp" style="background-image: url({{ asset('fotos/slider03.png') }})"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="servicios textColor mt-12 md:mt-28">
        <div class="grid grid-cols-1 md:grid-cols-2  gap-8 md:gap-0 items-center">
            <div>
                <img src="{{ asset('fotos/img01.jpg') }}" class="border-home" alt="">
            </div>
            <div>
                <div class="mx-6 md:mx-0 md:ml-20">
                    <p class="text-2xl lg:text-3xl xl:text-4xl font-bold">Somos</p>
                    <p class="text-4xl lg:text-5xl xl:text-6xl font-bold">Oral Beauty</p>
                    <p class="text-justify text-lg mt-4  md:pr-12 xl:pr-60 2xl:pr-80 txtNegro">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Sint aspernatur maxime quibusdam a! Fuga dolorum magnam
                        cupiditate dolores nobis eligendi blanditiis qui, quo et doloremque quasi error maiores
                        deleniti. Facere?</p>
                </div>
                <div class="mx-6 md:mx-0 md:ml-20 mt-6">
                    <a href="{{ route('conocenos') }}"
                        class="px-3 py-3 md:px-5 inline-block md:py-3 btnColor rounded-3xl text-sm md:text-lg font-medium btnColorFuc">CONÓCENOS</a>
                </div>
            </div>
        </div>

        <div class="container mb-10 mt-28 px-0">
            <div class="mx-6 md:flex justify-between md:mx-16 items-center">
                <div class="mb-2 md:mb-0">
                    <p class="text-2xl lg:text-3xl font-bold">Conoce nuestros</p>
                    <p class="text-5xl xl:text-6xl font-bold">Servicios</p>
                </div>
                <div class="">
                    <a href="{{ route('servicios') }}"
                        class="px-3 py-3 md:px-5 inline-block md:py-3 btnColor text-white rounded-3xl text-sm md:text-lg font-medium  btnColorFuc">VER
                        SERVICIOS</a>
                </div>
            </div>
        </div>
        <div class="container container-services-home px-0">
            <div class="serviciosSlick text-white font-semibold text-lg">
                @foreach ($services as $item)
                    <div class="relative z-10">
                        <a href="{{ route('servicios.show', $item['id']) }}" class="block">
                            <div class="mx-3 relative">
                                <div class="absolute z-30  txt-servicewhite">
                                    <p>{{$item['titulo']}}</p>
                                </div>
                                <div class="img-service-home rounded-3xl" style="background-image: url({{asset($item['imagen'])}})"></div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @push('script')
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.serviciosSlick').slick({
                dots: false,
                autoplay: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 2,
                centerMode: true,
                pauseOnHover: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    }
                ]
            });
            $('.bg_slides').slick({
                arrows: false,
                dots: true,
                autoplay: true,
                pauseOnHover: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear'
            });
        </script>
    @endpush

</x-app-layout>
