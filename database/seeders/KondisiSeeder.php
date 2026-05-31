<?php
namespace Database\Seeders;

use App\Models\Kondisi;
use Illuminate\Database\Seeder;

class KondisiSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Baik',         'deskripsi' => 'Barang dalam kondisi baik dan dapat digunakan secara normal.'],
            ['nama' => 'Rusak Ringan', 'deskripsi' => 'Barang mengalami kerusakan ringan, masih bisa digunakan.'],
            ['nama' => 'Rusak Berat',  'deskripsi' => 'Barang mengalami kerusakan berat, tidak dapat digunakan.'],
        ];

        foreach ($data as $item) {
            Kondisi::firstOrCreate(['nama' => $item['nama']], $item);
        }
    }
}