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
        Schema::create('destinations', function (Blueprint $table) {

            $table->id();

            // JUDUL DESTINATION
            $table->string('title');

            // SLUG URL
            $table->string('slug')->unique();

            // LOKASI
            $table->string('location');

            // HARGA
            $table->string('price');

            // DURASI
            $table->string('duration');

            // LEVEL KESULITAN
            $table->string('difficulty');

            // DESKRIPSI
            $table->longText('description');

            // GAMBAR
            $table->string('image');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinations');
    }
};