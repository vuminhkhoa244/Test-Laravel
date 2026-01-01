<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Trickcal')</title>
    
    <meta name="description" content="@yield('meta_description', 'Chuyên cung cấp các sản phẩm công nghệ chính hãng giá tốt nhất.')">
    <meta name="keywords" content="@yield('meta_keywords', 'laptop, điện thoại, trickcal, technology')">
    <link rel="canonical" href="{{ url()->current() }}" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Trickcal - Cửa hàng công nghệ hàng đầu')" />
    <meta property="og:description" content="@yield('meta_description', 'Chuyên cung cấp các sản phẩm công nghệ chính hãng giá tốt nhất.')" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="@yield('og_image', asset('images/default-share-image.jpg'))" />
    <meta property="og:site_name" content="Trickcal" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Trickcal')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/default-share-image.jpg'))">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

<body class="bg-gray-50 text-gray-800 font-sans antialiased flex flex-col min-h-screen">

    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 shadow-sm">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://styles.redditmedia.com/t5_53f4da/styles/communityIcon_3k0ozs1pnovf1.png?width=128&frame=1&auto=webp&s=a0e3131f0c06f68118a0e145dc639cdf5d214790"
                    class="h-8" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900">Trickcal</span>
            </a>

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 rounded md:p-0 {{ request()->is('/') ? 'text-blue-700 font-bold' : 'text-gray-900 hover:text-blue-700' }}">Home</a>
                    </li>
                    <li>
                        <a href="/about"
                            class="block py-2 px-3 rounded md:p-0 {{ request()->is('about') ? 'text-blue-700 font-bold' : 'text-gray-900 hover:text-blue-700' }}">About</a>
                    </li>
                    <li>
                        <a href="/products"
                            class="block py-2 px-3 rounded md:p-0 {{ request()->is('products') ? 'text-blue-700 font-bold' : 'text-gray-900 hover:text-blue-700' }}">Products</a>
                    </li>
                    <li>
                        <a href="/contact"
                            class="block py-2 px-3 rounded md:p-0 {{ request()->is('contact') ? 'text-blue-700 font-bold' : 'text-gray-900 hover:text-blue-700' }}">Contact</a>
                    </li>

                    @guest
                        <li>
                            <a href="{{ route('login') }}"
                                class="block py-2 px-3 rounded md:p-0 {{ request()->is('login') ? 'text-blue-700 font-bold' : 'text-gray-900 hover:text-blue-700' }}">Login</a>
                        </li>
                    @endguest

                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="block">
                                @csrf
                                <button type="submit"
                                    class="block w-full text-left py-2 px-3 rounded md:p-0 text-red-600 hover:text-red-800 font-medium md:hover:bg-transparent hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8 pt-24">

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-white rounded-lg shadow m-4 border-t border-gray-200">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="https://styles.redditmedia.com/t5_53f4da/styles/communityIcon_3k0ozs1pnovf1.png?width=128&frame=1&auto=webp&s=a0e3131f0c06f68118a0e145dc639cdf5d214790"
                        class="h-8" alt="Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-900">Trickcal</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                    <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
                    <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
                    <li><a href="#" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center">© 2025 <a href="/"
                    class="hover:underline">Trickcal™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    @stack('scripts')
</body>

</html>