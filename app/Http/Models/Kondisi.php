<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    use HasFactory;

    protected $table = 'kondisis';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

    public function inventaris()
    {
        return $this->hasMany(Inventaris::class);
    }
}