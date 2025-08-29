<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori_buku')->cascadeOnDelete();
            $table->string('judul');
            $table->string('penulis')->nullable();
            $table->year('tahun_terbit')->nullable();
            $table->unsignedInteger('stok')->default(0);
            $table->string('cover_path')->nullable();     // simpan path cover
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('buku');
    }
};
