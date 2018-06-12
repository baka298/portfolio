<html>
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('./css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>App Name - @yield('title')</title>
    </head>
    <body>

        
        @include('layouts.nav')

        @yield('content')
        

        @include('layouts.footer')
        <script src="./js/app.js"></script>
    </body>
</html>