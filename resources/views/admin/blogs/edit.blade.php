@extends('layouts.admin')

@section('page-title', 'Edit Blog')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 style="color:#e8604c">Edit Blog</h3>

    <a href="{{ route('blogs.index') }}"
       class="btn btn-secondary">

        ← Kembali

    </a>

</div>

<div class="card-admin">

    <form action="{{ route('blogs.update', $blog) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        {{-- TITLE --}}
        <div class="mb-3">

            <label>Judul Blog</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ old('title', $blog->title) }}">

            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        {{-- CONTENT --}}
        <div class="mb-3">

            <label>Konten Blog</label>

            <textarea name="content"
                      id="editor"
                      class="form-control"
                      rows="10">

                {{ old('content', $blog->content) }}

            </textarea>

            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="row">

            {{-- CATEGORY --}}
            <div class="col-md-6 mb-3">

                <label>Kategori</label>

                <input type="text"
                       name="category"
                       class="form-control"
                       value="{{ old('category', $blog->category) }}">

                @error('category')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            {{-- AUTHOR --}}
            <div class="col-md-6 mb-3">

                <label>Author</label>

                <input type="text"
                       name="author"
                       class="form-control"
                       value="{{ old('author', $blog->author) }}">

                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

        </div>

        {{-- IMAGE --}}
        <div class="mb-4">

            <label>Thumbnail Blog</label>

            @if($blog->image)

                <div class="mb-3">

                    <img src="{{ asset('storage/' . $blog->image) }}"
                         width="180"
                         style="border-radius:10px;">

                </div>

            @endif

            <input type="file"
                   name="image"
                   class="form-control"
                   accept="image/*">

        </div>

        {{-- BUTTON --}}
        <button type="submit"
                class="btn btn-primary px-4">

            Update Blog

        </button>

        <a href="{{ route('blogs.index') }}"
           class="btn btn-secondary px-4">

            Batal

        </a>

    </form>

</div>

{{-- CKEDITOR --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>

    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

</script>

@endsection