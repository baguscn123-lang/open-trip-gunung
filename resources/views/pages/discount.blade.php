@extends('layouts.app')

@section('title', 'Discounts & Deals')

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/hero_bg_2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light">Discounts &amp; Deals</h1>
                    <div>
                        <a href="{{ route('home') }}">Home</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <span class="text-white">Discount</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Discount Deals --}}
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black">Hot Deals</h2>
                    <p class="color-black-opacity-5">Limited Time Offers — Book Before They're Gone!</p>
                </div>
            </div>
            <div class="row">
                @foreach([
                    ['Japan Explorer', 'Japan', '30% OFF', '$840', '$1,200', 'hero_bg_1.jpeg', 'April 30, 2026'],
                    ['Europe Escape', 'Europe', '20% OFF', '$2,000', '$2,500', 'hero_bg_2.jpeg', 'May 15, 2026'],
                    ['Bali Bliss', 'Bali', '40% OFF', '$480', '$800', 'img_1.jpg', 'April 20, 2026'],
                    ['Philippines Island Hop', 'Philippines', '25% OFF', '$675', '$900', 'img_2.jpg', 'May 1, 2026'],
                ] as $deal)
                <div class="col-md-6 col-lg-3 mb-5" data-aos="fade-up">
                    <div class="bg-white shadow-sm p-3">
                        <div class="position-relative">
                            <img src="{{ asset('images/' . $deal[5]) }}" alt="{{ $deal[0] }}" class="img-fluid mb-3">
                            <span class="badge badge-danger position-absolute" style="top:10px;left:10px;font-size:1rem;padding:6px 10px;">{{ $deal[2] }}</span>
                        </div>
                        <h4 class="text-black">{{ $deal[0] }}</h4>
                        <p class="text-muted mb-1"><small>Destination: {{ $deal[1] }}</small></p>
                        <p class="mb-1">
                            <span class="text-primary font-weight-bold h5">{{ $deal[3] }}</span>
                            <span class="text-muted ml-2"><del>{{ $deal[4] }}</del></span>
                        </p>
                        <p class="text-muted"><small>Offer ends: {{ $deal[6] }}</small></p>
                        <a href="{{ route('booking') }}" class="btn btn-primary btn-sm btn-block text-white">Book This Deal</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection