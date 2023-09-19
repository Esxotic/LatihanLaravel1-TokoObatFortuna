<?php

use App\Http\Controllers\DaftarObatController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Models\Obat;
use App\Models\Transaksi;
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
    return view('index', [
        'title' => 'Dashboard',
        'heading' => 'Dashboard',
        'obats' => Obat::all(),
        'transaksis' => Transaksi::all()
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/daftarObat', DaftarObatController::class, ['parameters' => ['daftarObat' => 'obat']])->middleware('auth'); /* parameters digunakan untuk mengubah parameter pada route resource edit. parameter aslinya adalah daftarObat, ini bisa diganti manual pada route edit di $obat */

Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::post('/transaksi', [TransaksiController::class, 'store']);
Route::get('/transaksi/{id}', [TransaksiController::class, 'getObat'])->name('getObat');

Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('laporan/cetakLaporan', [LaporanController::class, 'cetak']);

Route::get('/temp', function () {
    return view('laporan.laporan_pdf', [
        'transaksis' => Transaksi::all()
    ]);
});
