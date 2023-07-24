<?php

use App\Http\Controllers\paketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/sign-up', function () {
    return view('regist');
});

Route::get('/ticket-reservasi', function () {
    return view('paket');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/pemesanan', function () {
    return view('pemesanan');
});

Route::get('pemesanan/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/admin', function () {
    return view('login');
});

// Route::get('/admin/pesanan', function () {
//     return view('pesanan');
// });

// Route::get('/admin/listpaket', function () {
//     return view('listpaket');
// });

// Route::get('/admin/tgl_tutup', function () {
//     return view('tgl_tutup');
// });



//backend

Route::resource('admin/listpaket', paketController::class);
// Route::resource('admin/listpaket-new', paketController::class);

// Route::get('paket', [paketController::class, 'index']);
// Route::get('paket/{id}', [paketController::class, 'detail'])->where('id', '[0-9]+');
