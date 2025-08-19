{{-- filepath: resources/views/posts/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-primary mb-0">Senarai Artikel</h1>
            <p class="text-muted mb-0">Dapatkan artikel terkini, tips, dan info menarik di sini.</p>
        </div>
        <!-- Button Tambah Artikel -->
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <i class="fas fa-plus-circle me-1"></i> Tambah Artikel
        </a>
    </div>

    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <!-- Artikel Grid -->
    <div class="row g-4">
        @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="card h-100 shadow-sm border-0 hover-shadow">
                <!-- Gambar Artikel -->
                <img src="{{ $post->image }}" class="card-img-top" alt="Gambar {{ $post->title }}" style="height: 220px; object-fit: cover;">

                <div class="card-body d-flex flex-column">
                    <!-- Tajuk -->
                    <h5 class="card-title fw-bold text-dark">{{ $post->title }}</h5>

                    <!-- Papar Kategori -->
                    @if($post->category)
                        <span class="badge bg-info text-dark mb-2">
                            <i class="fas fa-tag me-1"></i> {{ $post->category }}
                        </span>
                    @endif

                    <!-- Content (ringkasan sahaja) -->
                    <p class="card-text text-muted">
                        {{ Str::limit($post->content, 120, '...') }}
                    </p>

                    <!-- Author & Tarikh -->
                    <div class="d-flex justify-content-between align-items-center mt-auto mb-3">
                        <small class="text-muted">
                            <i class="fas fa-user me-1"></i> {{ $post->author ?? 'Admin' }} - {{ $post->author_info ?? 'Penulis' }}
                        </small>
                        <small class="text-muted">
                            <i class="fas fa-calendar-alt me-1"></i> {{ $post->created_at->format('d M Y') }}
                        </small>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-sm btn-warning fw-bold">
                            <i class="fas fa-book-open me-1"></i> Baca Selanjutnya
                        </a>
                        <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-sm btn-primary fw-bold">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
