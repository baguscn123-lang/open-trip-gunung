@extends('layouts.app')

@section('title', 'Home - Never Stop Exploring')

@section('content')

    {{-- Hero Slider --}}
    <div class="slide-one-item home-slider owl-carousel">

        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_1.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light">Never Stop Exploring</h1>
                        <p class="mb-5">Jelajahi tempat populer yang membuat Anda semakin tertantang ingin mencoba menaklukan medan pendakian.</p>
                        <p><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Book Now!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('images/hero_bg_2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light">Love The Places</h1>
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
                        <img src="{{ asset('images/img_2.jpeg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Write Down Your Experience</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_1.jpeg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Explore Asian Mountains</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <a href="#" class="unit-1 text-center">
                        <img src="{{ asset('images/img_3.jpeg') }}" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <h3 class="unit-1-heading">Safe Trip</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Services --}}
    <div class="site-section">
        <div class="container">
            <div class="row align-items-stretch">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-airplane"></span></div>
                        <div>
                            <h3>Air Ticketing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ship"></span></div>
                        <div>
                            <h3>Cruises</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-backpack"></span></div>
                        <div>
                            <h3>Travel Guides</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-route"></span></div>
                        <div>
                            <h3>Tour Packages</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-hotel"></span></div>
                        <div>
                            <h3>Hotel Accomodations</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="unit-4 d-flex">
                        <div class="unit-4-icon mr-4"><span class="text-primary flaticon-ski"></span></div>
                        <div>
                            <h3>Ski Experiences</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
                            <p><a href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Blog Section --}}
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black">Our Blog</h2>
                    <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
                </div>
            </div>
            <div class="row mb-3 align-items-stretch">
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/hero_bg_1.jpeg') }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                        <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <img src="{{ asset('images/hero_bg_2.jpeg') }}" alt="Image" class="img-fluid">
                        <h2 class="font-size-regular"><a href="#">How to Plan Your Vacation</a></h2>
                        <div class="meta mb-4">by Theresa Winston <span class="mx-2">&bullet;</span> Jan 18, 2019 at 2:00 pm <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('blog') }}" class="btn btn-outline-primary border-2 py-3 px-5">View All Blog Posts</a>
                </div>
            </div>
        </div>
    </div>

    {{-- CTA --}}
    <div class="site-section border-top">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="mb-5 text-black">Want To Travel With Us?</h2>
                    <p class="mb-0"><a href="{{ route('booking') }}" class="btn btn-primary py-3 px-5 text-white">Book Now</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection