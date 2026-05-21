<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TravelController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DestinationController;

use App\Http\Middleware\AdminAuth;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [TravelController::class, 'home'])->name('home');

Route::get('/destinations', [TravelController::class, 'destination'])
    ->name('destination');

Route::get('/destinations/{id}', [TravelController::class, 'destinationDetail'])
    ->name('destination.detail');

Route::get('/discount', [TravelController::class, 'discount'])
    ->name('discount');

Route::get('/about', [TravelController::class, 'about'])
    ->name('about');

Route::get('/blog', [TravelController::class, 'blog'])
    ->name('blog');

Route::get('/blog/{id}', [TravelController::class, 'blogDetail'])
    ->name('blog.detail');

Route::get('/contact', [TravelController::class, 'contact'])
    ->name('contact');

Route::post('/contact/send', [TravelController::class, 'sendContact'])
    ->name('contact.send');

Route::get('/booking', [TravelController::class, 'booking'])
    ->name('booking');

Route::post('/booking/store', [TravelController::class, 'storeBooking'])
    ->name('booking.store');

/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [BlogController::class, 'loginForm'])
    ->name('admin.login');

Route::post('/admin/login', [BlogController::class, 'login'])
    ->name('admin.login.submit');

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware(AdminAuth::class)
    ->prefix('admin')
    ->group(function () {

    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [BlogController::class, 'logout'])
        ->name('admin.logout');

    /*
    |--------------------------------------------------------------------------
    | BLOG CMS
    |--------------------------------------------------------------------------
    */

    Route::resource('blogs', BlogController::class);

    /*
    |--------------------------------------------------------------------------
    | DESTINATION CMS
    |--------------------------------------------------------------------------
    */

    Route::resource('destinations', DestinationController::class);

});