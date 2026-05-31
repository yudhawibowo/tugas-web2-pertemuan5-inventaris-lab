<?php

namespace App\Http\Controllers;

class KondisiController extends Controller
{
    public function index()
    {
        $kondisis = [
            ['nama' => 'Baik', 'deskripsi' => 'Barang dapat digunakan dengan normal'],
            ['nama' => 'Rusak Ringan', 'deskripsi' => 'Barang masih dapat digunakan dengan perbaikan ringan'],
            ['nama' => 'Rusak Berat', 'deskripsi' => 'Barang tidak dapat digunakan dengan baik'],
        ];

        return view('kondisi.index', compact('kondisis'));
    }
}