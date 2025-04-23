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
        Schema::create('services', function (Blueprint $table) {
            Schema::create('services', function (Blueprint $table) {
                $table->id();
                $table->string('name'); // Nama layanan
                $table->string('label'); // Label
                $table->string('price'); // Harga
                $table->text('features'); // Fitur-fitur dalam bentuk teks JSON
                $table->boolean('is_favorite')->default(false); // Apakah layanan ini favorit
                $table->timestamps(); // Timestamps created_at dan updated_at
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
