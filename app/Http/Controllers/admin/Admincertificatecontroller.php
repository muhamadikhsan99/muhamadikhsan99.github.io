<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the certificates.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new certificate.
     */
    public function create()
    {
        return view('admin.certificate.create');
    }

    /**
     * Store a newly created certificate in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png|max:15360',
            'type' => 'nullable|string|in:achievement,participation,completion,other',
            'image' => 'nullable|file|mimes:jpg,png,jpeg,svg|max:15360', // Menambahkan dukungan SVG
        ]);

        // Simpan file jika ada
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('certificates', 'public');
        }

        // Simpan image jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('certificates/images', 'public');
        }

        // Atur default type jika tidak diisi
        $type = $request->input('type', 'other');

        // Buat sertifikat baru
        $certificate = Certificate::create([
            'name' => $request->input('name'),
            'issued_by' => $request->input('issued_by'),
            'issued_at' => $request->input('issued_at'),
            'description' => $request->input('description'),
            'file' => $filePath,
            'type' => $type,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.certificate.show', $certificate->id)->with('success', 'Certificate created successfully!');
    }

    /**
     * Display the specified certificate.
     */
    public function show(Certificate $certificate)
    {
        return view('admin.certificate.show', compact('certificate'));
    }

    /**
     * Show the form for editing the specified certificate.
     */
    public function edit($id)
    {
        $certificate = Certificate::findOrFail($id);
        $types = [
            'achievement' => 'Achievement',
            'participation' => 'Participation',
            'completion' => 'Completion',
            'other' => 'Other',
        ];

        return view('admin.certificate.edit', compact('certificate', 'types'));
    }

    /**
     * Update the specified certificate in storage.
     */
    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'required|string',
            'file' => 'nullable|file|mimes:pdf,jpg,png|max:15360',
            'type' => 'nullable|string|max:255',
            'image' => 'nullable|file|mimes:jpg,png,jpeg,svg|max:15360', // Dukungan untuk SVG
        ]);

        // Update data umum
        $certificate->update([
            'name' => $validatedData['name'],
            'issued_by' => $validatedData['issued_by'],
            'issued_at' => $validatedData['issued_at'],
            'description' => $validatedData['description'],
            'type' => $validatedData['type'] ?? $certificate->type,
        ]);

        // Update file jika ada file baru
        if ($request->hasFile('file')) {
            if ($certificate->file) {
                Storage::disk('public')->delete($certificate->file);
            }
            $certificate->file = $request->file('file')->store('certificates', 'public');
        }

        // Update image jika ada gambar baru
        if ($request->hasFile('image')) {
            if ($certificate->image) {
                Storage::disk('public')->delete($certificate->image);
            }
            $certificate->image = $request->file('image')->store('certificates/images', 'public');
        }

        $certificate->save();

        return redirect()->route('admin.certificate.index')->with('success', 'Certificate updated successfully!');
    }

    /**
     * Remove the specified certificate from storage.
     */
    public function destroy(Certificate $certificate)
    {
        if ($certificate->file && Storage::disk('public')->exists($certificate->file)) {
            Storage::disk('public')->delete($certificate->file);
        }

        if ($certificate->image && Storage::disk('public')->exists($certificate->image)) {
            Storage::disk('public')->delete($certificate->image);
        }

        $certificate->delete();

        return redirect()->route('admin.certificate.index')->with('success', 'Certificate deleted successfully.');
    }
}
