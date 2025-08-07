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
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-blue-600">APLIKASI BLOG</a>
            <div>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3">Home</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3">About</a>
                <a href="#" class="text-gray-700 hover:text-blue-600 px-3">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="bg-blue-600 py-12">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Selamat Datang ke Aplikasi Blog</h1>
            <p class="text-blue-100 text-lg">Baca artikel menarik, tips, dan berita terkini di sini.</p>
        </div>
    </header>
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10">
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Artikel 1 -->
            <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg?auto=compress&w=400&h=200&fit=crop" alt="Gambar Artikel" class="rounded mb-4 w-full h-40 object-cover">
                <h2 class="text-xl font-semibold mb-2">Artikel 1</h2>
                <p class="text-gray-600 mb-4">Ringkasan artikel pertama. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
            </div>
            <!-- Artikel 2 -->
            <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
                <img src="https://fastly.picsum.photos/id/606/400/200.jpg?hmac=tgS-mGW4dn4XAKvPQIUOCSESem_a6g8V72_kHP62hrw" alt="Gambar Artikel" class="rounded mb-4 w-full h-40 object-cover">
                <h2 class="text-xl font-semibold mb-2">Artikel 2</h2>
                <p class="text-gray-600 mb-4">Ringkasan artikel kedua. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
            </div>
            <!-- Artikel 3 -->
            <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
                <img src="{{ url('images/artikel3.jpg') }}" alt="Gambar Artikel" class="rounded mb-4 w-full h-40 object-cover">
                <h2 class="text-xl font-semibold mb-2">Artikel 3</h2>
                <p class="text-gray-600 mb-4">Ringkasan artikel ketiga. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-6">
        <div class="container mx-auto px-4 text-center text-gray-500">
            &copy; {{ date('Y') }} Aplikasi Blog. Hak cipta terpelihara.
        </div>
    </footer>
</body>
</html>
