<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">

       <link rel="stylesheet" type="text/css" href="{{asset('css/global.css')}}">
    </head>

    <body>
        @include('site.layouts._partials.top')
        @yield('conteudo')
    </body>
</html>
