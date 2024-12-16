<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminSkillController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/project', [PageController::class, 'index'])->name('project');
Route::get('/about', [PageController::class, 'index'])->name('about');
Route::get('/contact', [PageController::class, 'index'])->name('contact');
Route::get('/certificate', [PageController::class, 'index'])->name('certificate');
Route::get('/skill', [PageController::class, 'index'])->name('skill');




// Route untuk halaman utama




// Route untuk admin dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');



// Route untuk halaman profil user
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Resource route untuk posts
    Route::resource('posts', PostController::class);

    // Resource route untuk kontak (user level)
    Route::resource('contact', AdminContactController::class);
});

// Route untuk admin dashboard dengan middleware 'auth' dan 'admin'
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Route untuk dashboard admin
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Resource route untuk skill di dashboard admin
    Route::resource('dashboard/skill', AdminSkillController::class);

    // Resource route untuk sertifikat di dashboard admin
    Route::resource('dashboard/certificate', AdminCertificateController::class);



    Route::resource('dashboard/certificate', AdminCertificateController::class)->names([
        'index' => 'admin.certificate.index',
        'create' => 'admin.certificate.create',
        'store' => 'admin.certificate.store',
        'show' => 'admin.certificate.show',
        'edit' => 'admin.certificate.edit',
        'update' => 'admin.certificate.update',
        'destroy' => 'admin.certificate.destroy',
    ]);
    

    // Resource route untuk project di dashboard admin
    Route::resource('dashboard/project', AdminProjectController::class)->names([
        'index' => 'admin.project.index',
        'create' => 'admin.project.create',
        'store' => 'admin.project.store',
        'show' => 'admin.project.show',
        'edit' => 'admin.project.edit',
        'update' => 'admin.project.update',
        'destroy' => 'admin.project.destroy',
    ]);

    // Resource route untuk kontak di dashboard admin
    Route::resource('dashboard/contact', AdminContactController::class)->names([
        'index' => 'admin.contact.index',
        'create' => 'admin.contact.create',
        'store' => 'admin.contact.store',
        'show' => 'admin.contact.show',
        'edit' => 'admin.contact.edit',
        'update' => 'admin.contact.update',
        'destroy' => 'admin.contact.destroy',
    ]);

    // Tambahkan rute khusus untuk menandai kontak sebagai dibaca
    Route::patch('dashboard/contact/{id}/mark-as-read', [AdminContactController::class, 'markAsRead'])
        ->name('admin.contact.mark-as-read');

    // Resource route untuk about di dashboard admin
    Route::resource('dashboard/about', AdminAboutController::class)->names([
        'index' => 'admin.about.index',
        'create' => 'admin.about.create',
        'store' => 'admin.about.store',
        'show' => 'admin.about.show',
        'edit' => 'admin.about.edit',
        'update' => 'admin.about.update',
        'destroy' => 'admin.about.destroy',
    ]);

    // Resource route untuk home di dashboard admin
    Route::resource('dashboard/home', AdminHomeController::class)->names([
        'index' => 'admin.home.index',
        'create' => 'admin.home.create',
        'store' => 'admin.home.store',
        'show' => 'admin.home.show',
        'edit' => 'admin.home.edit',
        'update' => 'admin.home.update',
        'destroy' => 'admin.home.destroy',
    ]);

});

require __DIR__.'/auth.php';
