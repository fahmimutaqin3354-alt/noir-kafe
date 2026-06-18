<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
{
    $menus = Menu::all();
    $pesanans = Pesanan::all();

    return view('dashboard', compact('menus', 'pesanans'));
}
}
