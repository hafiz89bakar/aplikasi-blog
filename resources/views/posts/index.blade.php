{{-- filepath: resources/views/posts.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="mb-8 text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-blue-700 mb-2">Senarai Artikel</h1>
    <p class="text-gray-600">Dapatkan artikel terkini, tips, dan info menarik di sini.</p>
</div>
<div class="grid md:grid-cols-1 gap-8">
    <!-- Contoh Post 1 -->
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <img src="https://picsum.photos/400/200?random=11" alt="Gambar Post" class="rounded mb-4 w-full h-40 object-cover">
        <h2 class="text-xl font-semibold mb-2">Cara Menulis Blog yang Menarik</h2>
        <p class="text-gray-600 mb-4">Tips dan teknik untuk menghasilkan blog yang memikat pembaca dan mudah difahami.</p>
        <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
    </div>
    <!-- Contoh Post 2 -->
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <img src="https://picsum.photos/400/200?random=12" alt="Gambar Post" class="rounded mb-4 w-full h-40 object-cover">
        <h2 class="text-xl font-semibold mb-2">Teknologi Terkini 2025</h2>
        <p class="text-gray-600 mb-4">Ikuti perkembangan teknologi terbaru yang sedang mengubah dunia digital masa kini.</p>
        <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
    </div>
    <!-- Contoh Post 3 -->
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <img src="https://picsum.photos/400/200?random=13" alt="Gambar Post" class="rounded mb-4 w-full h-40 object-cover">
        <h2 class="text-xl font-semibold mb-2">Inspirasi Gaya Hidup Sihat</h2>
        <p class="text-gray-600 mb-4">Panduan dan inspirasi untuk menjalani gaya hidup sihat dan seimbang setiap hari.</p>
        <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
    </div>
</div>
@endsection
