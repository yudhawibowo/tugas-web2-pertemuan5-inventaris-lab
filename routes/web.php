<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KondisiController;

Route::get('/', function () {
    return redirect()->route('inventaris.index');
});

// Inventaris
Route::resource('inventaris', InventarisController::class);

// Kategori
Route::resource('kategori', KategoriController::class)->except(['show']);

// Kondisi
Route::get('/kondisi', [KondisiController::class, 'index'])
    ->name('kondisi.index');
