<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Skill extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = ['title', 'description', 'image', 'type'];

    // Relasi ke model Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Accessor untuk mendapatkan URL gambar
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::url($this->image) : null;
    }

    // Accessor untuk mendapatkan format nama tipe dengan huruf kapital di awal
    public function getFormattedTypeAttribute()
    {
        return ucfirst($this->type);
    }

    // Method untuk memeriksa apakah skill memiliki tipe tertentu
    public function isType($type)
    {
        return $this->type === $type;
    }
}
