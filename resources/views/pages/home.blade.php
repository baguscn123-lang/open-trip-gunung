@extends('layouts.app')

@section('title', 'Home - Never Stop Exploring')

@section('content')

    {{-- Hero Slider --}}
    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/bg2.jpg') }}); background-position: center 60%; background-size: cover;" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light">MULAI PETUALANGANMU BERSAMA KAMI</h1>
                        <p class="mb-5"> "Slot terbatas! Bergabung dengan 500+ pendaki yang sudah menaklukkan puncak Nusantara bersama Langit Nusantara."</p>
                        <p><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Booking Sekarang!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light">DI ATAS AWAN, DI ATAS SEGALANYA</h1>
                        <p class="mb-5">Kami menyediakan petualangan yang dirancang khusus untuk memastikan keamanan dan kenyamanan Anda di setiap langkah.</p>
                        <p><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Book Now!</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Featured Units --}}
<div class="site-section">
    <div class="container overlap-section">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('images/img_2.jpeg') }}" alt="Image" 
                        class="img-fluid" 
                        style="width: 100%; height: 400px; object-fit: cover;">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Langit Malam di Ketinggian</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('images/img_1.jpeg') }}" alt="Image" 
                        class="img-fluid" 
                        style="width: 100%; height: 400px; object-fit: cover;">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Taklukkan Puncak Nusantara</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="unit-1 text-center">
                    <img src="{{ asset('images/imgg_3.jpeg') }}" alt="Image" 
                        class="img-fluid" 
                        style="width: 100%; height: 400px; object-fit: cover;">
                    <div class="unit-1-text">
                        <h3 class="unit-1-heading">Petualangan Aman Bersama Kami</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

    {{-- Services Section - Langit Nusantara  --}}
<div class="site-section">
    <div class="container">
        <div class="row align-items-stretch">
 
            {{-- 1. Pendaftaran Trip --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <rect x="14" y="26" width="52" height="28" rx="4" stroke="currentColor" stroke-width="2.5"/>
                            <line x1="30" y1="26" x2="30" y2="54" stroke="currentColor" stroke-width="2" stroke-dasharray="4,3"/>
                            <line x1="50" y1="26" x2="50" y2="54" stroke="currentColor" stroke-width="2" stroke-dasharray="4,3"/>
                            <circle cx="14" cy="40" r="5" stroke="currentColor" stroke-width="2"/>
                            <circle cx="66" cy="40" r="5" stroke="currentColor" stroke-width="2"/>
                            <line x1="35" y1="36" x2="45" y2="36" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="35" y1="40" x2="45" y2="40" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="35" y1="44" x2="45" y2="44" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Pendaftaran Trip</h3>
                        <p>Daftar open trip gunung favoritmu dengan mudah. Slot terbatas, proses cepat, konfirmasi langsung.</p>
                        <p><a href="{{ url('trip.index') }}">Daftar Sekarang</a></p>
                    </div>
                </div>
            </div>
 
            {{-- 2. Pilihan Destinasi --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <polygon points="40,16 62,58 18,58" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <polygon points="58,35 70,58 46,58" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <polyline points="34,30 40,16 46,30" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <line x1="12" y1="62" x2="68" y2="62" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Pilihan Destinasi</h3>
                        <p>Jelajahi ratusan puncak dari Sabang sampai Merauke, dari jalur pemula hingga rute ekstrem.</p>
                        <p><a href="{{ url('gunung.index') }}">Lihat Destinasi</a></p>
                    </div>
                </div>
            </div>
 
            {{-- 3. Panduan Pendakian --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <polygon points="14,20 30,14 50,20 66,14 66,60 50,66 30,60 14,66" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <line x1="30" y1="14" x2="30" y2="60" stroke="currentColor" stroke-width="2"/>
                            <line x1="50" y1="20" x2="50" y2="66" stroke="currentColor" stroke-width="2"/>
                            <path d="M14,36 Q22,32 30,38 Q38,44 50,38 Q58,34 66,36" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Panduan Pendakian</h3>
                        <p>Informasi lengkap jalur, estimasi waktu, tingkat kesulitan, dan tips keselamatan setiap gunung.</p>
                        <p><a href="{{ url('peta.index') }}">Baca Panduan</a></p>
                    </div>
                </div>
            </div>
 
            {{-- 4. Paket Trip Lengkap --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <rect x="20" y="28" width="40" height="38" rx="6" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M30,28 Q30,16 40,16 Q50,16 50,28" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                            <line x1="40" y1="16" x2="40" y2="22" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <rect x="28" y="42" width="24" height="14" rx="3" stroke="currentColor" stroke-width="2"/>
                            <line x1="40" y1="42" x2="40" y2="56" stroke="currentColor" stroke-width="1.5"/>
                            <line x1="20" y1="36" x2="14" y2="50" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <line x1="60" y1="36" x2="66" y2="50" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Paket Trip Lengkap</h3>
                        <p>Sudah termasuk porter, tenda, logistik makan, dan pemandu berpengalaman. Kamu tinggal datang.</p>
                        <p><a href="{{ url('trip.index') }}">Cek Paket</a></p>
                    </div>
                </div>
            </div>
 
            {{-- 5. Sewa Perlengkapan --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <rect x="16" y="38" width="48" height="28" rx="3" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M16,38 L22,18 L58,18 L64,38" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                            <path d="M16,38 Q24,46 32,38 Q40,30 48,38 Q56,46 64,38" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <rect x="32" y="50" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2"/>
                            <line x1="40" y1="50" x2="40" y2="66" stroke="currentColor" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Sewa Perlengkapan</h3>
                        <p>Belum punya gear? Sewa carrier, sleeping bag, trekking pole, dan perlengkapan lainnya di sini.</p>
                        <p><a href="{{ url('toko.index') }}">Sewa Sekarang</a></p>
                    </div>
                </div>
            </div>
 
            {{-- 6. Keselamatan & P3K --}}
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="unit-4 d-flex">
                    <div class="unit-4-icon mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 80 80" fill="none">
                            <rect x="14" y="24" width="52" height="38" rx="6" stroke="currentColor" stroke-width="2.5"/>
                            <line x1="40" y1="34" x2="40" y2="52" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                            <line x1="31" y1="43" x2="49" y2="43" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                            <path d="M28,24 L28,20 Q28,16 32,16 L48,16 Q52,16 52,20 L52,24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3>Keselamatan & P3K</h3>
                        <p>Tim kami terlatih dalam penanganan darurat gunung. Setiap trip didampingi petugas keselamatan.</p>
                        <p><a href="{{ url('p3k.index') }}">Pelajari Lebih</a></p>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
</div>
 

    {{-- Blog Section - Langit Nusantara (Foto Rata) --}}
<div class="site-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <h2 class="font-weight-light text-black">Cerita dari Puncak</h2>
                <p class="color-black-opacity-5">Tips, Destinasi &amp; Alasan Kenapa Kamu Harus Mendaki Bersama Kami</p>
            </div>
        </div>
        <div class="row mb-3 align-items-stretch">
 
            {{-- Artikel 1 --}}
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                    {{-- Wrapper foto agar tinggi selalu sama --}}
                    <div style="height:280px; overflow:hidden; border-radius:4px;">
                        <img src="{{ asset('images/opentrip.jpg') }}"
                             alt="Open Trip vs Solo"
                             style="width:100%; height:100%; object-fit:cover; object-position:center;">
                    </div>
                    <h2 class="font-size-regular mt-3">
                        <a href="#">Kenapa Open Trip Lebih Seru dari Pendakian Solo?</a>
                    </h2>
                    <div class="meta mb-4">
                        by Tim Langit Nusantara
                        <span class="mx-2">&bullet;</span>
                        <a href="#">Open Trip</a>
                    </div>
                    <p>Teman baru, biaya lebih hemat, dan pemandu berpengalaman. Temukan 5 alasan kenapa ribuan pendaki memilih open trip bersama Langit Nusantara dibanding mendaki sendiri.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
 
            {{-- Artikel 2 --}}
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                    {{-- Wrapper foto agar tinggi selalu sama --}}
                    <div style="height:280px; overflow:hidden; border-radius:4px;">
                        <img src="{{ asset('images/destinasi.jpg') }}"
                             alt="5 Gunung Terbaik Pemula"
                             style="width:100%; height:100%; object-fit:cover; object-position:center;">
                    </div>
                    <h2 class="font-size-regular mt-3">
                        <a href="#">5 Gunung Terbaik untuk Pemula di Indonesia 2025</a>
                    </h2>
                    <div class="meta mb-4">
                        by Tim Langit Nusantara
                        <span class="mx-2">&bullet;</span>
                        <a href="#">Destinasi</a>
                    </div>
                    <p>Belum pernah mendaki? Jangan khawatir. Kami pilihkan 5 gunung dengan jalur aman, pemandangan luar biasa, dan cocok untuk pendaki pertama kali bersama open trip kami.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
 
            {{-- Artikel 3 - Testimoni --}}
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                    <div style="height:280px; overflow:hidden; border-radius:4px;">
                        <img src="{{ asset('images/testimoni1.jpg') }}"
                            alt="Testimoni Pendaki Langit Nusantara"
                            style="width:100%; height:100%; object-fit:cover; object-position:center top;">
                    </div>
                    <h2 class="font-size-regular mt-3">
                        <a href="#">"Pertama Kali Mendaki di Usia 40, dan Saya Tidak Menyesal"</a>
                    </h2>
                    <div class="meta mb-4">
                        by Rina Kusuma, Peserta Trip Prau
                        <span class="mx-2">&bullet;</span>
                        <a href="#">Testimoni</a>
                    </div>
                    <p>Rina tidak pernah membayangkan bisa menikmati sunrise di atas awan. Bersama tim Langit Nusantara, mimpi itu jadi kenyataan. Ini kisah perjalanannya.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
            
            {{-- Artikel 4 - Tips Perlengkapan --}}
            <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                <div class="h-entry">
                    <div style="height:280px; overflow:hidden; border-radius:4px;">
                        <img src="{{ asset('images/tips1.jpg') }}"
                            alt="Perlengkapan Pendakian Wajib"
                            style="width:100%; height:100%; object-fit:cover; object-position:center;">
                    </div>
                    <h2 class="font-size-regular mt-3">
                        <a href="#">10 Perlengkapan Wajib Open Trip yang Sering Terlupa</a>
                    </h2>
                    <div class="meta mb-4">
                        by Tim Langit Nusantara
                        <span class="mx-2">&bullet;</span>
                        <a href="#">Tips Pendakian</a>
                    </div>
                    <p>Sudah siap fisik dan mental, tapi lupa bawa perlengkapan penting? Simak daftar 10 barang yang wajib ada di tas pendakian kamu sebelum berangkat trip.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
    
        </div>
    </div>
    


@endsection