<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Daftar atribut yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'label',
        'price',
        'features',
        'is_favorite',
    ];

    // Cast fitur ke array secara otomatis
    protected $casts = [
        'features' => 'array',
        'is_favorite' => 'boolean',
    ];
}
