{{-- filepath: resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-lg shadow p-8">
    <h2 class="text-2xl font-bold mb-4 text-blue-700">Hubungi Kami</h2>
    <p class="text-gray-600 mb-6">
        Ada pertanyaan, cadangan, atau ingin berkongsi artikel? Sila isi borang di bawah atau email kami di <a href="mailto:admin@aplikasiblog.com" class="text-blue-600 hover:underline">admin@aplikasiblog.com</a>.
    </p>
    <form method="POST" action="#">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-2" for="mesej">Mesej</label>
            <textarea id="mesej" name="mesej" rows="4" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Hantar</button>
@endsection
