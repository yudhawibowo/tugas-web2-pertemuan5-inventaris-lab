<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('inventaris', function (Blueprint $table) {
            $table->foreignId('kondisi_id')
                ->after('lokasi')
                ->constrained('kondisis')
                ->restrictOnDelete();

            $table->dropColumn('kondisi');
        });
    }

    public function down(): void
    {
        Schema::table('inventaris', function (Blueprint $table) {
            $table->dropForeign(['kondisi_id']);
            $table->dropColumn('kondisi_id');

            $table->enum('kondisi', [
                'Baik',
                'Rusak Ringan',
                'Rusak Berat'
            ])->default('Baik')->after('lokasi');
        });
    }
};
