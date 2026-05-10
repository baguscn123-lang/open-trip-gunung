<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;

/*
|--------------------------------------------------------------------------
| Web Routes - Travelers Website
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', [TravelController::class, 'home'])->name('home');

// Halaman Destinations
Route::get('/destinations', [TravelController::class, 'destination'])->name('destination');

// Halaman Discount
Route::get('/discount', [TravelController::class, 'discount'])->name('discount');

// Halaman About
Route::get('/about', [TravelController::class, 'about'])->name('about');

// Halaman Blog
Route::get('/blog', [TravelController::class, 'blog'])->name('blog');

// Halaman Contact
Route::get('/contact', [TravelController::class, 'contact'])->name('contact');
Route::post('/contact/send', [TravelController::class, 'sendContact'])->name('contact.send');

// Halaman Booking
Route::get('/booking', [TravelController::class, 'booking'])->name('booking');
Route::post('/booking/store', [TravelController::class, 'storeBooking'])->name('booking.store');