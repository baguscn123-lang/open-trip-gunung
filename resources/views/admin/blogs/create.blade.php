@extends('layouts.admin')

@section('page-title', 'Tambah Blog')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 style="color:#e8604c">Tambah Blog Baru</h3>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">← Kembali</a>
</div>

<div class="card-admin">
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul Blog</label>
            <input type="text" name="title" class="form-control" 
                   value="{{ old('title') }}" placeholder="Masukkan judul blog">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label>Konten Blog</label>
            <textarea name="content" class="form-control" rows="8" 
                      placeholder="Tulis konten blog di sini...">{{ old('content') }}</textarea>
            @error('content') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Kategori</label>
                <input type="text" name="category" class="form-control" 
                       value="{{ old('category') }}" placeholder="Contoh: Tips Pendakian">
                @error('category') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control" 
                       value="{{ old('author') }}" placeholder="Nama penulis">
                @error('author') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="mb-4">
            <label>Gambar Blog</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            @error('image') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <button type="submit" class="btn btn-primary px-4">Simpan Blog</button>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary px-4">Batal</a>
    </form>
</div>
@endsection