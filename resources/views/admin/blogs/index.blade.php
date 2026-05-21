@extends('layouts.admin')

@section('page-title', 'Kelola Blog')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 style="color:#e8604c">Daftar Blog</h3>
    <a href="{{ route('blogs.create') }}" class="btn btn-primary">+ Tambah Blog</a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card-admin">
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($blogs as $blog)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                             width="60" height="40" style="object-fit:cover; border-radius:4px;">
                    @else
                        <span style="color:#666">-</span>
                    @endif
                </td>
                <td>{{ $blog->title }}</td>
                <td><span style="color:#e8604c">{{ $blog->category }}</span></td>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('blogs.edit', $blog) }}" 
                       class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog) }}" 
                          method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" 
                                onclick="return confirm('Yakin ingin menghapus blog ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center" style="color:#666">
                    Belum ada blog. Tambahkan blog pertama kamu!
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $blogs->links() }}
</div>
@endsection