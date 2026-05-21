@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="destination-hero"
    style="background-image:url('{{ asset('images/destinations/' . $destination->image) }}');">

    <div class="hero-overlay"></div>

    <div class="container">

        <div class="hero-content">

            <span class="hero-location">
                📍 {{ $destination->location }}
            </span>

            <h1>
                {{ $destination->title }}
            </h1>

            <div class="hero-meta">

                <span>
                    ⏰ {{ $destination->duration }}
                </span>

                <span>
                    🏔 {{ $destination->difficulty }}
                </span>

            </div>

        </div>

    </div>

</section>

<!-- CONTENT -->
<section class="destination-section">

    <div class="container">

        <div class="row">

            <!-- LEFT -->
            <div class="col-lg-8">

                <!-- IMAGE -->
                <div class="detail-image-card">

                    <img
                        src="{{ asset('images/destinations/' . $destination->image) }}"
                        alt="{{ $destination->title }}"
                    >

                </div>

                <!-- DESCRIPTION -->
                <div class="detail-card">

                    <h2>
                        Tentang Destinasi
                    </h2>

                    <p>
                        {{ $destination->description }}
                    </p>

                </div>

                <!-- HIGHLIGHT -->
                <div class="detail-card">

                    <h2>
                        Highlight Trip
                    </h2>

                    <ul class="highlight-list">

                        <li>✔ Sunrise terbaik di puncak</li>
                        <li>✔ Spot foto instagramable</li>
                        <li>✔ Jalur pendakian aman</li>
                        <li>✔ Camping ground nyaman</li>
                        <li>✔ Cocok untuk healing & adventure</li>

                    </ul>

                </div>

                <!-- ITINERARY -->
                <div class="detail-card">

                    <h2>
                        Itinerary Singkat
                    </h2>

                    <div class="itinerary-item">

                        <span>Day 1</span>

                        <p>
                            Perjalanan menuju basecamp dan pendakian awal.
                        </p>

                    </div>

                    <div class="itinerary-item">

                        <span>Day 2</span>

                        <p>
                            Summit attack dan menikmati sunrise di puncak.
                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="col-lg-4">

                <div class="booking-sidebar">

                    <div class="price-area">

                        <span class="start-label">
                            Starting From
                        </span>

                        <h2>
                            {{ $destination->price }}
                        </h2>

                    </div>

                    <div class="sidebar-info">

                        <div class="info-item">
                            <span>📍 Lokasi</span>
                            <strong>{{ $destination->location }}</strong>
                        </div>

                        <div class="info-item">
                            <span>⏰ Durasi</span>
                            <strong>{{ $destination->duration }}</strong>
                        </div>

                        <div class="info-item">
                            <span>🏔 Difficulty</span>
                            <strong>{{ $destination->difficulty }}</strong>
                        </div>

                    </div>

                    <a href="{{ route('booking') }}"
                       class="book-btn">

                        Book Sekarang

                    </a>

                </div>

                <!-- RELATED -->
                <div class="related-sidebar">

                    <h3>
                        Related Trips
                    </h3>

                    @foreach($relatedDestinations as $item)

                        <a href="{{ route('destination.detail', $item->id) }}"
                           class="related-item">

                            <img
                                src="{{ asset('images/destinations/' . $item->image) }}"
                                alt="{{ $item->title }}"
                            >

                            <div class="related-content">

                                <h4>
                                    {{ $item->title }}
                                </h4>

                                <span>
                                    {{ $item->price }}
                                </span>

                            </div>

                        </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

<style>

/* HERO */

.destination-hero{
    height: 85vh;
    background-size: cover;
    background-position: center;
    position: relative;

    display: flex;
    align-items: center;
}

.hero-overlay{
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
}

.hero-content{
    position: relative;
    z-index: 10;
    text-align: center;
    color: #fff;
}

.hero-location{
    color: #ff5e3a;
    font-size: 20px;
    font-weight: 600;
}

.hero-content h1{
    font-size: 75px;
    font-weight: 800;
    margin: 20px 0;
}

.hero-meta{
    display: flex;
    justify-content: center;
    gap: 30px;
    font-size: 18px;
}

/* SECTION */

.destination-section{
    padding: 100px 0;
    background: #f8f8f8;
}

/* IMAGE */

.detail-image-card img{
    width: 100%;
    border-radius: 25px;
    height: 500px;
    object-fit: cover;
}

/* CARD */

.detail-card{
    background: #fff;
    padding: 40px;
    border-radius: 25px;
    margin-top: 35px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

.detail-card h2{
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 25px;
}

.detail-card p{
    font-size: 18px;
    color: #666;
    line-height: 2;
}

/* HIGHLIGHT */

.highlight-list{
    padding-left: 20px;
}

.highlight-list li{
    margin-bottom: 15px;
    font-size: 17px;
    color: #444;
}

/* ITINERARY */

.itinerary-item{
    border-left: 4px solid #ff5e3a;
    padding-left: 20px;
    margin-bottom: 25px;
}

.itinerary-item span{
    font-weight: 700;
    color: #ff5e3a;
    font-size: 18px;
}

/* SIDEBAR */

.booking-sidebar{
    background: #fff;
    padding: 35px;
    border-radius: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);

    position: sticky;
    top: 100px;
}

.start-label{
    color: #999;
    font-size: 14px;
}

.price-area h2{
    font-size: 45px;
    color: #ff5e3a;
    font-weight: 800;
    margin-top: 10px;
}

.sidebar-info{
    margin-top: 30px;
}

.info-item{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
    padding-bottom: 15px;
    border-bottom: 1px solid #eee;
}

.book-btn{
    width: 100%;
    display: block;
    text-align: center;
    background: #ff5e3a;
    color: #fff;
    padding: 18px;
    border-radius: 14px;
    margin-top: 30px;
    font-weight: 700;
    text-decoration: none;
    transition: .3s;
}

.book-btn:hover{
    background: #222;
    color: #fff;
}

/* RELATED */

.related-sidebar{
    background: #fff;
    padding: 35px;
    border-radius: 25px;
    margin-top: 35px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

.related-sidebar h3{
    font-size: 30px;
    margin-bottom: 25px;
    font-weight: 700;
}

.related-item{
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
    text-decoration: none;
}

.related-item img{
    width: 120px;
    height: 90px;
    object-fit: cover;
    border-radius: 15px;
}

.related-content h4{
    color: #222;
    font-size: 20px;
    font-weight: 700;
}

.related-content span{
    color: #ff5e3a;
    font-weight: 700;
}

/* RESPONSIVE */

@media(max-width:991px){

    .hero-content h1{
        font-size: 50px;
    }

    .booking-sidebar{
        margin-top: 40px;
        position: relative;
        top: 0;
    }

}

@media(max-width:768px){

    .hero-content h1{
        font-size: 38px;
    }

    .hero-meta{
        flex-direction: column;
        gap: 10px;
    }

    .detail-card{
        padding: 25px;
    }

    .detail-card h2{
        font-size: 28px;
    }

}

</style>

@endsection