<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TravelController extends Controller
{
    /**
     * Halaman Home
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Halaman Destinations
     */
    public function destination()
    {
        return view('pages.destination');
    }

    /**
     * Halaman Discount
     */
    public function discount()
    {
        return view('pages.discount');
    }

    /**
     * Halaman About
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Halaman Blog
     */
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * Halaman Contact
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Kirim pesan dari form Contact
     */
    public function sendContact(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:200',
            'message'    => 'required|string|min:10',
        ]);

        // TODO: Kirim email atau simpan ke database
        // Mail::to('admin@example.com')->send(new ContactMail($request->all()));

        return redirect()->route('contact')->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }

    /**
     * Halaman Booking
     */
    public function booking()
    {
        return view('pages.booking');
    }

    /**
     * Simpan data Booking
     */
    public function storeBooking(Request $request)
    {
        $request->validate([
            'first_name'  => 'required|string|max:100',
            'last_name'   => 'required|string|max:100',
            'email'       => 'required|email',
            'travel_date' => 'required|string',
            'persons'     => 'required',
            'destination' => 'required|string',
        ]);

        // TODO: Simpan ke database
        // Booking::create($request->all());

        return redirect()->route('booking')->with('success', 'Booking Anda berhasil dikirim! Kami akan segera mengkonfirmasi.');
    }
}