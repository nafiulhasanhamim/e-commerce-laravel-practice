<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>ErrumBD</title>
    <!-- @stack('cdn') -->
     <link href="{{url('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{url('css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{url('css/jquery.simpleLens.css')}}">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{url('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{url('css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{url('css/theme-color/default-theme.css')}}" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="{{url('css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">
    
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <!-- Main style sheet -->
    <link href="{{url('css/style.css')}}" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

     <link rel="shortcut icon" href="{{URL('images/errum.jpg')}}" type="image/x-icon">

  </head>

<body>
@include('common_layouts.loader')
@include('common_layouts.scrolltop')
@include('common_layouts.header')
@yield('content')

@include('common_layouts.footer')
@include('common_layouts.script')

</body>
  </html>