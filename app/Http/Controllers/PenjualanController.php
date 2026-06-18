<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::all();

        $totalPendapatan = Penjualan::sum('total');

        return view('penjualan.index', compact(
            'penjualans',
            'totalPendapatan'
        ));
    }

    public function create(Request $request)
{
    $menu = $request->menu;

    $harga = $request->harga;

    return view('penjualan.create', compact(
        'menu',
        'harga'
    ));
}

    public function store(Request $request)
    {
        $total = $request->jumlah * $request->harga;

        Penjualan::create([
            'nama_pembeli' => $request->nama_pembeli,
            'nama_kopi' => $request->nama_kopi,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            'total' => $total

        ]);

       return redirect()->route('pesanan.sukses');
    }
}
