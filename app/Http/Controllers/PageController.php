<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Certificate;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data dari beberapa model.
     */
    public function index()
    {
        // Mengambil semua data dari model yang relevan
        $home        = Home::all();
        $about       = About::all();
        $skill       = Skill::all();
        $contact     = Contact::all();
        $certificate = Certificate::all();
        $project     = Project::all();

        // Mengirimkan data ke view 'home'
        return view('home', compact('home', 'about', 'skill', 'contact', 'certificate', 'project'));
    }
}
