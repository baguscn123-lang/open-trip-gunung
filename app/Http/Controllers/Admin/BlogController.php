<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // READ - tampilkan semua blog
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    // CREATE - form tambah blog
    public function create()
    {
        return view('admin.blogs.create');
    }

    // STORE - simpan blog baru
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required',
            'content'  => 'required',
            'category' => 'required',
            'author'   => 'required',
            'image'    => 'nullable|image|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
        }

        Blog::create([
            'title'    => $request->title,
            'slug'     => Str::slug($request->title),
            'content'  => $request->content,
            'category' => $request->category,
            'author'   => $request->author,
            'image'    => $imagePath,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog berhasil ditambahkan!');
    }

    // EDIT - form edit blog
    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    // UPDATE - simpan perubahan blog
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'    => 'required',
            'content'  => 'required',
            'category' => 'required',
            'author'   => 'required',
            'image'    => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->update([
            'title'    => $request->title,
            'slug'     => Str::slug($request->title),
            'content'  => $request->content,
            'category' => $request->category,
            'author'   => $request->author,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog berhasil diupdate!');
    }

    // DELETE - hapus blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog berhasil dihapus!');
    }
}