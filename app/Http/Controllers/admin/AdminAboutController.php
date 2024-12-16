<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AdminAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk gambar
        ]);

        // Inisialisasi variabel path gambar
        $imagePath = null;

        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan gambar ke folder 'about' di dalam 'storage/app/public'
            $imagePath = $request->file('image')->store('about', 'public');
        }

        // Simpan data ke database
        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath, // Simpan path gambar relatif ke database
        ]);

        // Redirect ke halaman indeks about dengan pesan sukses
        return redirect()->route('admin.about.index')->with('success', 'About berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar (opsional)
        ]);

        // Periksa apakah ada file gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($about->image) {
                Storage::delete('public/' . $about->image);
            }

            // Simpan gambar baru dan dapatkan path-nya
            $imagePath = $request->file('image')->store('abouts', 'public');
            $validatedData['image'] = $imagePath; // Simpan path gambar baru di array validasi
        }

        // Perbarui about dengan data yang sudah divalidasi
        $about->update($validatedData);

        // Redirect ke halaman about atau ke halaman yang sesuai
        return redirect()->route('admin.about.index')->with('success', 'About berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        // Hapus gambar jika ada
        if ($about->image) {
            Storage::delete('public/' . $about->image);
        }

        // Hapus data about
        $about->delete();

        // Redirect ke halaman indeks about dengan pesan sukses
        return redirect()->route('admin.about.index')->with('success', 'About berhasil dihapus.');
    }
}
