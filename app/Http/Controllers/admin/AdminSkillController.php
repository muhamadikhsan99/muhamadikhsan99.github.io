<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Storage;


class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = ['frontend', 'backend', 'design', 'devops']; // Pilihan untuk type
        return view('admin.skill.create', compact('types'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string|in:frontend,backend,design,devops', // Validasi untuk type
        ]);

        $imagePath = null;

        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('skills', 'public');
        }

        // Simpan data ke database
        Skill::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'type' => $request->type, // Simpan type
        ]);

        return redirect()->route('skill.index')->with('success', 'Skill berhasil dibuat.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view ('admin.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        $types = ['frontend', 'backend', 'design', 'devops']; // Pilihan untuk type
        return view('admin.skill.edit', compact('skill', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required|string|in:frontend,backend,design,devops', // Validasi untuk type
        ]);

        if ($request->hasFile('image')) {
            if ($skill->image) {
                Storage::delete('public/' . $skill->image);
            }

            $imagePath = $request->file('image')->store('skills', 'public');
            $validatedData['image'] = $imagePath;
        }

        $skill->update($validatedData);

        return redirect()->route('skill.index')->with('success', 'Skill berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id); // Mencari data berdasarkan ID
        $skill->delete(); // Menghapus data
        return redirect()->route('skill.index')->with('success', 'Data deleted successfully.');
    }
}