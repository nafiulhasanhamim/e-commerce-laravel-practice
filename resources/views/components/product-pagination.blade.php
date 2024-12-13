<!--Product Cards-->
<div class="mb-4 p-4 bg-gray-100 border border-gray-300">

    <div id="productContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($products as $product)
            <div class="product-card">
                <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                    <div class="product-image-container">
                        <img class="product-image" src="{{ $product->img }}" alt="{{ $product->name }}">
                    </div>
                </a>
                <div class="product-details p-4">

                    <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                        <h5 class="product-title text-lg font-medium mb-2">{{ $product->name }}</h5>
                    </a>

                    <p class="product-brand text-gray-500">{{ $product->brand->name }}</p>
                    <span class="product-price font-bold text-teal-700">${{ $product->saleprice }}</span>
                    <button
                        class="add-to-cart mt-4 bg-blue-500 text-white px-4 py-2 rounded font-semibold hover:bg-blue-700" product-id="{{ $product->id }}">
                        Add to Cart
                    </button>

                </div>
            </div>

            <script src="{{ asset('script/add-to-cart.js') }}"></script>
        @endforeach




    </div>
</div>


<!-- Pagination -->





<div class="p-4 bg-gray-100 border border-gray-300">

    <div class="flex items-center justify-center mt-6">

        @if ($products->lastPage() > 1)
            <ul class="pagination flex list-style-none">

                <li
                    class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700 {{ $products->currentPage() == 1 ? 'disabled' : '' }}">
                    <a href="{{ $products->previousPageUrl() . '&sort=' . request()->query('sort') . '&per_page=' . request()->query('per_page') }}"
                        rel="prev">< </a>
                </li>

                @if ($products->currentPage() > 3)
                    <li
                        class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700">
                        <a
                            href="{{ $products->url(1) . '&sort=' . request()->query('sort') . '&per_page=' . request()->query('per_page') }}">1</a>
                    </li>
                    <li
                        class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700 disabled">
                        <span><b>...</b></span>
                    </li>
                @endif

                @for ($i = max(1, $products->currentPage() - 1); $i <= min($products->lastPage(), $products->currentPage() + 2); $i++)
                    <li
                        class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700 {{ $products->currentPage() == $i ? 'active' : '' }}">
                        <a
                            href="{{ $products->url($i) . '&sort=' . request()->query('sort') . '&per_page=' . request()->query('per_page') }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($products->currentPage() + 2 < $products->lastPage())
                    <li
                        class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700 disabled">
                        <span><b>...</b></span>
                    </li>
                @endif

                @if ($products->currentPage() < $products->lastPage() - 2)
                    <li
                        class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700">
                        <a
                            href="{{ $products->url($products->lastPage()) . '&sort=' . request()->query('sort') . '&per_page=' . request()->query('per_page') }}">{{ $products->lastPage() }}</a>
                    </li>
                @endif

                <li
                    class="pagination-item px-3 py-2 text-gray-500 rounded-md hover:bg-gray-100 hover:text-gray-700 {{ $products->currentPage() == $products->lastPage() ? 'disabled' : '' }}">
                    <a href="{{ $products->nextPageUrl() . '&sort=' . request()->query('sort') . '&per_page=' . request()->query('per_page') }}"
                        rel="next">></a>
                </li>

            </ul>
        @endif

    </div>

</div>
