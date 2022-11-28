<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>{{ $title ?? "Brasserie de Montelly" }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all" type="text/css">
</head>

<body>
    <x-header></x-header>
    <div class="wrapper">
        <main>
            {{ $slot }}
        </main>
    </div>
    <x-footer></x-footer>
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
</body>

</html>
