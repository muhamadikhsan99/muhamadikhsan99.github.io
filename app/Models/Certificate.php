<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'issued_by',
        'issued_at',
        'description',
        'file',
        'type',   // Menambahkan 'type'
        'image',  // Menambahkan 'image'
    ];

    protected $casts = [
        'issued_at' => 'datetime',
    ];

    public function getFormattedIssuedAtAttribute()
    {
        return $this->issued_at ? $this->issued_at->format('d M Y') : null;
    }
    
    // Jika ingin menambahkan fungsi untuk mengelola file image
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
