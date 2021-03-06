<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DC Visitor') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mx-auto" href="{{ url('/home') }}">
                    <img src="/assets/citranet.png" alt="" width="100" height="30" >
                </a>
            </div>         
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
