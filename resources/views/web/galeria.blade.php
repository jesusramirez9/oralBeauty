<x-app-layout>
    <div class="textColor ">
        <div class="container text-center">
            <p class="font-bold text-3xl lg:text-4xl 2xl:text-7xl">Galería</p>
        </div>

        <div class="container mt-12 lg:mt-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 xl:gap-12">
                @for($i=1; $i<10; $i++)
                 
                <div class="hvr-grow">
                    <a href="#ex{{$i}}" rel="modal:open">
                        <img src="{{ asset("galery/{$i}.jpg") }}" class="rounded-3xl" alt="">
                    </a>
                </div>
                @endfor
            </div>
        </div>
        <!-- Modal HTML embedded directly into document -->
        @for($i=1; $i<10; $i++)
<div id="ex{{$i}}" class="modal modal_jquery">
    <img src="{{ asset("galery/{$i}.jpg") }}" class="" alt="">
    <a href="#" rel="modal:close"></a>
</div>
@endfor
    </div>

    @push('script')
        <script>
            const modal1 = document.querySelector('.main-modal1');
            const closeButton1 = document.querySelectorAll('.modal-close1');
      
            const modalClose1 = () => {
                modal1.classList.remove('fadeIn');
                modal1.classList.add('fadeOut');
                setTimeout(() => {
                    modal1.style.display = 'none';
                }, 500);
            }

            const 1openModal = () => {
                modal1.classList.remove('fadeOut');
                modal1.classList.add('fadeIn');
                modal1.style.display = 'flex';
            }

            for (let i = 0; i < closeButton1.length; i++) {

                const elements = closeButton1[i];

                elements.onclick = (e) => modalClose1();

                modal1.style.display = 'none';

                window.onclick = function(event) {
                    if (event.target == modal1) modalClose1();
                }
            }
        </script>
    @endpush
</x-app-layout>
