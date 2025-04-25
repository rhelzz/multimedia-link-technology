<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sub_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('branch_id')->constrained()->onDelete('cascade');
            $table->string('subdistrict'); // Kecamatan
            $table->string('village'); // Kelurahan
            $table->string('postal_code');
            $table->text('embed_location_code')->nullable(); // Untuk menyimpan embed code Google Maps
            $table->string('whatsapp_number'); // Nomor WhatsApp untuk link langsung
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_branches');
    }
};
