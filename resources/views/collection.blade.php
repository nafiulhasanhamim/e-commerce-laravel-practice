@extends('base')

@section('title')
    <title>Brands</title>
@endsection

<style>
  .bg-gray-100 {
    background-image: url('{{ asset('img/brand_bg_1.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.9;
    background-attachment: fixed; /* Add this line to make the background fixed */
  }

  .grid-container {
    position: relative; /* Add this line to create a stacking context */
    z-index: 1; /* Ensure the content stays on top of the background */
  }

  .logo {
    transition: background-color 0.3s ease-in-out;
    opacity: 1; /* Set opacity to 100% for the brand logos */
  }

  .logo:hover {
    background-color: #000000;
  }

  .logo img {
    transition: transform 0.3s ease-in-out;
  }

  .logo:hover img {
    transform: scale(1.04);
    filter: invert(1);
  }
</style>

@section('content')
<div class="bg-gray-100 py-10 md:pt-24">
    <div class="grid-container grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 md:gap-20 m-4 md:m-20">
        @foreach($amago_brands as $brands)
            <div class="logo bg-white p-4 rounded-md flex items-center justify-center">
                <img src="{{asset($brands->url)}}" alt="Brand 1 Logo" class="max-w-full h-200 rounded-md">
            </div>
        @endforeach

    </div>
</div>

@endsection
