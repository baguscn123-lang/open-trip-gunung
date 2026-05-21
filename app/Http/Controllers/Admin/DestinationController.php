<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Destination;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * INDEX
     */
    public function index()
    {
        $destinations = Destination::latest()->get();

        return view('admin.destinations.index', compact('destinations'));
    }

    /**
     * CREATE
     */
    public function create()
    {
        return view('admin.destinations.create');
    }

    /**
     * STORE
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'difficulty' => 'required',
            'description' => 'required',
            'image' => 'required|image',

        ]);

        // UPLOAD IMAGE
        $image = $request->file('image');

        $imageName = time() . '.' . $image->extension();

        $image->move(public_path('images/destinations'), $imageName);

        // CREATE
        Destination::create([

            'title' => $request->title,

            'slug' => Str::slug($request->title),

            'location' => $request->location,

            'price' => $request->price,

            'duration' => $request->duration,

            'difficulty' => $request->difficulty,

            'description' => $request->description,

            'image' => $imageName,

        ]);

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination berhasil ditambahkan!');
    }

    /**
     * EDIT
     */
    public function edit($id)
    {
        $destination = Destination::findOrFail($id);

        return view('admin.destinations.edit', compact('destination'));
    }

    /**
     * UPDATE
     */
    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);

        $request->validate([

            'title' => 'required',
            'location' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'difficulty' => 'required',
            'description' => 'required',

        ]);

        // UPDATE IMAGE
        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->extension();

            $image->move(public_path('images/destinations'), $imageName);

            $destination->image = $imageName;
        }

        // UPDATE DATA
        $destination->title = $request->title;

        $destination->slug = Str::slug($request->title);

        $destination->location = $request->location;

        $destination->price = $request->price;

        $destination->duration = $request->duration;

        $destination->difficulty = $request->difficulty;

        $destination->description = $request->description;

        $destination->save();

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination berhasil diupdate!');
    }

    /**
     * DELETE
     */
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);

        $destination->delete();

        return redirect()
            ->route('admin.destinations.index')
            ->with('success', 'Destination berhasil dihapus!');
    }
}