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
        Schema::table('certificates', function (Blueprint $table) {
            // Menambahkan kolom 'type' setelah kolom 'file'
            $table->string('type')->nullable()->after('file');
            
            // Menambahkan kolom 'image' setelah kolom 'type'
            $table->string('image')->nullable()->after('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('certificates', function (Blueprint $table) {
            // Menghapus kolom 'type' dan 'image'
            $table->dropColumn(['type', 'image']);
        });
    }
};
