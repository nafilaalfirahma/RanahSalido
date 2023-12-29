<?php

use App\Http\Controllers\PengelolaanKebunController;
use App\Http\Controllers\PetaPersebaranController;
use App\Http\Controllers\PengajuanPemesananController;
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
    return view('home_awal');
});

Route::get('/login', function () {
    return view('home');
});

// Pengelolaan Kebun
Route::get('/pengelolaan_perkebunan', [PengelolaanKebunController::class, 'create'])->name('pengelolaan_perkebunan.create');

Route::get('/pengelolaan_perkebunan', [PengelolaanKebunController::class, 'index'])->name('pengelolaan_perkebunan.index');

Route::get('/pengelolaan_perkebunan/create', [PengelolaanKebunController::class, 'create'])->name('pengelolaan_perkebunan.create');


//Peta Sebaran
Route::get('peta_persebaran', [PetaPersebaranController::class, 'peta_persebaran'])->name('peta_persebaran');


// Route Pemesanan 
Route::get('/pemesanan/create', [PengajuanPemesananController::class, 'create'])->name('pemesanan.create');

Route::post('/pemesanan/store', [PengajuanPemesananController::class, 'store'])->name('pemesanan.store');

Route::get('/pemesanan/index', [PengajuanPemesananController::class, 'index'])->name('pemesanan/index');

Route::get('/pemesanan/update/{id}', [PengajuanPemesananController::class, 'update'])->name('pemesanan.update');

Route::post('/pemesanan/replace/{id}', [PengajuanPemesananController::class, 'replace'])->name('pemesanan.replace');

Route::delete('/pemesanan/{id}', [PengajuanPemesananController::class, 'destroy'])->name('pemesanan.destroy');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    
    Route::get('peta_persebaran', [PetaPersebaranController::class, 'index'])->name('admin.peta_persebaran');

    Route::get('tambah_data_persebaran', [PetaPersebaranController::class, 'create'])->name('admin.tambah_data_persebaran');

    Route::post('store_data_persebaran', [PetaPersebaranController::class, 'store'])->name('admin.store_data_persebaran');

    Route::get('hapus_data_peta/{id}', [PetaPersebaranController::class, 'destroy'])->name('admin.hapus_data_peta');

    Route::get('edit_data_persebaran/{id}', [PetaPersebaranController::class, 'edit'])->name('admin.edit_data_persebaran');

    Route::post('update_data_persebaran/{id}', [PetaPersebaranController::class, 'update'])->name('admin.update_data_persebaran');
  
});
