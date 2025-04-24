<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalService extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'badge',
        'title',
        'description',
        'features',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'features' => 'array'
    ];

    public function getFeaturesArrayAttribute()
    {
        return explode(',', $this->features);
    }
}
