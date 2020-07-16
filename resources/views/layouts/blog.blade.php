<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="keywords" content="Ключевые слова, и, фразы, через, запятую">
        <meta name="description" content="Описание контента страницы, 1-2 предложения.">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40.1 40">
                        <polygon fill="#000" points="0,0 0,40 10.1,30 20.1,40 30.1,30 "/>
                        <polygon fill="#FF0849" points="40.1,0 40.1,40 20.1,20 "/>
                    </svg>
                </div>
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