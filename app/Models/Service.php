<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'label',
        'price',
        'features',
        'is_favorite',
    ];

    protected $casts = [
        'features' => 'array',
        'is_favorite' => 'boolean',
    ];
}
