<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Menentukan kolom mana yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'email',
        'message',
        'phone',
        'social_media',
        'is_read', // Tambahkan di sini
    ];
    
}
