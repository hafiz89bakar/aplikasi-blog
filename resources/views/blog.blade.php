@extends('layouts.app')
@section('content')
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
        @endsection
