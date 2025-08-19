@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">📝 Create New Post</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- slug -->
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text"
                                   name="slug"
                                   id="slug"
                                   value="{{ old('slug') }}"
                                   placeholder="Enter post slug"
                                   class="form-control @error('slug') is-invalid @enderror">
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Title -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"
                                   name="title"
                                   id="title"
                                   value="{{ old('title') }}"
                                   placeholder="Enter post title"
                                   class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content"
                                      id="content"
                                      rows="6"
                                      class="form-control @error('content') is-invalid @enderror"
                                      placeholder="Write your article here...">{{ old('content') }}</textarea>
                            @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Author -->
                        <div class="mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text"
                                   name="author"
                                   id="author"
                                   value="{{ old('author') }}"
                                   placeholder="Enter author's name"
                                   class="form-control @error('author') is-invalid @enderror">
                            @error('author')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Author Info -->
                        <div class="mb-3">
                            <label for="author_info" class="form-label">Author Info</label>
                            <textarea name="author_info"
                                      id="author_info"
                                      rows="3"
                                      class="form-control @error('author_info') is-invalid @enderror"
                                      placeholder="Write a brief info about the author...">{{ old('author_info') }}</textarea>
                            @error('author_info')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image -->
                        <div class="mb-3">
                            <label for="image" class="form-label">Image URL</label>
                            <input type="text"
                                   name="image"
                                   id="image"
                                   value="{{ old('image') }}"
                                   placeholder="https://example.com/image.jpg"
                                   class="form-control @error('image') is-invalid @enderror">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text"
                                   name="category"
                                   id="category"
                                   value="{{ old('category') }}"
                                   placeholder="Enter post category"
                                   class="form-control @error('category') is-invalid @enderror">
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Success message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                                ← Back
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Create Post
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
