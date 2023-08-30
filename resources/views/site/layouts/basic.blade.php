<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/basic_style.css') }}">
        
    </head>

    <body>
        @include('site.layouts.partials.header')
        @yield('content')
    </body>
</html>