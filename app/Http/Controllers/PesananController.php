<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Events\StatusPesananUpdated;

class PesananController extends Controller
{
    public function index()
{
    $pesanans = Pesanan::with('menu')
        ->latest()
        ->get()
        ->groupBy('kode_pesanan');

    return view('pesanan.index', compact('pesanans'));
}

    public function updateStatus($id)
{
    $pesanan = Pesanan::findOrFail($id);

    if($pesanan->status == 'Menunggu'){

        $pesanan->status = 'Diproses';

    } elseif($pesanan->status == 'Diproses'){

        $pesanan->status = 'Selesai';

    }

    $pesanan->save();

    event(new StatusPesananUpdated($pesanan));

    return redirect()->back();
}
public function statusPesanan()
{
    $pesanans = Pesanan::with('menu')
        ->orderBy('created_at', 'desc')
        ->get()
        ->groupBy('kode_pesanan');

    return view('pelanggan.status', compact('pesanans'));
}

public function payment($id)
{
    $pesanan = Pesanan::find($id);

    $pesanan->status_pembayaran = 'Sudah Dibayar';

    $pesanan->save();

    return back();
}
}
