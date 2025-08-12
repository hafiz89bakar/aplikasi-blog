@extends('layouts.app')

@section('content')
<div class="grid md:grid-cols-3 gap-8">
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition">
        <h2 class="text-xl font-semibold mb-2">Tentang Aplikasi Blog</h2>
        <p class="text-gray-600 mb-4">Aplikasi Blog ini adalah platform untuk berkongsi artikel, tips, dan berita terkini.</p>
        <p class="text-gray-600 mb-4">Kami menyediakan pelbagai kategori artikel yang menarik dan berguna untuk pembaca.</p>
        <p class="text-gray-600 mb-4">Jika anda mempunyai sebarang pertanyaan atau ingin berkongsi artikel, sila hubungi kami melalui halaman kontak.</p>
        <a href="{{ route('blog') }}" class="text-blue-600 hover:underline">Kembali ke Laman Utama</a>
    </div>
@endsection
