<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
    'nama_kopi',
    'harga',
    'deskripsi',
    'gambar',
    'kategori',
    'jenis_menu',
];
}
