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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Kategori adı (ör: Mobilya, Aksesuar)
            $table->string('slug')->unique(); // URL dostu isim
            $table->text('description')->nullable(); // Kategori açıklaması
            $table->softDeletes(); // Silinen kategorileri geri alabilmek için
            $table->timestamps(); // created_at ve updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
