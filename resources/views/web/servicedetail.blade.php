<x-app-layout>
    <div class="container mt-8 md:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12  justify-items-center ">
            <div>
                <div>
                    <div class="mb-2">
                        <a href="{{ route('servicios') }}" class="inline-block font-bold"><i class="fa-solid fa-chevron-left"></i> Servicios</a>
                    </div>
                    <p class="font-bold text-3xl lg:text-6xl 2xl:text-6xl textColor">{{$service['titulo']}}</p>
                    <p class="font-bold text-xl lg:text-2xl uppercase textColorFucsia">{{$service['categoria']}}</p>
                    <p class="txtNegro text-justify mt-6">{{$service['text1']}}</p>
                    @if ($service['text2'] != null)
                        <p class="txtNegro text-justify mt-3">{{$service['text2']}}</p>
                    @endif
                    @if (isset($service['subservicios']) && $service['subservicios'] != null)
                        <ul class="mt-4 subService-list">
                            @foreach ($service['subservicios'] as $item)
                            <li class="textColorFucsia font-bold mb-3">{{$item['titulo']}}
                                <ul class="mt-2">
                                    <li class="txtNegro font-normal text-justify">{{$item['text1']}}</li>
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="mt-6">
                    <a href="{{ route('contactenos') }}"
                                class=" px-4 py-2 xl:px-7 inline-block xl:py-3 focust_red_soli border-2 bg-none  rounded-4xl text-sm lg:text-lg font-bold ">SOLICITAR INFORMACIÓN</a>
                </div>
            </div>
            <div>
                <img src="{{ asset($service['imagen']) }}" class="w-full md:rounded-3xl" alt="">
            </div>
        </div>

    </div>
</x-app-layout>
