<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- <link rel="icon" href="assets/img/icon.ico"> --}}
    <title>BPKAD</title>
    
    <!-- jQuery library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,600" rel="stylesheet">

    <!-- Multi Select2 library -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- Tailwind Css -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @livewireStyles

</head>
<body>

    <div id="app">

        <section class="pl-4 pr-6 lg:pl-8 lg:pr-12 py-4 bg-white w-full border-b">
            <header class="container mx-auto flex items-center justify-between text-indigo-700">
                
                <a href="{{ url('home') }}">
                    <h1 class="flex font-semibold items-center">
                        <img src="{{ asset('logo/newbpkad0.png') }}" alt="bpkad" class="w-6 mr-1">
                        BPKAD
                    </h1>
                </a>
                
                <h3>
                    @auth
                        <h1>
                            {{ auth()->user()->name }}
                            @foreach(auth()->user()->roles as $role)
                                <span>|</span>
                                <small>{{ $role->role_name }}</small>
                            @endforeach
                        </h1>
                    @endauth
                </h3>
            </header>
        </section>
        
        <!-- semua kontene diisi dari sini -->
        {{ $slot }}
        
    </div>

    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/my-multiple-select.js') }}" defer></script>
    <script src="http://unpkg.com/turbolinks"></script>
    {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
    
    @include('sweetalert::alert')

    @livewireScripts

</body>
</html>
