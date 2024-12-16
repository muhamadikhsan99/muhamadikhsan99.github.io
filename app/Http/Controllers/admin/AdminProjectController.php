<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    /**
     * Tampilkan daftar project.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Tampilkan form untuk membuat project baru.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Simpan project baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|string|in:pending,ongoing,completed',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:15360',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
            'type' => 'nullable|string|max:255',
        ]);

        $projectData = $request->only(['name', 'description', 'start_date', 'end_date', 'status', 'type']);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('project/files', 'public');
            $projectData['file'] = $filePath;
        }

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project/images', 'public');
            $projectData['image'] = $imagePath;
        }

        Project::create($projectData);

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil dibuat.');
    }

    /**
     * Tampilkan detail project.
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Tampilkan form untuk mengedit project.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Perbarui data project di database.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|string|in:pending,ongoing,completed',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:15360',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
            'type' => 'nullable|string|max:255',
        ]);

        $projectData = $request->only(['name', 'description', 'start_date', 'end_date', 'status', 'type']);

        if ($request->hasFile('file')) {
            if ($project->file) {
                Storage::delete($project->file);
            }
            $filePath = $request->file('file')->store('project/files', 'public');
            $projectData['file'] = $filePath;
        }

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete($project->image);
            }
            $imagePath = $request->file('image')->store('project/images', 'public');
            $projectData['image'] = $imagePath;
        }

        $project->update($projectData);

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil diperbarui.');
    }

    /**
     * Hapus project dari database.
     */
    public function destroy(Project $project)
    {
        if ($project->file) {
            Storage::delete($project->file);
        }

        if ($project->image) {
            Storage::delete($project->image);
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project berhasil dihapus.');
    }
}
