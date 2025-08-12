{{-- filepath: resources/views/blog.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navbar -->
    <x-navbar>
    <!-- Header -->
    <header class="bg-blue-600 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Selamat Datang ke Aplikasi Blog</h1>
            <p class="text-blue-100 text-lg">Baca artikel menarik, tips, dan berita terkini di sini.</p>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">

        @yield('content')

    </main>
    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            &copy; {{ date('Y') }} Aplikasi Blog. Hak cipta terpelihara.
        </div>
    </footer>
</body>
</html>
