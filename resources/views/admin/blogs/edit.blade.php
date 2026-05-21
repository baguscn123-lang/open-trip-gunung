@extends('layouts.admin')

@section('page-title', 'Edit Blog')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 style="color:#e8604c">Edit Blog</h3>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">← Kembali</a>
</div>

<div class="card-admin">
    <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul Blog</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Konten Blog</label>
            <textarea name="content" class="form-control" rows="8">{{ old('content', $blog->content) }}</textarea>
            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Kategori</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category) }}">
                @error('category') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}">
                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="mb-4">
            <label>Gambar Blog</label>
            @if($blog->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $blog->image) }}" 
                         height="100" style="border-radius:4px; border:1px solid #444">
                    <small style="color:#999; display:block; margin-top:5px">Gambar saat ini</small>
                </div>
            @endif
            <input type="file" name="image" class="form-control" accept="image/*">
            <small style="color:#666">Kosongkan jika tidak ingin mengganti gambar</small>
        </div>
        <button type="submit" class="btn btn-primary px-4">Update Blog</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary px-4">Batal</a>
    </form>
</div>
@endsection