<html>
    <head>
        <title>{{ $title ?? 'Brasserie de Montelly' }}</title>
    </head>
    <body>
        @include('header')
        <div class="wrapper">
            @yield('content')
        </div>
        @include('footer')
    </body>
</html>