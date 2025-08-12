{{-- filepath: resources/views/posts.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="mb-8 text-center">
    <h1 class="text-3xl md:text-4xl font-bold text-blue-700 mb-2">Senarai Artikel</h1>
    <p class="text-gray-600">Dapatkan artikel terkini, tips, dan info menarik di sini.</p>
</div>
<div class="grid md:grid-cols-2 gap-8">
    @foreach ($posts as $post)

    <!-- Contoh Post 1 -->
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <img src="{{  $post->image }}" alt="Gambar Post" class="rounded mb-4 w-full h-40 object-cover">
        <h2 class="text-xl font-semibold mb-2">{{ $post->title}}</h2>
        <p class="text-gray-600 mb-4">{{ $post->content }}</p>
        <a href="#" class="text-blue-600 hover:underline">Baca Selanjutnya</a>
    </div>
    @endforeach

</div>
@endsection
