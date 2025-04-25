<?php

namespace App\Models;

use App\Models\SubBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get all sub branches for this branch
     */
    public function subBranches(): HasMany
    {
        return $this->hasMany(SubBranch::class);
    }
}
