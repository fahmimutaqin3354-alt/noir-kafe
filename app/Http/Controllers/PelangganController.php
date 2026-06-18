<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class PelangganController extends Controller
{
    public function index()
    {
       $menus = Menu::all();

$carts = \App\Models\Cart::all();

$grandTotal = $carts->sum('total_harga');

        return view('pelanggan.index',
compact(
    'menus',
    'carts',
    'grandTotal'
));
    }

    public function pesan(int $id)
{
    $menu = Menu::findOrFail($id);

    return view('pelanggan.pesan', compact('menu'));
}
}
