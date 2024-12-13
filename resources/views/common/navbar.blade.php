<nav class="transition-transform duration-300 ease-in-out">
    <div class="bg-gray-800 py-3">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="block h-16 w-auto rounded" src="{{ asset('img/errum.jpg') }}" alt="Logo">
                    </div>
                    <div class="hidden sm:flex mx-3 space-x-4 items-center ml-auto">
                        @if(Route::currentRouteName() == 'home')
                        <a href="{{ route('home') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-xl font-medium">Home</a>
                        @else
                        <a href="{{ route('home') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Home</a>
                        @endif
                        @if(Route::currentRouteName() == 'product.index')
                        <a href="{{ route('product.index') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-xl font-medium">Products</a>
                        @else
                        <a href="{{ route('product.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Products</a>
                        @endif
                        
                        @if(Route::currentRouteName() == 'product.collection')
                        <a href="{{ route('product.collection') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-xl font-medium">Brands</a>
                        @else
                        <a href="{{ route('product.collection') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">Brands</a>
                        @endif

                        @if(Route::currentRouteName() == 'abouts')
                        <a href="{{ route('abouts') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-xl font-medium">About</a>
                        @else
                        <a href="{{ route('abouts') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-xl font-medium">About</a>
                        @endif

                        <a href="{{ route('abouts') }}" class="hover:bg-gray-700"><img style="width:40px;" src="{{ asset('img/profile.png') }}" alt=""></a>
                        
                    </div>
                </div>
                <div class="sm:hidden">
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-btn" type="button" class="text-gray-300 hover:text-white focus:outline-none focus:text-white" aria-label="Toggle menu">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                            <path fill-rule="evenodd" d="M4 6h16v2H4zm0 5h16v2H4zm0 5h16v2H4z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div id="mobile-menu" class="hidden sm:hidden bg-gray-800">
        <a href="{{ route('home') }}" class="block text-white px-4 py-2">Home</a>
        <a href="{{ route('product.index') }}" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2">Products</a>
        <a href="{{ route('product.collection') }}" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2">Brands</a>
        <a href="{{ route('abouts') }}" class="block text-gray-300 hover:bg-gray-700 hover:text-white px-4 py-2">About</a>
    </div>
</nav>

<style>
    nav {
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
    }

    @media (max-width: 640px) {
        #mobile-menu-btn:focus + #mobile-menu,
        #mobile-menu.active {
            display: block;
        }
    }
</style>

<script>
    // JavaScript to toggle the mobile menu
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('active');
    });
</script>
