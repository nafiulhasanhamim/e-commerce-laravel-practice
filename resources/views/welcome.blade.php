@extends('base')

@section('title')
    <title>Errum BD</title>
@endsection

@section('content')
    <!-- Styles for carousel -->
    <style>
        html,
        body {
            margin: 0px;
            padding: 0px;
        }

        .carousel {
            position: relative;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
            margin-top: 0px;
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
        }


        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;

        }

        .carousel-open {
            display: none;
        }


        .carousel-item {
            position: absolute;
            opacity: 0;
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
            padding: 0px 0px 0px 0px;
        }

        .carousel-item img {
            display: block;
            width: 100%;
        }

        .carousel-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            cursor: pointer;
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .carousel-control.prev {
            left: 2%;
        }

        .carousel-control.next {
            right: 2%;
        }

        .carousel-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .carousel-indicators li {
            display: inline-block;
            margin: 0 5px;
        }

        .carousel-bullet {
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 35px;
        }

        .carousel-bullet:hover {
            color: #aaaaaa;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #428bca;
        }

        #title {
            width: 100%;
            position: absolute;
            padding: 0px;
            margin: 0px auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
        }
    </style>

    <!-- Carousel div -->
    <div class="carousel">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="true"
                checked="checked">
            <div class="carousel-item">
                <img src="{{ asset('img/nike_carousal.jpg') }}">
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="{{ asset('img/nike_carousal_1.jpg') }}">
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="{{ asset('img/nike_carousal_2.jpg') }}">
            </div>
            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>



    <style>
        .product-card {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 0.75rem;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            /* Stack the items vertically */
        }

        .product-image-container {
            text-align: center;
            /* Center the child elements horizontally */
        }

        .product-image {
            width: 250px;
            /* Adjust as needed */
            margin-bottom: 1rem;
            /* Add margin for spacing */
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .product-details {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center the child elements vertically */
        }

        .product-title {
            font-size: 1.125rem;
            /* 18px */
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .product-brand {
            color: #718096;
        }

        .product-price {
            color: #4a5568;
        }

        .add-to-cart {
            margin-top: auto;
            align-self: flex-end;
            background-color: #4299e1;
            color: #ffffff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            /* 6px */
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
        }

        .add-to-cart:hover {
            background-color: #2b6cb0;
        }

        .see-more-button {
            background-color: #05345b;
            color: #ffffff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            /* 6px */
            font-weight: 600;
            transition: background-color 0.3s ease-in-out;
            display: inline-block;
            /* Ensure the button is not a block-level element */
        }

        .see-more-button:hover {
            background-color: #2b6cb0;
        }
    </style>



    <div class="container mx-auto px-4 sm:px-8 lg:px-12 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">

        <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-4xl font-bold mb-1 border-b mt-4 pt-2 pb-2">
            Best
            Selling
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="{{ asset('img/air-force-1.png') }}" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Nike Air Force 1 '07</h5>
                <p class="product-brand text-gray-500">Nike</p>
                <span class="product-price text-gray-700">$115.00</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>


        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>


        <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-lg font-semibold mb-4">
            <button class="see-more-button mx-auto">See More</button>
        </div>

        <div
            class="sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-4xl font-semibold mb-1 border-b mt-4 pt-2 pb-2">
            New
            Arrivals
        </div>


        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="product-card">
            <div class="product-image-container">
                <img class="product-image" src="https://freesvg.org/img/Machovka_Shoes.png" alt="Product 1">
            </div>
            <div class="product-details p-4">
                <h5 class="product-title text-lg font-medium mb-2">Product Name 1</h5>
                <p class="product-brand text-gray-500">Brand Name</p>
                <span class="product-price text-gray-700">$99.99</span>
                <button class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700">
                    Add
                    to Cart
                </button>
            </div>
        </div>

        <div class="sm:col-span-2 md:col-span-3 lg:col-span-4 text-center text-lg font-semibold mb-4">
            <button class="see-more-button mx-auto">See More</button>
        </div>


    </div>
@endsection
