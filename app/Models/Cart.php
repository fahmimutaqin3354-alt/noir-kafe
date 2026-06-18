<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [

    'nama_pembeli',
    'nomor_meja',
    'menu_id',
    'jumlah',
    'total_harga',
    'session_id'

];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
