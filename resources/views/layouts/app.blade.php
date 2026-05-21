<!DOCTYPE html>
<html lang="en">
<head>
    <title>Travelers &mdash; @yield('title', 'Travel Website')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>
<body>

<div class="site-wrap">

    {{-- Mobile Menu --}}
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    {{-- Header / Navbar --}}
    <header class="site-navbar py-1" role="banner">
        <div class="container">
            <div class="row align-items-center">
    
                <div class="col-6 col-xl-2">
                    <a href="{{ route('home') }}" class="text-black mb-0" style="text-decoration:none; display:flex; align-items:center; gap:10px;">
    
                        {{-- Logo SVG Inline --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 80 80" fill="none">
                            <rect width="80" height="80" rx="10" fill="#1a1a1a"/>
                            <polygon points="10,62 28,30 40,48 52,34 70,62" fill="#BA7517"/>
                            <polygon points="28,30 35,18 40,28 34,38" fill="#EF9F27"/>
                            <polygon points="52,34 62,20 70,38 62,62" fill="#EF9F27"/>
                            <line x1="8" y1="64" x2="72" y2="64" stroke="#EF9F27" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
    
                        {{-- Teks Brand --}}
                        <div style="display:flex; flex-direction:column; line-height:1.15;">
                            <span style="font-size:16px; font-weight:700; color:#1a1a1a; letter-spacing:1px;">LANGIT NUSANTARA</span>
                            <span style="font-size:9px; color:#BA7517; letter-spacing:2px; text-transform:uppercase;">Open Trip Gunung Indonesia</span>
                        </div>
    
                    </a>
                </div>
 


                <div class="col-10 col-md-8 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">
                        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                            <li class="{{ request()->routeIs('home') ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="has-children {{ request()->routeIs('destination') ? 'active' : '' }}">
                                <a href="{{ route('destination') }}">Destinations</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('destination') }}#rinjani">Rinjani</a></li>
                                    <li><a href="{{ route('destination') }}#semeru">Semeru</a></li>
                                    <li><a href="{{ route('destination') }}#bromo">Bromo</a></li>
                                    <li><a href="{{ route('destination') }}#prau">Prau</a></li>
                                    <li><a href="{{ route('destination') }}#papandayan">Papandayan</a></li>
                                    <li><a href="{{ route('destination') }}#kerinci">Kerinci</a></li>
                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('discount') ? 'active' : '' }}">
                                <a href="{{ route('discount') }}">Discount</a>
                            </li>
                            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ request()->routeIs('blog') ? 'active' : '' }}">
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="{{ request()->routeIs('booking') ? 'active' : '' }}">
                                <a href="{{ route('booking') }}">Book Online</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-6 col-xl-2 text-right">
                    <div class="d-none d-xl-inline-block">
                        <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                            <li><a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a></li>
                            <li><a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a></li>
                            <li><a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a></li>
                            <li><a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    {{-- Main Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Langit Nusantara</h3>
                        <p>Kami hadir untuk menemani setiap langkahmu menuju puncak. Open trip gunung Indonesia yang aman, terpercaya, dan penuh kenangan.</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Navigations</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('destination') }}">Destination</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('discount') }}">Discounts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                        <p>Dapatkan info open trip terbaru, tips pendakian, dan promo spesial langsung di emailmu.</p>
                        <form action="#" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary text-white" type="button">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <div class="mb-5">
                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                    </div>
                    <p>
                        Copyright © 2026 Langit Nusantara | Open Trip Gunung Indonesia <i class="icon-heart-o" aria-hidden="true"></i> by
                        <a href="https://langit_Nusantara.com" target="_blank">langitNusantara</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div>{{-- end site-wrap --}}

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@stack('scripts')

</body>
</html>