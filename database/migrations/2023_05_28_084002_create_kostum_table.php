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
        Schema::create('kostum', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->string('nama_kostum');
            $table->string('slug');
            $table->text('deskripsi');
            $table->integer('harga_sewa');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kostum');
    }
};
