<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    @include('common.common_head')
</head>
<body>
@include('common.navbar')
<div style="padding-top:88px"></div>
@yield('content')
@include('common.footer')
</body>
</html>
