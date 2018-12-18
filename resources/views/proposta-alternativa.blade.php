<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EFG Consulting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ mix('alternativa/css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <main-nav></main-nav>
            <home></home>
        </div>
        <script src="{{ mix('alternativa/js/app.js') }}"></script>
    </body>
</html>
