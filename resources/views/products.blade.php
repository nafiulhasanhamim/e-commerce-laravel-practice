@extends('base')

@section('title')
    <title>Products</title>
@endsection

@section('content')
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
            background-color: #324256;
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

        .product-page {
            padding: 0px 0px 0px 0px;
        }

        .pagination {
            display: flex;
            list-style: none;
        }

        .pagination-item {
            margin: 0 3px;
            padding: 6px 8px;
            font-size: 12px;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 3px;
            color: #555;
            transition: background-color 0.3s, color 0.3s;
            cursor: pointer;

        }

        .pagination-item:hover {
            background-color: #aba6a6;
            color: #333;
        }

        .pagination-item a {
            margin: 0px;
            display: block;
            width: 200%;
            height: 150%;
        }

        .pagination-item.active {
            background-color: #1f2937;
            /* Dark denim blue */
            color: #fff;
            border-color: #1a4b9e;
        }

        .pagination-item.disabled {
            pointer-events: none;
            background-color: #ddd;
            color: #888;
            border-color: #ddd;
        }
    </style>



    <!-- Main body = sidebar + filtering + products & pagination -->



    <div class="lg:flex product-page">
        <!-- Sidebar (hidden on small and medium screens) -->
        <aside class="lg:w-1/6 hidden lg:block bg-gray-800  text-white p-4">

            <h3 class="text-lg font-bold mb-4">Shop Shoes</h3>

            <h4 class="text-base font-semibold mb-2">Categories</h4>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline">Sneakers</a></li>
                <li><a href="#" class="hover:underline">Boots</a></li>
                <li><a href="#" class="hover:underline">Sandals</a></li>
                <li><a href="#" class="hover:underline">Loafers</a></li>
                <li><a href="#" class="hover:underline">Dress Shoes</a></li>
                <li><a href="#" class="hover:underline">Sports Shoes</a></li>
            </ul>

            <h4 class="text-base font-semibold mt-4 mb-2">Price Range</h4>
            <div class="flex items-center">
                <input type="text" class="w-full border px-2 py-1 rounded-md mr-2" placeholder="Min Price">
                <span class="mx-2">-</span>
                <input type="text" class="w-full border px-2 py-1 rounded-md" placeholder="Max Price">
            </div>
            <button id="filter-by-price"
                class="mt-4 mb-2 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">Filter
                by Price</button>

            <h4 class="text-base font-semibold mt-4 mb-2">Brand</h4>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline">Nike</a></li>
                <li><a href="#" class="hover:underline">Adidas</a></li>
                <li><a href="#" class="hover:underline">Puma</a></li>
                <li><a href="#" class="hover:underline">Vans</a></li>
                <li><a href="#" class="hover:underline">Doc Martens</a></li>
                <li><a href="#" class="hover:underline">All Brands</a></li>
            </ul>

            <h4 class="text-base font-semibold mt-4 mb-2">Size</h4>
            <ul class="grid grid-cols-3 gap-2">
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">5</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">6</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">7</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">8</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">9</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">10</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">11</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">12</a></li>
                <li><a href="#" class="text-center border px-1 py-1 m-1 rounded hover:bg-gray-600">13</a></li>
            </ul>

        </aside>

        <!-- Main Content -->
        <main class="lg:w-5/6 w-full p-4 pt-10">
            <!-- Filtering section -->
            <div class="flex flex-wrap lg:justify-between sm:content-center mb-4 p-4 bg-gray-100 border border-gray-300">

                <div class="self-center justify-self-center">
                    <h2 class="text-2xl font-bold">Products</h2>
                </div>

                <div>
                    <!-- Sort by options filtering -->
                    <div class="flex mt-2">
                        <label class="ml-4 text-gray-700 px-4 py-2 rounded font-semibold">
                            Sort By:
                        </label>
                        <select class="border rounded-md sm:mb-0" onchange="handleUserRequest(this.value, null)">
                            <option value="">Sort by</option>
                            <option value="price-asc">Price: Low to High</option>
                            <option value="price-desc">Price: High to Low</option>
                            <option value="name-asc">Name: A to Z</option>
                            <option value="name-desc">Name: Z to A</option>
                        </select>
                    </div>

                    <!-- Select number of items per page -->
                    <div class="mt-2">
                        <label class="ml-4 text-gray-700 px-4 py-2 rounded font-semibold">
                            Items per Page:
                        </label>
                        <select class=" border rounded-md sm:mb-0" onchange="handleUserRequest(null, this.value)">
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="60">60</option>
                            <option value="80">80</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Product cards & Pagination -->

            @include('components.product-pagination')

            <script>
                function handleUserRequest(selectedSort, perPage) {
                    const currentPage = new URLSearchParams(window.location.search).get('page') || 1;
                    // Construct the URL with all parameters, including existing ones
                    const url = new URL(window.location.href);

                    if (selectedSort !== null) {
                        url.searchParams.set('sort', selectedSort);
                    }

                    if (perPage !== null) {
                        url.searchParams.set('per_page', perPage);
                    }

                    url.searchParams.set('pag', currentPage);
                    window.location.href = url.toString();
                }



                window.addEventListener('load', function() {
                    const selectedSort = new URLSearchParams(window.location.search).get('sort');
                    const sortOption = document.querySelector(`option[value="${selectedSort}"]`);
                    if (sortOption) {
                        sortOption.selected = true;
                    }

                    const selectedPerPage = new URLSearchParams(window.location.search).get('per_page');
                    const perPageOption = document.querySelector(`option[value="${selectedPerPage}"]`);
                    if (perPageOption) {
                        perPageOption.selected = true;
                    }
                });
            </script>


        </main>
    </div>
@endsection
