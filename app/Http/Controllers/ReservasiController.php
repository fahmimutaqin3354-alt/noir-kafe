<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function index()
    {
        return view('reservasi.index');
    }

    public function store(Request $request)
{
    Reservasi::create([

        'nama' => $request->nama,
        'telepon' => $request->telepon,
       'nomor_meja' => $request->nomor_meja,
        'jumlah_orang' => $request->jumlah_orang,
        'tanggal' => $request->tanggal,
        'jam' => $request->jam,
        'catatan' => $request->catatan,
        'status' => 'Menunggu',

    ]);

    return redirect()->route('reservasi.status');
}

public function status()
{
    $reservasis = Reservasi::latest()->get();

    return view('reservasi.status', compact('reservasis'));
}

    public function admin()
    {
        $reservasis = Reservasi::latest()->get();

        return view(
            'admin.reservasi',
            compact('reservasis')
        );
    }

    public function updateStatus(Request $request,$id)
{
    $reservasi = Reservasi::find($id);

    $reservasi->status = $request->status;

    $reservasi->save();

    return back();
}
}
