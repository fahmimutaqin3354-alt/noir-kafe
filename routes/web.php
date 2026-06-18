<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;


Route::post('/cart/add/{id}',
    [CartController::class, 'add'])
    ->name('cart.add');

Route::get('/cart',
    [CartController::class, 'index'])
    ->name('cart.index');

Route::post('/checkout',
    [CartController::class, 'checkout'])
    ->name('checkout');

Route::get('/checkout-success', function () {

    return view('checkout.success');

})->name('checkout.success');


Route::get('/pesanan', [PesananController::class, 'index'])
    ->name('pesanan.index');


Route::get('/pesanan/status/{id}',
    [PesananController::class, 'updateStatus'])
    ->name('pesanan.status');

Route::get('/cart/cancel',
    [CartController::class, 'cancel'])
    ->name('cart.cancel');
    Route::get('/cart', [CartController::class, 'index']);

    Route::get('/status-pesanan',
    [PesananController::class, 'statusPesanan'])
    ->name('status.pesanan');

    Route::get('/cart/increase/{id}',
    [CartController::class, 'increase'])
    ->name('cart.increase');

Route::get('/cart/decrease/{id}',
    [CartController::class, 'decrease'])
    ->name('cart.decrease');

    Route::get('/cart/plus/{id}',
[CartController::class,'plus']);

Route::get('/cart/min/{id}',
[CartController::class,'min']);

Route::get('/cart/remove/{id}',
    [CartController::class, 'remove'])
    ->name('cart.remove');


    Route::get('/reservasi',
    [ReservasiController::class,'index']);

Route::post('/reservasi/store',
    [ReservasiController::class,'store'])
    ->name('reservasi.store');

Route::get('/admin/reservasi',
    [ReservasiController::class,'admin'])
    ->middleware('auth');

    Route::post('/reservasi/status/{id}',
[ReservasiController::class,'updateStatus']);

Route::get('/status-reservasi', [ReservasiController::class, 'status'])
    ->name('reservasi.status');

Route::put('/payment/{id}',
[PesananController::class, 'payment']);

/*
|--------------------------------------------------------------------------
| ROUTE PELANGGAN
|--------------------------------------------------------------------------
*/

Route::view('/', 'landing');

Route::get('/menu-pelanggan',
    [PelangganController::class, 'index']);



Route::get('/pesan/{id}',
    [PelangganController::class, 'pesan']);

    Route::get('/pesanan-berhasil',
    function () {
        return view('pelanggan.sukses');
    })->name('pesanan.sukses');

/*
|--------------------------------------------------------------------------
| ROUTE ADMIN
|--------------------------------------------------------------------------
*/
 Route::resource('penjualan', PenjualanController::class);

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',
        [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('menu', MenuController::class);

    Route::resource('penjualan', PenjualanController::class);

});





/*
|--------------------------------------------------------------------------
| PROFILE
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/profile',
        [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});

require __DIR__.'/auth.php';
