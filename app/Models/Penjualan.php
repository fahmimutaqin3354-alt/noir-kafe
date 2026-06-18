<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'nama_kopi',
        'jumlah',
        'harga',
        'total'
    ];
}
