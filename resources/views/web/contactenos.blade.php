<x-app-layout>
    <div class="textColor">
        <div class="container text-center">
            <p class="font-bold text-xl lg:text-4xl 2xl:text-4xl">Comunícate con</p>
            <p class="font-bold text-3xl lg:text-6xl 2xl:text-6xl">Nosotros</p>
        </div>
        <div class="container mt-8 md:mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-12 2xl:gap-28 mx-6 md:mx-0">
                <div>
                    <p class="font-bold text-xl lg:text-4xl 2xl:text-4xl">Manténte en contacto</p>
                    <p class="mt-2 txtNegro">Puedes comunicarte con nosotros mediante el siguiente formulario o con
                        nuestros
                        datos de contacto.</p>
                    <div class="mt-8">
                        <p class="font-semibold text-xl lg:text-3xl 2xl:text-3xl">Sede Santa Anita</p>
                        <p class="text-sm text-justify lg:text-lg txtNegro">Estamos en Avenida Eucaliptos 1236 A frente
                            a la Municipalidad de Santa Anita 3er. Piso referencia 1er piso está Osinerming. Teléfono: 972125825</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-semibold text-xl lg:text-3xl 2xl:text-3xl">Sede SJL</p>
                        <p class="text-sm text-justify lg:text-lg txtNegro">Estamos en Av. Gran Chimú 745 Urb. Zárate
                            SJL. Telefono: 902788041</p>
                    </div>
                    <div class="mt-4">
                        <p class="font-semibold text-xl lg:text-3xl 2xl:text-3xl">Central Telefónica</p>
                        <p class="text-sm text-justify lg:text-lg txtNegro">01 754 5442 / +51 976 542 364</p>
                    </div>
                </div>
                <div>
                    <form id="formularios" action="{{ route('contacto.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                            <div class="focust_red">
                                <p class="ml-4 lg:text-lg label-form">Nombre</p>
                                <input name="name"
                                    class="w-full borderAzul borderFucsia rounded-xl  text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                                    type="text" />
                                @error('name')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                            <div class="focust_red">
                                <p class="ml-4 lg:text-lg label-form">Apellidos</p>
                                <input name="apellidos"
                                    class="w-full   borderAzul borderFucsia rounded-xl text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                                    type="text" />
                                @error('Apellidos')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                            <div class="focust_red">
                                <p class="ml-4 lg:text-lg label-form">Teléfono / Celular</p>
                                <input name="celular"
                                    class="borderAzul borderFucsia rounded-xl w-full  text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"
                                    type="text" onkeypress="validateOnlyNumber(event)" maxlength="11"/>
                                @error('celular')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                            <div class="focust_red">
                                <p class="ml-4 lg:text-lg label-form">Correo Electrónico</p>
                                <input name="correo"
                                    class="borderAzul borderFucsia rounded-xl w-full  text-gray-900 mt-2 p-3  focus:outline-none focus:shadow-outline"
                                    type="email" />
                                @error('correo')
                                    <p><strong>{{ $message }}</strong></p>
                                @enderror
                            </div>
                        </div>
                        <div class="my-4 focust_red">
                            <p class="ml-4 lg:text-lg label-form">Servicios</p>
                            <select name="servicio" id="servicio"
                                class="borderAzul borderFucsia rounded-xl w-full mt-2 p-3  focus:outline-none focus:shadow-outline">
                                <option value="volvo">BLANQUEAMIENTO</option>
                                <option value="saab">ORTODONCIA</option>
                                <option value="mercedes">CIRUGÍA</option>
                                <option value="audi">IMPLANTE</option>
                            </select>
                        </div>
                        <div class="my-4 focust_red">
                            <p class="ml-4 lg:text-lg label-form">¿Alguna duda o consulta?</p>
                            <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..."
                                class="borderAzul borderFucsia rounded-xl w-full h-32  text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                            @error('mensaje')
                                <p><strong>{{ $message }}</strong></p>
                            @enderror
                        </div>
                        <div class="my-2 text-center md:text-right">
                            <button type="submit"
                                class="px-14 py-2 bg-colofuc text-white  rounded-3xl text-lg font-medium">
                                ENVIAR
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <div class="container">
                <p class="font-bold text-xl lg:text-4xl 2xl:text-4xl">Sede Principal</p>
            </div>
            <div class="mapita mt-6 relative">
                {{-- <div class="bg_mapa absolute">

                </div> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.2625944014076!2d-77.00117709999999!3d-12.025434299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f052dd7771%3A0x1ca9bb98c9f4755c!2sAv.%20Gran%20Chimu%20745%2C%20San%20Juan%20de%20Lurigancho%2015401!5e0!3m2!1ses-419!2spe!4v1679894475975!5m2!1ses-419!2spe"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>

    </div>
    @push('script')
        <script>
            $(function() {

                $(document).on('focus', '.input_1', foco_input);
                $('input_1').focus();
            });

            function foco_input() {
                console.log('Input: ¡Me focuseaste, maldito seas!');
                const el = document.querySelector('.jstxt');
                el.classList.add('textColorFucsia');
            }

            function validateOnlyNumber(evt) {
                var theEvent = evt || window.event;

                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]|\./;
                if (!regex.test(key)) {
                    theEvent.returnValue = false;
                    if (theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>
    @endpush
</x-app-layout>
