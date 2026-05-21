@extends('layouts.admin')

@section('page-title', 'Tambah Blog')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h3 style="color:#e8604c; font-size:45px; font-weight:bold;">
        Tambah Blog Baru
    </h3>

    <a href="{{ route('admin.blogs.index') }}"
       class="btn btn-secondary">

        ← Kembali

    </a>

</div>

<div class="card-admin blog-editor-wrapper">

    <form action="{{ route('admin.blogs.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        {{-- JUDUL --}}
        <div class="mb-4">

            <label>Judul Blog</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ old('title') }}"
                   placeholder="Masukkan judul blog">

            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        {{-- CONTENT --}}
        <div class="mb-4">

            <label>Konten Blog</label>

            <textarea name="content"
                      id="editor">

                {{ old('content') }}

            </textarea>

            @error('content')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        {{-- ROW --}}
        <div class="row">

            {{-- KATEGORI --}}
            <div class="col-md-6 mb-4">

                <label>Kategori</label>

                <input type="text"
                       name="category"
                       class="form-control"
                       value="{{ old('category') }}"
                       placeholder="Contoh: Tips Pendakian">

                @error('category')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

            {{-- AUTHOR --}}
            <div class="col-md-6 mb-4">

                <label>Author</label>

                <input type="text"
                       name="author"
                       class="form-control"
                       value="{{ old('author') }}"
                       placeholder="Nama penulis">

                @error('author')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

            </div>

        </div>

        {{-- THUMBNAIL --}}
        <div class="mb-5">

            <label>Thumbnail Blog</label>

            <input type="file"
                   name="image"
                   class="form-control"
                   accept="image/*">

            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        {{-- BUTTON --}}
        <button type="submit"
                class="btn btn-primary px-4 py-2">

            Simpan Blog

        </button>

        <a href="{{ route('blogs.index') }}"
           class="btn btn-secondary px-4 py-2">

            Batal

        </a>

    </form>

</div>

{{-- =====================================================
   STYLE CMS PREMIUM
===================================================== --}}
<style>

.blog-editor-wrapper {
    background: #0d0d0d;
    border-radius: 25px;
    padding: 40px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.4);
}

/* LABEL */
.blog-editor-wrapper label {
    color: #fff;
    font-size: 18px;
    margin-bottom: 12px;
    display: block;
}

/* INPUT */
.blog-editor-wrapper .form-control {

    background: #151515;
    border: 1px solid #2d2d2d;

    color: white;

    height: 60px;

    border-radius: 15px;

    padding-left: 20px;

    font-size: 16px;
}

.blog-editor-wrapper .form-control:focus {

    border-color: #ff6b4a;

    box-shadow: none;

    background: #151515;

    color: white;
}

/* FILE */
.blog-editor-wrapper input[type=file] {

    padding: 15px;
    height: auto;
}

/* =====================================================
   CKEDITOR
===================================================== */

.ck.ck-editor {
    width: 100% !important;
}

/* TOOLBAR */
.ck.ck-toolbar {

    background: #ffffff !important;

    border: none !important;

    border-radius: 20px 20px 0 0 !important;

    padding: 15px !important;

    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}

/* MAIN AREA */
.ck-editor__editable {

    min-height: 700px !important;

    background: #ffffff !important;

    color: #111 !important;

    border: none !important;

    border-radius: 0 0 20px 20px !important;

    padding-top: 60px !important;
    padding-left: 70px !important;
    padding-right: 70px !important;
    padding-bottom: 60px !important;

    font-size: 18px !important;

    line-height: 2 !important;

    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* TYPOGRAPHY */
.ck-content {

    font-family: 'Poppins', sans-serif !important;

    color: #222 !important;
}

/* PARAGRAPH */
.ck-content p {

    font-size: 18px !important;

    line-height: 2 !important;

    color: #333 !important;

    margin-bottom: 25px !important;
}

/* HEADING */
.ck-content h1,
.ck-content h2,
.ck-content h3,
.ck-content h4 {

    color: #111 !important;

    font-weight: 700 !important;

    margin-top: 40px !important;

    margin-bottom: 20px !important;
}

.ck-content h1 {
    font-size: 42px !important;
}

.ck-content h2 {
    font-size: 34px !important;
}

.ck-content h3 {
    font-size: 28px !important;
}

/* BLOCKQUOTE */
.ck-content blockquote {

    border-left: 5px solid #ff6b4a !important;

    background: #fff5f2 !important;

    padding: 30px !important;

    margin: 40px 0 !important;

    color: #555 !important;

    font-style: italic !important;

    font-size: 20px !important;

    border-radius: 10px !important;
}

/* IMAGE */
.ck-content img {

    width: 100% !important;

    border-radius: 15px !important;

    margin-top: 35px !important;

    margin-bottom: 35px !important;

    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

/* LIST */
.ck-content ul,
.ck-content ol {

    margin-left: 30px !important;

    margin-bottom: 30px !important;
}

.ck-content li {

    margin-bottom: 12px !important;

    color: #333 !important;
}

/* TABLE */
.ck-content table {

    width: 100%;

    border-collapse: collapse;

    margin: 30px 0;
}

.ck-content table td,
.ck-content table th {

    border: 1px solid #ddd;

    padding: 15px;
}

/* BUTTON */
.ck.ck-button {

    border-radius: 8px !important;
}

/* ACTIVE BUTTON */
.ck.ck-button.ck-on {

    background: #ff6b4a !important;

    color: white !important;
}

/* HOVER */
.ck.ck-button:hover {

    background: #f3f3f3 !important;
}

/* RESPONSIVE */
@media(max-width:768px){

    .ck-editor__editable {

        padding-left: 25px !important;
        padding-right: 25px !important;

        padding-top: 30px !important;
        padding-bottom: 30px !important;

        font-size: 16px !important;
    }

}

</style>

{{-- =====================================================
   CKEDITOR
===================================================== --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>

ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });

</script>

@endsection