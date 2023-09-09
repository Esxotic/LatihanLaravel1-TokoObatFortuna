<?php

use App\Http\Controllers\DaftarObatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\obat;
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
        'heading' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/daftarObat', DaftarObatController::class, ['parameters' => ['daftarObat' => 'obat']])->middleware('auth'); /* parameters digunakan untuk mengubah parameter pada route resource edit. parameter aslinya adalah daftarObat, ini bisa diganti manual pada route edit di $obat */
Route::get('/transaksi', function () {
    return view('transaksi.index', [
        'title' => 'Transaksi',
        'heading' => 'Transaksi'
    ]);
});
