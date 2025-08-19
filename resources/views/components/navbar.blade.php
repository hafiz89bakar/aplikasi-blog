{{-- <!-- Navbar -->
<nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-blue-600">APLIKASI BLOG</a>
        <div class="flex items-center space-x-2">
            <a href="{{ route('blog') }}" class="px-3 {{ request()->routeIs('blog') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Laman Utama</a>
            <a href="{{ route('about') }}" class="px-3 {{ request()->routeIs('about') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Tentang Blog</a>
            <a href="{{ route('contact') }}" class="px-3 {{ request()->routeIs('contact') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Hubungi</a>
            <a href="{{ route('posts.index') }}" class="px-3 {{ request()->routeIs('posts') ? 'text-blue-600 font-bold' : 'text-gray-700 hover:text-blue-600' }}">Blog Post</a>
            <a href="#" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Log Masuk</a>
        </div>
    </div>
</nav> --}}
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">AplikasiBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="text-light"><i class="fas fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('welcome') ? 'text-warning fw-bold' : 'text-light' }}"
                href="{{ route('welcome') }}">
                Utama
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about') ? 'text-warning fw-bold' : 'text-light' }}"
                href="{{ route('about') }}">
                Tentang Blog
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact') ? 'text-warning fw-bold' : 'text-light' }}"
                href="{{ route('contact') }}">
                Hubungi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('posts.index') ? 'text-warning fw-bold' : 'text-light' }}"
                href="{{ route('posts.index') }}">
                Blog Post
                </a>
            </li>
        </ul>
            <!-- Button Log Masuk -->
            <a href="#" class="btn btn-warning fw-bold px-4">
                <i class="fas fa-sign-in-alt me-1"></i> Log Masuk
            </a>
        </div>
    </div>
</nav>

