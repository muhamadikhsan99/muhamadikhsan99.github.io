<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            // Mengubah kolom 'social_media' menjadi text dan mendukung JSON format
            $table->text('social_media')->nullable()->change(); // Ubah kolom menjadi text
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('social_media')->nullable()->change(); // Kembalikan ke string
        });
    }
};
