{{-- filepath: resources/views/posts/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <!-- Gambar utama artikel -->
            <div class="mb-4">
                <img src="{{ $post->image }}"
                     alt="{{ $post->title }}"
                     class="img-fluid rounded shadow w-100"
                     style="max-height: 400px; object-fit: cover;">
            </div>

            <!-- Tajuk & Meta -->
            <h1 class="fw-bold text-primary mb-2">{{ $post->title }}</h1>
            <p class="text-muted small mb-4">
                <i class="fas fa-user me-1"></i> {{ $post->author ?? 'Admin' }} &nbsp; | &nbsp;
                <i class="fas fa-calendar-alt me-1"></i> {{ $post->created_at->format('d F Y') }}
            </p>

            <!-- Kandungan artikel -->
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <p class="card-text" style="line-height: 1.8; text-align: justify;">
                        {!! nl2br(e($post->content)) !!}
                    </p>
                </div>
            </div>

            <!-- Navigasi & Share -->
            <div class="d-flex justify-content-between align-items-center mt-4">
                <!-- Butang kembali -->
                <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                    ← Kembali ke Senarai Artikel
                </a>

                <!-- Butang share -->
                <div>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                       target="_blank"
                       class="btn btn-sm btn-primary me-2">
                        <i class="fab fa-facebook-f"></i> Kongsi
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($post->title) }}"
                       target="_blank"
                       class="btn btn-sm btn-info text-white">
                        <i class="fab fa-twitter"></i> Tweet
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
