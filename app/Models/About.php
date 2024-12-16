<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Menambahkan properti fillable untuk mass-assignment
    protected $fillable = ['title', 'description', 'image'];
}

