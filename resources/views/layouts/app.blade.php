<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='MONSIEUR QUENTIN SAR'>
        <meta name='subject' content="MONSIEUR QUENTIN SAR">

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#e3b64f'>

        <link rel='shortcut icon' type='image/png' href='{{ asset('img/logo.png') }}'>
        <link rel="apple-touch-icon" href="{{ asset('img/logo.png') }}" />

        <title>ERP Quentin Sar</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>
{{--         @include('layouts.header')--}}
         @yield('content')
{{--         @include('layouts.footer')--}}
{{--         @yield('before')--}}
    </body>
</html>
