<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="keywords" content="Ключевые слова, и, фразы, через, запятую">
        <meta name="description" content="Описание контента страницы, 1-2 предложения.">

        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <div class="container">
                HEADER
            </div>
        </header>
        <main class="main container">
            <section class="section">
                @yield('content')
            </section>
            <aside class="aside">
                @yield('sidebar') SIDEBAR
            </aside>
        </main>
        <footer class="footer">
            <div class="container">
                <p class="copyright">© 2015 Copyright</p>
            </div>
        </footer>
    </body>
</html>