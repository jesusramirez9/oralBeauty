<div class="bg-footer {{ request()->is('contactenos') ? '' : 'mt-24' }} ">
   <div class="container text-white py-6 ">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-12 justify-items-center">
        <div>
            <p>Diseñado por Katana Studio.</p>
        </div>
        <div>
            <p>© Oral Beauty. Todos los derechos reservados.</p>
        </div>
        <div>
            <div class="flex gap-4">
                <div>
                    Siguenos:
                </div>
                <div class="relative">
                    <a href="https://www.facebook.com/DentalOralBeauty" class="block btn-social" target="_blank">
                        <img src="{{asset('img/facebook-footer.png')}}" alt="" class="icon-p">
                        <img src="{{asset('img/facebook-hover.png')}}" alt="" class="hidden icon-s">
                    </a>
                </div>
                <div class="relative">
                    <a href="https://www.instagram.com/clinicaoralbeauty" class="block btn-social" target="_blank">
                        <img src="{{asset('img/instagram-footer.png')}}" class="icon-p">
                        <img src="{{asset('img/instagram-hover.png')}}" class="hidden icon-s">
                    </a>
                </div>
            </div>
        </div>
    </div>
   </div>
</div>
