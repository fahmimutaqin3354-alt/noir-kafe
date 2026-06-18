<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $search = $request->search;

    $menus = Menu::where('nama_kopi', 'like', "%".$search."%")
                    ->get();

    return view('menu.index', compact('menus'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $gambar = null;

    if ($request->hasFile('gambar')) {

        $gambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('images'), $gambar);
    }

    Menu::create([
        'nama_kopi' => $request->nama_kopi,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'kategori' => $request->kategori,
        'gambar' => $gambar,
        'jenis_menu' => $request->jenis_menu,

    ]);

    return redirect('/menu');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::findOrFail($id);

        return view('menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $menu = Menu::findOrFail($id);

    if ($request->hasFile('gambar')) {

        $gambar = time().'.'.$request->gambar->extension();

        $request->gambar->move(public_path('images'), $gambar);

        $menu->gambar = $gambar;
    }

    $menu->nama_kopi = $request->nama_kopi;
    $menu->harga = $request->harga;
    $menu->deskripsi = $request->deskripsi;
    $menu->kategori = $request->kategori;
    $menu->jenis_menu = $request->jenis_menu;

    $menu->save();

    return redirect()->route('menu.index')
                     ->with('success', 'Menu berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->delete();

        return redirect()->route('menu.index')
                     ->with('success', 'Menu berhasil dihapus');
    }
}
