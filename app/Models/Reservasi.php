<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    protected $fillable = [

    'nama',
    'telepon',
    'nomor_meja',
    'tanggal',
    'jam',
    'jumlah_orang',
    'catatan',
    'status'

];
}
