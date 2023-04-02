<div class="mt-16">
    {{-- $printServide --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-9 lg:gap-8 justify-items-center">
        @foreach ($services as $item)
            <div class="w-full">
                <div class="w-full service-item">
                    <div class="rounded-3xl img-service-sv" style="background-image: url({{ asset($item['imagen']) }})">
                        <a href="{{ route('servicios.show', $item['id']) }}" class="inline-block px-4 py-2 rounded-3xl text-sm md:text-lg font-medium btnShowService">
                            VER SERVICIO
                        </a>
                    </div>
                    <div class="text-center mt-2 md:mt-5">
                        <p class="textColor font-bold text-lg md:text-xl xl:text-2xl 2xl:text-3xl">{{ $item['titulo'] }}</p>
                        <p class="textColorFucsia font-medium text-lg lg:text-base xl:text-xl 2xl:text-[1.4rem] uppercase">
                            {{ $item['categoria'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-20">
        <ul class="pagination-sv flex justify-end">
            @for ($i = 1; $i <= $totalPage; $i++)
                <li class="link"><button class="textColor {{ $pageActive == $i ? 'active' : '' }}"
                        wire:click="$set('page', {{ $i }})">{{ $i }}</button></li>
            @endfor
        </ul>
    </div>

    @push('script')
        <script>
            $(document).on('click', '.pagination-sv button', function(e) {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });
        </script>
    @endpush
</div>
