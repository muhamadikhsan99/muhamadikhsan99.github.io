<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;  
use Illuminate\Support\Facades\Storage;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home = Home::all(); // Mengambil semua data Home
        return view('admin.home.index', compact('home')); // Menampilkan ke view index untuk home
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.home.create'); // Menampilkan form create untuk Home
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dengan ukuran file gambar maksimal 10MB
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Validasi untuk gambar (10MB)
        ]);

        // Inisialisasi variabel path gambar
        $imagePath = null;

        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan gambar ke folder 'home' di dalam 'storage/app/public'
            $imagePath = $request->file('image')->store('home', 'public');
        }

        // Simpan data ke database
        Home::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath, // Simpan path gambar relatif ke database
        ]);

        // Redirect ke halaman indeks home dengan pesan sukses
        return redirect()->route('admin.home.index')->with('success', 'Home berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        return view('admin.home.show', compact('home')); // Menampilkan detail Home
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home')); // Menampilkan form edit Home
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Home $home)
    {
        // Validasi input dengan ukuran file gambar maksimal 10MB
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Validasi gambar (10MB)
        ]);

        // Cek apakah ada file gambar baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($home->image) {
                Storage::delete('public/' . $home->image);
            }

            // Simpan gambar baru dan dapatkan path-nya
            $imagePath = $request->file('image')->store('home_images', 'public');
            $validatedData['image'] = $imagePath; // Simpan path gambar baru di array validasi
        }

        // Perbarui home dengan data yang sudah divalidasi
        $home->update($validatedData);

        // Redirect ke halaman home atau ke halaman yang sesuai
        return redirect()->route('admin.home.index')->with('success', 'Home updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $home = Home::findOrFail($id); // Mencari data berdasarkan ID

        // Hapus gambar terkait jika ada
        if ($home->image) {
            Storage::delete('public/' . $home->image);
        }

        $home->delete(); // Menghapus data
        return redirect()->route('admin.home.index')->with('success', 'Data deleted successfully.');
    }
}

