<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- icons -->
    <link rel="shortcut icon" href="{{url('images/logo.png')}}" sizes="32x32" type="image/x-icon">
	<link rel="icon" type="image/png" href="{{url('images/logo.png')}}" sizes="32x32">
    <title>IndoTernak</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('')}}vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div id="app">
        
    <livewire:navbar />

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    
</body>
</html>
