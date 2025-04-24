<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
