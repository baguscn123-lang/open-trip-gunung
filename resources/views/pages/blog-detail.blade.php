@extends('layouts.app')

@section('title', $blog->title)

@section('content')

{{-- HERO --}}
<div class="site-blocks-cover inner-page-cover overlay"
    style="background-image: url({{ asset('images/hero_bg2.jpeg') }});"
    data-aos="fade">

    <div class="container">
        <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

                <h1 class="text-white font-weight-light display-4">
                    {{ $blog->title }}
                </h1>

                <div class="mt-3">
                    <a href="{{ route('home') }}" class="text-white">
                        Home
                    </a>

                    <span class="mx-2 text-white">&bullet;</span>

                    <a href="{{ route('blog') }}" class="text-white">
                        Blog
                    </a>

                    <span class="mx-2 text-white">&bullet;</span>

                    <span class="text-white">
                        {{ $blog->title }}
                    </span>
                </div>

            </div>

        </div>
    </div>
</div>

{{-- BLOG DETAIL --}}
<div class="site-section bg-light">
    <div class="container">

        <div class="row">

            {{-- CONTENT --}}
            <div class="col-lg-8">

                {{-- META --}}
                <div class="mb-4">

                    <span class="text-muted">
                        by <strong>{{ $blog->author }}</strong>
                    </span>

                    <span class="mx-2 text-muted">&bullet;</span>

                    <span class="text-muted">
                        {{ $blog->created_at->format('d M Y') }}
                    </span>

                    <span class="mx-2 text-muted">&bullet;</span>

                    <span style="color:#ff6b4a;">
                        {{ $blog->category }}
                    </span>

                </div>

                {{-- IMAGE --}}
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}"
                        alt="{{ $blog->title }}"
                        class="img-fluid rounded shadow-sm mb-4 w-100"
                        style="max-height:500px; object-fit:cover;">
                @endif

                {{-- CONTENT --}}
                <div class="blog-content">

                    {!! $blog->content !!}

                </div>

                {{-- QUOTE --}}
                <div class="bg-dark text-white p-4 rounded mt-5">
                    <h5>
                        “Gunung mengajarkan bahwa perjalanan lebih penting daripada tujuan.”
                    </h5>
                </div>

                {{-- RELATED POSTS --}}
                <div class="mt-5">

                    <h3 class="mb-4">
                        Artikel Terkait
                    </h3>

                    <div class="row">

                        @foreach($relatedBlogs as $item)

                            <div class="col-md-6 mb-4">

                                <div class="card border-0 shadow-sm h-100">

                                    <img src="{{ asset('storage/' . $item->image) }}"
                                        class="card-img-top"
                                        style="height:200px; object-fit:cover;">

                                    <div class="card-body">

                                        <span class="text-danger small">
                                            {{ $item->category }}
                                        </span>

                                        <h5 class="mt-2">
                                            <a href="{{ route('blog.detail', $item->id) }}"
                                                class="text-dark">

                                                {{ $item->title }}

                                            </a>
                                        </h5>

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

            {{-- SIDEBAR --}}
            <div class="col-lg-4">

                {{-- SEARCH --}}
                <div class="bg-white p-4 shadow-sm rounded mb-4">

                    <h4 class="mb-3">
                        Cari Artikel
                    </h4>

                    <form action="{{ route('blog') }}" method="GET">

                        <input type="text"
                            name="search"
                            class="form-control"
                            placeholder="Cari artikel hiking...">

                    </form>

                </div>

                {{-- TRENDING POSTS --}}
                <div class="bg-white p-4 shadow-sm rounded mb-4">

                    <h4 class="mb-4">
                         Trending Posts
                    </h4>

                    @foreach($trendingBlogs as $trend)

                        <div class="d-flex mb-4">

                            <img src="{{ asset('storage/' . $trend->image) }}"
                                width="90"
                                height="70"
                                style="object-fit:cover;"
                                class="rounded mr-3">

                            <div>

                                <a href="{{ route('blog.detail', $trend->id) }}"
                                    class="text-dark font-weight-bold">

                                    {{ $trend->title }}

                                </a>

                                <div class="small text-muted mt-1">
                                    {{ $trend->created_at->format('d M Y') }}
                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                {{-- KATEGORI --}}
                <div class="bg-white p-4 shadow-sm rounded mb-4">

                    <h4 class="mb-3">
                        Kategori
                    </h4>

                    <ul class="list-unstyled">

                        <li class="mb-2">Tips Pendakian</li>
                        <li class="mb-2">Open Trip</li>
                        <li class="mb-2">Inspirasi</li>
                        <li class="mb-2">Perlengkapan Hiking</li>
                        <li class="mb-2">Camping</li>

                    </ul>

                </div>

            {{-- OPEN TRIP POPULER --}}
<div class="bg-white p-4 shadow-sm rounded mb-4">

    <h4 class="mb-4 sidebar-heading">
        Open Trip Populer
    </h4>

    {{-- ITEM --}}
    <a href="{{ route('destination') }}"
       class="trip-sidebar-item">

        <img src="{{ asset('images/rinjani.jpg') }}"
             alt="Rinjani">

        <div class="trip-sidebar-content">

            <span class="trip-sidebar-location">
                Lombok
            </span>

            <h5>
                Gunung Rinjani
            </h5>

            <div class="trip-sidebar-price">
                Rp 1.500.000
            </div>

        </div>

    </a>

    {{-- ITEM --}}
    <a href="{{ route('destination') }}"
       class="trip-sidebar-item">

        <img src="{{ asset('images/bg2.jpg') }}"
             alt="Bromo">

        <div class="trip-sidebar-content">

            <span class="trip-sidebar-location">
                Jawa Timur
            </span>

            <h5>
                Gunung Bromo
            </h5>

            <div class="trip-sidebar-price">
                Rp 500.000
            </div>

        </div>

    </a>

    {{-- ITEM --}}
    <a href="{{ route('destination') }}"
       class="trip-sidebar-item">

        <img src="{{ asset('images/destinasi.jpg') }}"
             alt="Prau">

        <div class="trip-sidebar-content">

            <span class="trip-sidebar-location">
                Jawa Tengah
            </span>

            <h5>
                Gunung Prau
            </h5>

            <div class="trip-sidebar-price">
                Rp 450.000
            </div>

        </div>

    </a>

    {{-- ITEM --}}
    <a href="{{ route('destination') }}"
       class="trip-sidebar-item">

        <img src="{{ asset('images/papandayan.jpg') }}"
             alt="Papandayan">

        <div class="trip-sidebar-content">

            <span class="trip-sidebar-location">
                Garut
            </span>

            <h5>
                Gunung Papandayan
            </h5>

            <div class="trip-sidebar-price">
                Rp 700.000
            </div>

        </div>

    </a>

</div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<style>

/* ======================================================
   BLOG DETAIL PREMIUM STYLE
====================================================== */

.blog-content {

    font-size: 18px;
    line-height: 2;
    color: #444;

    overflow: hidden;
}

/* PARAGRAPH */
.blog-content p {

    margin-bottom: 25px;

    color: #444;

    font-size: 18px;

    line-height: 2;
}

/* HEADING */
.blog-content h1,
.blog-content h2,
.blog-content h3,
.blog-content h4,
.blog-content h5,
.blog-content h6 {

    color: #111;

    font-weight: 700;

    line-height: 1.5;

    margin-top: 45px;

    margin-bottom: 20px;
}

/* H1 */
.blog-content h1 {

    font-size: 42px;
}

/* H2 */
.blog-content h2 {

    font-size: 34px;
}

/* H3 */
.blog-content h3 {

    font-size: 28px;
}

/* H4 */
.blog-content h4 {

    font-size: 24px;
}

/* IMAGE */
.blog-content img {

    width: 100%;

    border-radius: 18px;

    margin-top: 35px;

    margin-bottom: 35px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.12);

    transition: 0.3s;
}

.blog-content img:hover {

    transform: scale(1.01);
}

/* BLOCKQUOTE */
.blog-content blockquote {

    border-left: 6px solid #ff6b4a;

    background: #fff5f2;

    padding: 30px;

    margin: 45px 0;

    border-radius: 12px;

    color: #555;

    font-style: italic;

    font-size: 21px;

    line-height: 1.8;
}

/* LIST */
.blog-content ul,
.blog-content ol {

    margin-left: 30px;

    margin-bottom: 30px;
}

.blog-content li {

    margin-bottom: 12px;

    font-size: 18px;

    color: #444;
}

/* LINK */
.blog-content a {

    color: #ff6b4a;

    text-decoration: none;

    font-weight: 500;
}

.blog-content a:hover {

    text-decoration: underline;
}

/* TABLE */
.blog-content table {

    width: 100%;

    border-collapse: collapse;

    margin: 35px 0;
}

.blog-content table td,
.blog-content table th {

    border: 1px solid #ddd;

    padding: 15px;
}

/* HR */
.blog-content hr {

    margin: 40px 0;

    border-top: 1px solid #ddd;
}

/* CODE */
.blog-content code {

    background: #f4f4f4;

    padding: 3px 8px;

    border-radius: 5px;

    color: #ff6b4a;
}

/* PRE */
.blog-content pre {

    background: #111;

    color: white;

    padding: 25px;

    border-radius: 10px;

    overflow-x: auto;

    margin: 30px 0;
}

/* RESPONSIVE */
@media(max-width:768px){

    .blog-content {

        padding: 25px !important;
    }

    .blog-content h1 {

        font-size: 32px;
    }

    .blog-content h2 {

        font-size: 28px;
    }

    .blog-content h3 {

        font-size: 24px;
    }

    .blog-content p,
    .blog-content li {

        font-size: 16px;
    }

    .blog-content blockquote {

        font-size: 18px;

        padding: 20px;
    }

}

</style>

<style>

/* ============================================
   SIDEBAR OPEN TRIP
============================================ */

<style>

/* ============================================
   SIDEBAR OPEN TRIP MODERN
============================================ */

<style>

/* =========================================
   SIDEBAR OPEN TRIP MODERN
========================================= */

<style>

/* =========================================
   SIDEBAR HEADING
========================================= */

.sidebar-heading{

    font-size: 42px;

    font-weight: 700;

    color: #111;

    position: relative;
}

.sidebar-heading::after{

    content: '';

    width: 65px;

    height: 4px;

    background: #ff6b4a;

    display: block;

    margin-top: 12px;

    border-radius: 20px;
}

/* =========================================
   OPEN TRIP ITEM
========================================= */

.trip-sidebar-item{

    display: flex;

    gap: 18px;

    margin-bottom: 30px;

    text-decoration: none;

    transition: 0.3s;
}

.trip-sidebar-item:hover{

    transform: translateY(-3px);

    text-decoration: none;
}

/* IMAGE */
.trip-sidebar-item img{

    width: 120px;

    height: 90px;

    object-fit: cover;

    border-radius: 12px;

    flex-shrink: 0;

    transition: 0.4s;
}

.trip-sidebar-item:hover img{

    transform: scale(1.04);
}

/* CONTENT */
.trip-sidebar-content{

    flex: 1;
}

/* LOCATION */
.trip-sidebar-location{

    font-size: 14px;

    color: #ff6b4a;

    display: block;

    margin-bottom: 6px;
}

/* TITLE */
.trip-sidebar-content h5{

    font-size: 18px;

    line-height: 1.6;

    font-weight: 700;

    color: #111;

    margin-bottom: 8px;
}

/* PRICE */
.trip-sidebar-price{

    font-size: 16px;

    font-weight: 700;

    color: #ff6b4a;
}

/* RESPONSIVE */
@media(max-width:768px){

    .sidebar-heading{

        font-size: 32px;
    }

    .trip-sidebar-item{

        gap: 14px;
    }

    .trip-sidebar-item img{

        width: 95px;

        height: 80px;
    }

    .trip-sidebar-content h5{

        font-size: 16px;
    }

}

</style>

@endsection