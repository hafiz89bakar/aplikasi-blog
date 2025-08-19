{{-- filepath: resources/views/posts/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container my-5">
    <!-- Header Page -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary mb-0">Edit Artikel</h1>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <!-- Form Edit -->
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('posts.update', $post->slug) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Tajuk Artikel</label>
                    <input type="text" name="title" id="title"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title', $post->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Slug -->
                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" id="slug"
                           class="form-control @error('slug') is-invalid @enderror"
                           value="{{ old('slug', $post->slug) }}" required>
                    @error('slug')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label for="content" class="form-label">Kandungan</label>
                    <textarea name="content" id="content" rows="5"
                              class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $post->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Author -->
                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" name="author" id="author"
                           class="form-control @error('author') is-invalid @enderror"
                           value="{{ old('author', $post->author) }}" required>
                    @error('author')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Author Info -->
                <div class="mb-3">
                    <label for="author_info" class="form-label">Maklumat Penulis</label>
                    <input type="text" name="author_info" id="author_info"
                           class="form-control @error('author_info') is-invalid @enderror"
                           value="{{ old('author_info', $post->author_info) }}">
                    @error('author_info')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label for="image" class="form-label">URL Gambar</label>
                    <input type="text" name="image" id="image"
                           class="form-control @error('image') is-invalid @enderror"
                           value="{{ old('image', $post->image) }}">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    @if($post->image)
                        <div class="mt-2">
                            <img src="{{ $post->image }}" alt="Preview" class="img-fluid rounded" style="max-height: 180px;">
                        </div>
                    @endif
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" id="category"
                           class="form-control @error('category') is-invalid @enderror"
                           value="{{ old('category', $post->category) }}">
                    @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Button -->
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
