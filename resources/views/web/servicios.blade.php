<x-app-layout>
    <div class="textColor">
        <div class="container text-center">
            <p class="font-bold text-2xl md:text-4xl 2xl:text-5xl">Nuestros</p>
            <p class="font-bold text-4xl md:text-6xl 2xl:text-7xl">Servicios</p>
            <p class="text-center txtNegro text-base lg:text-xl font-medium px-6 mt-6">Contamos con un gran equipo de profesionales especializados en </p>
            <p class="text-center txtNegro text-base lg:text-xl font-medium px-6">los siguientes servicios.</p>
        </div>
        
        <div class="container">
            
                @livewire('service-detail')
        </div>
    </div>
    </x-app-layout>