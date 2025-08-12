<!-- Navbar -->
<nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-blue-600">APLIKASI BLOG</a>
        <div class="flex items-center space-x-2">
            <a href="{{ route('blog') }}" class="px-3 {{ request()->routeIs('blog') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Laman Utama</a>
            <a href="{{ route('about') }}" class="px-3 {{ request()->routeIs('about') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Tentang Blog</a>
            <a href="{{ route('contact') }}" class="px-3 {{ request()->routeIs('contact') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Hubungi</a>
            <a href="{{ route('posts') }}" class="px-3 {{ request()->routeIs('posts') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Blog Post</a>
            <a href="#" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Log Masuk</a>
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
