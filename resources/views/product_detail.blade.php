@extends('base')

@section('title')
    <title>{{ $footwear->name }}</title>
@endsection

@section('content')
    {{--
    <h1>{{ $footwear->name }}</h1>
    <h1>{{ $footwear->mrp }}</h1>
    <h1>{{ $footwear->saleprice }}</h1>
    <h1>{{ $footwear->qty }}</h1>
    <h1>{{ $brand_name->name }}</h1>
    <h1>{{ $footwear->description }}</h1>
    <h1>{{ $footwear->size }}</h1>
    <h1>{{ $footwear->color }}</h1>
    <h1>{{ $footwear->category }}</h1>
    --}}

    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md flex">

        <div class="w-1/2">
            <div class="slick-carousel">
                <img src="{{asset('img/air-force-1.png')}}" alt="Footwear Image 1" class="max-w-full h-auto">
                <img src="{{asset('img/air-force-1.png')}}" alt="Footwear Image 2" class="max-w-full h-auto">
            </div>
        </div>

        <div class="w-1/2 p-6">
            <h2 class="text-xl font-bold mb-2">{{ $footwear->name }}</h2>
            <p class="text-gray-600 mb-4">Brand: {{ $brand_name->name }}</p>
            <p class="text-gray-600 mb-4">Category: {{ $footwear->category }}</p>

            <div class="mb-4">
                <strong class="block mb-2">Available Colors:</strong>
                <div class="inline-block bg-red-500 w-6 h-6 mr-2"></div>
                <div class="inline-block bg-green-500 w-6 h-6"></div>
                <!-- Add more color options as needed -->
            </div>

            <div class="mb-4">
                <strong class="block mb-2">Available Sizes:</strong>
                <div class="flex space-x-2">
                    <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded">7</button>
                    <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded">8</button>
                    <button class="bg-gray-300 text-gray-700 py-2 px-4 rounded">9</button>
                    <!-- Add more size buttons as needed -->
                </div>
            </div>

            <div class="mb-4">
                <strong class="block mb-2">Quantity:</strong>
                <input type="number" class="border p-2 w-16" value="1" min="1">
            </div>

            <p class="text-gray-600 mb-4">৳: {{ $footwear->saleprice }} BDT</p>

            <!-- Stock Status -->
            <div class="mb-4">
                <strong class="block mb-2">Stock Status:</strong>
                @if ($footwear->qty > 0)
                    <p class="text-green-500 font-bold">In Stock</p>
                @else
                    <p class="text-red-500 font-bold">Out of Stock</p>
                @endif
            </div>

            <button
                class="add-to-cart bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline" product-id="{{ $footwear->id }}">
                Add to Cart
            </button>
        </div>

    </div>

    <div class="container mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
        <h3 class="text-lg font-bold mb-2">Description:</h3>
        <p class="text-gray-700">{{ $footwear->description }}</p>
        <!-- Add more description content as needed -->
    </div>
     <script src="{{ asset('script/add-to-cart.js') }}"></script>
@endsection
