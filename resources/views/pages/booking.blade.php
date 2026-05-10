@extends('layouts.app')

@section('title', 'Book A Tour')

@section('content')

    {{-- Page Banner --}}
    <div class="site-blocks-cover inner-page-cover" style="background-image: url({{ asset('images/hero_bg_2.jpeg') }});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center">
                <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                    <h1 class="text-white font-weight-light">Book A Tour</h1>
                    <div>
                        <a href="{{ route('home') }}">Home</a>
                        <span class="mx-2 text-white">&bullet;</span>
                        <span class="text-white">Booking</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Booking Section --}}
    <div class="site-section bg-light">
        <div class="container">
            <div class="row">

                {{-- Booking Form --}}
                <div class="col-md-7 mb-5">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST" class="p-5 bg-white">
                        @csrf

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="fname">First Name</label>
                                <input type="text" id="fname" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" value="{{ old('first_name') }}">
                                @error('first_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="lname">Last Name</label>
                                <input type="text" id="lname" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" value="{{ old('last_name') }}">
                                @error('last_name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-black" for="date">Date of Travel</label>
                                <input type="text" id="date" name="travel_date" class="form-control datepicker px-2 @error('travel_date') is-invalid @enderror" placeholder="Date of visit" value="{{ old('travel_date') }}">
                                @error('travel_date')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="text-black" for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="persons">How Many Person</label>
                                <select name="persons" id="persons" class="form-control @error('persons') is-invalid @enderror">
                                    <option value="1" {{ old('persons') == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ old('persons') == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ old('persons') == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ old('persons') == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5+" {{ old('persons') == '5+' ? 'selected' : '' }}>5+</option>
                                </select>
                                @error('persons')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="destination">Destination</label>
                                <select name="destination" id="destination" class="form-control @error('destination') is-invalid @enderror">
                                    <option value="Japan" {{ old('destination') == 'Japan' ? 'selected' : '' }}>Japan</option>
                                    <option value="Europe" {{ old('destination') == 'Europe' ? 'selected' : '' }}>Europe</option>
                                    <option value="China" {{ old('destination') == 'China' ? 'selected' : '' }}>China</option>
                                    <option value="France" {{ old('destination') == 'France' ? 'selected' : '' }}>France</option>
                                    <option value="Philippines" {{ old('destination') == 'Philippines' ? 'selected' : '' }}>Philippines</option>
                                </select>
                                @error('destination')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="note">Notes</label>
                                <textarea name="note" id="note" cols="30" rows="5" class="form-control" placeholder="Write your notes or questions here...">{{ old('note') }}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Send Booking" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Sidebar Info --}}
                <div class="col-md-5">
                    <div class="p-4 mb-3 bg-white">
                        <img src="{{ asset('images/hero_bg_1.jpeg') }}" alt="Image" class="img-fluid mb-4 rounded">
                        <h3 class="h5 text-black mb-3">More Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore.</p>
                        <p><a href="{{ route('contact') }}" class="btn btn-primary px-4 py-2 text-white">Contact Us</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection