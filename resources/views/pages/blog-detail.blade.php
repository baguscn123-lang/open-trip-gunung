@extends('layouts.app')

@section('title', $blog->title)

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/hero_bg_2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light">{{ $blog->title }}</h1>
                    <div>
                        <a href="{{ route('home') }}" class="text-white">Home</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <a href="{{ route('blog') }}" class="text-white">Blog</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <span class="text-white">{{ $blog->title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Detail --}}
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    {{-- Meta --}}
                    <div class="meta mb-4">
                        by <strong>{{ $blog->author }}</strong>
                        <span class="mx-2">&bullet;</span> {{ $blog->created_at->format('d M Y') }}
                        <span class="mx-2">&bullet;</span> <span style="color:#e74c3c;">{{ $blog->category }}</span>
                    </div>

                    {{-- Gambar --}}
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                             alt="{{ $blog->title }}" 
                             class="img-fluid mb-4 w-100" 
                             style="max-height: 450px; object-fit: cover;">
                    @endif

                    {{-- Konten --}}
                    <div class="blog-content">
                        {!! nl2br(e($blog->content)) !!}
                    </div>

                    {{-- Tombol Kembali --}}
                    <div class="mt-5">
                        <a href="{{ route('blog') }}" class="btn btn-outline-primary border-2 py-3 px-5">
                            &larr; Kembali ke Blog
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection