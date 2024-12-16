<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class AdminContactController extends Controller
{
    /**
     * Menampilkan semua kontak.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Menampilkan form untuk menambahkan kontak baru.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Menyimpan kontak baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'social_media' => 'nullable|string', // JSON string
            'is_read' => 'nullable|boolean',
        ]);
    
        // Validasi format JSON untuk kolom social_media
        $socialMedia = $request->social_media;
        if ($socialMedia && is_string($socialMedia)) {
            $decodedSocialMedia = json_decode($socialMedia, true);
            if (json_last_error() !== JSON_ERROR_NONE || !is_array($decodedSocialMedia)) {
                if ($request->expectsJson()) {
                    return response()->json(['success' => false, 'message' => 'Format data social media tidak valid.'], 422);
                }
                return back()->withErrors(['social_media' => 'Format data social media tidak valid.']);
            }
            $socialMedia = json_encode($decodedSocialMedia);
        }
    
        // Menyimpan data kontak
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'social_media' => $socialMedia,
            'is_read' => $request->has('is_read') ? true : false,
        ]);
    
        // Cek apakah request berasal dari AJAX
        if ($request->expectsJson()) {
            return response()->json(['success' => true, 'message' => 'Kontak berhasil dikirim!']);
        }
    
        // Redirect berdasarkan usertype
        if (auth()->check() && auth()->user()->usertype == 'admin') {
            return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil ditambahkan!');
        }
    
        return redirect()->route('home')->with('success', 'Kontak berhasil dikirim!');
    
    



    }
    

    /**
     * Menampilkan detail kontak.
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        // Tandai sebagai dibaca jika belum dibaca
        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        return view('admin.contact.show', compact('contact'));
    }

    /**
     * Menampilkan form untuk mengedit kontak.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Memperbarui kontak.
     */
    public function update(Request $request, $id)
    {
        // Validasi input termasuk is_read
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'social_media' => 'nullable|string|max:255',
            'is_read' => 'nullable|boolean', // Validasi untuk is_read, bisa berupa null atau boolean
        ]);
    
        // Cari data kontak berdasarkan ID
        $contact = Contact::findOrFail($id);
    
        // Perbarui data kontak, termasuk is_read
        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'social_media' => $request->social_media,
            'is_read' => $request->has('is_read') ? true : false, // Jika is_read ada di request, set ke true, jika tidak, false
        ]);
    
        // Redirect ke halaman daftar kontak dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil diperbarui!');
    }
    

    /**
     * Menghapus kontak.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil dihapus!');
    }

    /**
     * Menandai kontak sebagai dibaca.
     */
    public function markAsRead($id)
    {
        $contact = Contact::findOrFail($id);

        if (!$contact->is_read) {
            $contact->update(['is_read' => true]);
            return redirect()->route('admin.contact.index')->with('success', 'Kontak berhasil ditandai sebagai dibaca!');
        }

        return redirect()->route('admin.contact.index')->with('info', 'Kontak sudah ditandai sebagai dibaca.');
    }

    /**
     * Menandai semua kontak sebagai dibaca.
     */
    public function markAllAsRead()
    {
        Contact::where('is_read', false)->update(['is_read' => true]);

        return redirect()->route('admin.contact.index')->with('success', 'Semua kontak berhasil ditandai sebagai dibaca!');
    }
}
