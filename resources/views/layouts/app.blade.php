<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Oral Beauty</title>

    <!-- Fonts -->
    <link rel="shortcut icon" href="" type="image/x-icon">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- fontawesone --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @stack('link')
    @livewireStyles
    <script src="{{ mix('js/app.js') }}" defer></script>
     {{-- jquery --}}
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans">
    <div class="min-h-screen">
        <div class="{{ request()->is('/') ? 'absolute top-0 z-infite w-full' : '' }}">

            @livewire('navigation')
        </div>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <div>
        @livewire('footer')
       </div>



    </div>

    @stack('modals')

    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    @stack('script')
    <script>
        function dropdown() {
            return {
                open: false,
                show() {
                    if (this.open) {
                        //se cierra el menu
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = "auto"
                    } else {
                        //Esta abriendo el menu
                        this.open = true;
                        document.getElementsByTagName('html')[0].style.overflow = "hidden"
                    }

                },
                close() {
                    this.open = false;
                    document.getElementsByTagName('html')[0].style.overflow = "auto"
                }
            }
        }
    </script>
</body>

</html>
