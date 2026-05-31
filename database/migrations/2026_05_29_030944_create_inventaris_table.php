<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventaris', function (Blueprint $table) {

            // Primary key (id otomatis)
            $table->id();

            // Foreign key ke tabel kategoris
            $table->foreignId('kategori_id')
                ->constrained('kategoris')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            // Kode barang unik
            $table->string('kode_barang', 30)->unique();

            // Nama barang
            $table->string('nama_barang', 150);

            // Merek barang (boleh kosong)
            $table->string('merek', 100)->nullable();

            // Lokasi penyimpanan barang
            $table->string('lokasi', 100);

            // Kondisi barang
            $table->enum('kondisi', [
                'Baik',
                'Rusak Ringan',
                'Rusak Berat'
            ])->default('Baik');

            // Jumlah barang
            $table->unsignedInteger('jumlah')->default(1);

            // Tanggal pengadaan
            $table->date('tanggal_pengadaan')->nullable();

            // Keterangan tambahan
            $table->text('keterangan')->nullable();

            // created_at dan updated_at
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
