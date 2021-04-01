<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <header>
            <div class="container">

                <div class="row justify-content-md-center">

                    <div class="col-md-12">

                        <h1>{{ strtoupper(config('app.name', 'Laravel')) }}</h1>

                    </div>

                </div>

            </div>

        </header>

        <main class="py-4">
            @yield('content')
        </main>

    </body>
</html>
