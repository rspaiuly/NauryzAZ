<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-direction" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="">
</head>
<body>
    @yield('header')

    @yield('content')

    @yield('footer')

    @yield('modals')

    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

    @yield('script')
</body>
</html>
