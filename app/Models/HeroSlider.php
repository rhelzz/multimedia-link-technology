<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSlider extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_section_id',
        'image',
        'order',
        'is_active'
    ];

    public function heroSection()
    {
        return $this->belongsTo(HeroSection::class);
    }
    
}
