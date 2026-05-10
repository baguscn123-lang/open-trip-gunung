@extends('layouts.app')

@section('title', 'Destinations')

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/hero_bg_2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light">Destinations</h1>
                    <div>
                        <a href="{{ route('home') }}">Home</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <span class="text-white">Destinations</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Destinations Grid --}}
    <div class="site-section">
        <div class="container">
            <div class="row">
                @foreach([
                    ['img_1.jpg', 'Japan', 'Explore ancient temples and modern cities.', '$1,200'],
                    ['img_2.jpg', 'Europe', 'Discover rich history and culture across Europe.', '$2,500'],
                    ['img_3.jpg', 'China', 'Walk the Great Wall and explore ancient wonders.', '$1,800'],
                    ['hero_bg_1.jpg', 'France', 'Romance, art, and cuisine in the heart of Europe.', '$2,000'],
                    ['hero_bg_2.jpg', 'Philippines', 'Pristine beaches and breathtaking island scenery.', '$900'],
                    ['img_1.jpg', 'Bali', 'Spiritual retreats and tropical paradise.', '$800'],
                ] as $dest)
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <div class="destination-item">
                        <img src="{{ asset('images/' . $dest[0]) }}" alt="{{ $dest[1] }}" class="img-fluid mb-3">
                        <div class="destination-info">
                            <h3>{{ $dest[1] }}</h3>
                            <p>{{ $dest[2] }}</p>
                            <p class="text-primary font-weight-bold">Starting from {{ $dest[3] }}</p>
                            <a href="{{ route('booking') }}" class="btn btn-primary btn-sm text-white">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection