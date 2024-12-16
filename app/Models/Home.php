<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Home extends Model
{
    use HasFactory;

    // Tambahkan 'image' ke dalam fillable agar bisa diisi massal
    protected $fillable = ['title', 'description', 'image'];

    // Accessor untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }
}
