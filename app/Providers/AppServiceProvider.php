<?php

namespace App\Providers;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Listeners\RedirectIfAuthenticated;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home'; // Pastikan ini adalah /home atau sesuai yang diinginkan

    public function boot()
    {
        parent::boot();

        // Menambahkan redirect setelah login, jika tidak ada pengaturan otomatis
        Route::model('home', self::HOME);
    }
}
