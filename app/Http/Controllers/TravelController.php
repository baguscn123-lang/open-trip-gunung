<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class TravelController extends Controller
{
    public function home()
    {
        $latestBlogs = Blog::latest()->take(4)->get();
        return view('pages.home', compact('latestBlogs'));
    }

    public function destination()
    {
        return view('pages.destination');
    }

    public function discount()
    {
        return view('pages.discount');
    }

    public function about()
    {
        return view('pages.about');
    }

    /**
   
     */
        public function blog(Request $request)
    {
        $latest  = Blog::latest()->take(5)->get();
        $trending = Blog::latest()->skip(5)->take(4)->get();

        return view('pages.blog', compact('latest', 'trending'));
    }

    /**
     * Halaman Detail Blog
     */
    public function blogDetail($id)
    {
        $blog = Blog::findOrFail($id);
        return view('pages.blog-detail', compact('blog'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email',
            'subject'    => 'required|string|max:200',
            'message'    => 'required|string|min:10',
        ]);

        return redirect()->route('contact')->with('success', 'Pesan Anda berhasil dikirim!');
    }

    public function booking()
    {
        return view('pages.booking');
    }

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

        return redirect()->route('booking')->with('success', 'Booking berhasil dikirim!');
    }
}