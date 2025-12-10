<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="font-bold text-xl">MyApp</a>
            <div class="space-x-4">
                <a href="/" class="hover:underline">Home</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/contact" class="hover:underline">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-10">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white text-center py-4 mt-10">
        &copy; 2025 My Laravel App
    </footer>

</body>
</html>