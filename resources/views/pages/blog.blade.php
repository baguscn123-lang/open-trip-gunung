@extends('layouts.app')

@section('title', 'Blog Posts')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endpush

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/hero_bg2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light">Blog Posts</h1>
                    <div>
                        <a href="{{ route('home') }}">Home</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <span class="text-white">Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            {{-- ===== SECTION: LATEST ===== --}}
            @if($latest->count() > 0)
            <div class="mb-5">
                <h2 class="blog-section-title">Latest</h2>
                <hr class="blog-section-line">

                <div class="row">
                    {{-- Artikel besar di kiri --}}
                    @php $featured = $latest->first(); @endphp
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('blog.detail', $featured->id) }}" class="blog-featured-card">
                            <img src="{{ $featured->image ? asset('storage/' . $featured->image) : asset('images/hero_bg_1.jpg') }}"
                                 alt="{{ $featured->title }}">
                            <div class="blog-featured-body">
                                <span class="blog-category">{{ $featured->category }}</span>
                                <h3>{{ $featured->title }}</h3>
                                <small>{{ $featured->author }} &bullet; {{ $featured->created_at->format('d M Y') }}</small>
                            </div>
                        </a>
                    </div>

                    {{-- Grid kecil di kanan (2x2) --}}
                    <div class="col-lg-6">
                        <div class="row">
                            @foreach($latest->skip(1) as $blog)
                            <div class="col-6 mb-4">
                                <a href="{{ route('blog.detail', $blog->id) }}" class="blog-small-card">
                                    <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/hero_bg_1.jpg') }}"
                                         alt="{{ $blog->title }}">
                                    <div class="blog-small-body">
                                        <span class="blog-category">{{ $blog->category }}</span>
                                        <h5>{{ $blog->title }}</h5>
                                        <small>{{ $blog->author }}</small>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- ===== SECTION: TRENDING ===== --}}
            @if($trending->count() > 0)
            <div class="mb-5">
                <h2 class="blog-section-title">Trending</h2>
                <hr class="blog-section-line">

                <div class="row">
                    @foreach($trending as $blog)
                    <div class="col-6 col-md-3 mb-4">
                        <a href="{{ route('blog.detail', $blog->id) }}" class="blog-small-card">
                            <img src="{{ $blog->image ? asset('storage/' . $blog->image) : asset('images/hero_bg_1.jpg') }}"
                                 alt="{{ $blog->title }}">
                            <div class="blog-small-body">
                                <span class="blog-category">{{ $blog->category }}</span>
                                <h5>{{ $blog->title }}</h5>
                                <small>{{ $blog->author }}</small>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>

@endsection