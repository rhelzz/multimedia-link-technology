<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubBranch extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'subdistrict',
        'village',
        'postal_code',
        'embed_location_code',
        'whatsapp_number',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get the branch that owns this sub branch
     */
    public function branch(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }

    /**
     * Generate WhatsApp URL for this location
     */
    public function getWhatsAppLinkAttribute(): string
    {
        $phone = $this->whatsapp_number;
        // Format nomor WhatsApp
        $phone = preg_replace('/^0/', '62', $phone); // Ganti 0 di awal dengan 62
        $phone = preg_replace('/[^0-9]/', '', $phone); // Hapus karakter non-angka

        $message = "Halo,Admin saya ingin memasang wifi di {$this->village}...";
        
        return "https://wa.me/{$phone}?text=" . urlencode($message);
    }
}
