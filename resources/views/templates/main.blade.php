<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="antialiased">
    <header></header>
    @if (Route::has('login'))
        <div class="container hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm  underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm  underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm  underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </header>

    <div class="container row">
        <div class="col-2 d-flex" style="border-right: 1px black solid; flex-direction: column">
            <h3>Menu</h3>
            <a href="/accueils">Accueil</a>
            <a href="/articles">Article</a>
            <a href="/backoffices">Backoffice</a>
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>






    <script src="{{ asset('js/app.js') }} "></script>
</body>

</html>
