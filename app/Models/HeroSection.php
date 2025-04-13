<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'price_text',
        'feature_tags',
        'customer_rating',
        'active_customers',
        'money_guarantee'
    ];

    protected $casts = [
        'feature_tags' => 'array'
    ];

    public function sliders()
    {
        return $this->hasMany(HeroSlider::class)->orderBy('order');
    }
    
}
