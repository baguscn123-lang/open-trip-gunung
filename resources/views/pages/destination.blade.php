@extends('layouts.app')

@section('title', 'Destinations')

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/bg2.jpg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
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
                    ['hero_bg2.jpeg', 'Gunung Rinjani', 'rinjani', 'Puncak legenda di Lombok dengan danau Segara Anak yang memukau.', 'Rp 1.500.000'],
                    ['semeru.jpg', 'Gunung Semeru', 'semeru', 'Atap Pulau Jawa, jalur ikonik yang penuh tantangan dan keindahan.', 'Rp 900.000'],
                    ['bromo.jpg', 'Gunung Bromo', 'bromo', 'Lautan pasir dan kawah aktif yang paling terkenal di Indonesia.', 'Rp 500.000'],
                    ['destinasi.jpg', 'Gunung Prau', 'prau', 'Gunung ramah pemula dengan golden sunrise terbaik di Dieng.', 'Rp 350.000'],
                    ['papandayan.jpg', 'Gunung Papandayan', 'papandayan', 'Kawah belerang eksotis dan hutan mati yang instagramable.', 'Rp 400.000'],
                    ['kerinci.jpg', 'Gunung Kerinci', 'kerinci', 'Gunung tertinggi di Sumatera, surga tersembunyi yang belum ramai.', 'Rp 1.200.000'],
                ] as $dest)
                <div id="{{ $dest[2] }}" class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <div class="destination-item">
                        <img src="{{ asset('images/' . $dest[0]) }}" 
                            alt="{{ $dest[1] }}" 
                            class="img-fluid mb-3"
                            style="width: 100%; height: 250px; object-fit: cover;">
                        <div class="destination-info">
                            <h3>{{ $dest[1] }}</h3>
                            <p>{{ $dest[3] }}</p>
                            <p class="text-primary font-weight-bold">Starting from {{ $dest[4] }}</p>
                            <a href="{{ route('booking') }}" class="btn btn-primary btn-sm text-white">Book Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection