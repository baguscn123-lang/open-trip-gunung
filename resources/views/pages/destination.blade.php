@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset('images/bg2.jpg') }}');
           height: 500px;
           background-size: cover;
           background-position: center;">

    <div class="overlay"></div>

    <div class="container">

        <div class="row no-gutters slider-text align-items-center justify-content-center"
             style="height:500px;">

            <div class="col-md-9 text-center">

                <h1 class="mb-3 bread text-white">
                    DESTINATIONS
                </h1>

                <p class="breadcrumbs">

                    <span class="mr-2">

                        <a href="{{ route('home') }}">
                            Home
                        </a>

                    </span>

                    <span>
                        Destinations
                    </span>

                </p>

            </div>

        </div>

    </div>

</section>

<!-- DESTINATION LIST -->
<section class="ftco-section">

    <div class="container">

        <div class="row">

            @foreach($destinations as $destination)

            <div class="col-lg-4 col-md-6 mb-5">

                <div class="destination-card">

                    <!-- IMAGE -->
                    <div class="destination-image">

                        <img
                            src="{{ asset('images/destinations/' . $destination->image) }}"
                            alt="{{ $destination->title }}"
                        >

                    </div>

                    <!-- CONTENT -->
                    <div class="destination-content">

                        <h3>
                            {{ $destination->title }}
                        </h3>

                        <p>
                            {{ \Illuminate\Support\Str::limit($destination->description, 90) }}
                        </p>

                        <div class="price">
                            Starting from {{ $destination->price }}
                        </div>

                        <a href="{{ route('destination.detail', $destination->id) }}"
                           class="book-btn">

                            Explore

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

<style>

/* SECTION */

.ftco-section{
    padding: 100px 0;
    background: #f8f8f8;
}

/* CARD */

.destination-card{
    background: #fff;
    overflow: hidden;
    transition: .4s;
}

.destination-card:hover{
    transform: translateY(-10px);
}

/* IMAGE */

.destination-image{
    overflow: hidden;
}

.destination-image img{
    width: 100%;
    height: 270px;
    object-fit: cover;
    transition: .5s;
}

.destination-card:hover img{
    transform: scale(1.08);
}

/* CONTENT */

.destination-content{
    padding: 28px;
}

.destination-content h3{
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 15px;
    color: #222;
}

.destination-content p{
    font-size: 16px;
    line-height: 1.8;
    color: #666;
    margin-bottom: 20px;
}

/* PRICE */

.price{
    font-size: 24px;
    color: #ff5e3a;
    font-weight: 700;
    margin-bottom: 20px;
}

/* BUTTON */

.book-btn{
    display: inline-block;
    background: #ff5e3a;
    color: #fff !important;

    padding: 12px 28px;
    border-radius: 5px;

    text-decoration: none;
    font-weight: 600;

    transition: .3s;
}

.book-btn:hover{
    background: #222;
    color: #fff !important;
}

/* RESPONSIVE */

@media(max-width:768px){

    .destination-image img{
        height: 230px;
    }

}

</style>

@endsection