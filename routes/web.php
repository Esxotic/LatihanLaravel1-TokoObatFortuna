<?php

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
        'heading' => 'Dashboard',
        'active' => 'Dashboard'
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'autenticate']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar-obat', function () {
    return view('daftar-obat.index', [
        'title' => 'Daftar Obat',
        'heading' => 'Daftar Obat',
        'active' => 'Daftar Obat',
        'obats' => obat::all()
    ]);
});
Route::get('/tambahData', function () {
    return view('daftar-obat.fromTambah', [
        'title' => 'Form Tambah Data',
        'heading' => 'Form Tambah Data',
        'active' => 'Daftar Obat',
    ]);
});
