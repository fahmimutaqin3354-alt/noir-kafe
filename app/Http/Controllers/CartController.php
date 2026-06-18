<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $id)
{
    $menu = Menu::findOrFail($id);

    $cart = Cart::where('menu_id', $id)
    ->where('session_id', session()->getId())
    ->first();

    if($cart){

        $cart->jumlah += 1;

        $cart->total_harga =
            $cart->jumlah * $menu->harga;

        $cart->save();

    } else {

        Cart::create([

    'menu_id' => $menu->id,
    'jumlah' => 1,
    'total_harga' => $menu->harga,
    'session_id' => session()->getId()

]);

    }

    return back()->with('success', true);
}

    public function index()
    {
       $carts = Cart::with('menu')
    ->where('session_id', session()->getId())
    ->get();

        return view('cart.index', compact('carts'));
    }
    public function cancel()
{
   Cart::where('session_id', session()->getId())
    ->delete();
    return redirect('/menu-pelanggan')
        ->with('success', 'Checkout dibatalkan');
}

  public function checkout(Request $request)
{
   $carts = Cart::where('session_id', session()->getId())
    ->get();

    // BUAT KODE SEKALI
    $kodePesanan = 'INV' . time();

    foreach ($carts as $cart) {

        Pesanan::create([

            'nama_pembeli' => $request->nama_pembeli,

            'nomor_meja'   => $request->nomor_meja,

            'menu_id'      => $cart->menu_id,

            'nama_menu'    => $cart->menu->nama_kopi,

            'jumlah'       => $cart->jumlah,

            // PAKAI VARIABLE
            'kode_pesanan' => $kodePesanan,

            'total_harga'  => $cart->total_harga,

            'metode_pembayaran' => $request->metode_pembayaran,

            'status_pembayaran' => 'Belum Dibayar',

            'status'       => 'Menunggu'

        ]);

    }

    Cart::where('session_id', session()->getId())
    ->delete();

    return redirect()
        ->route('checkout.success');
}
public function increase($id)
{
    $cart = Cart::where('id', $id)
    ->where('session_id', session()->getId())
    ->firstOrFail();
    $cart->jumlah += 1;

    $cart->total_harga =
        $cart->jumlah * $cart->menu->harga;

    $cart->save();

    return back();
}

public function decrease($id)
{
    $cart = Cart::where('id', $id)
    ->where('session_id', session()->getId())
    ->firstOrFail();

    if($cart->jumlah > 1){

        $cart->jumlah -= 1;

        $cart->total_harga =
            $cart->jumlah * $cart->menu->harga;

        $cart->save();

    } else {

        $cart->delete();
    }

    return back();
}

public function plus($id)
{
    $cart = Cart::where('id', $id)
        ->where('session_id', session()->getId())
        ->firstOrFail();

    $cart->jumlah += 1;

    $cart->total_harga =
    $cart->jumlah * $cart->menu->harga;

    $cart->save();

    return back();
}

public function min($id)
{
    $cart = Cart::where('id', $id)
        ->where('session_id', session()->getId())
        ->firstOrFail();
    if($cart->jumlah > 1){

        $cart->jumlah -= 1;

        $cart->total_harga =
        $cart->jumlah * $cart->menu->harga;

        $cart->save();

    }

    return back();
}

public function remove($id)
{
   Cart::where('id', $id)
    ->where('session_id', session()->getId())
    ->delete();

    return redirect()->back();
}

}
