<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'nama_pembeli',
        'nomor_meja',
        'menu_id',
        'jumlah',
        'total_harga',
        'metode_pembayaran',
        'status_pembayaran',
        'status',
        'kode_pesanan'

    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
