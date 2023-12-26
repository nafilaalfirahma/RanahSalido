<?php

use App\Http\Controllers\PengelolaanKebunController;
use App\Http\Controllers\PetaPersebaranController;
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

Route::get('/pengelolaan_perkebunan', [PengelolaanKebunController::class, 'index'])->name('pengelolaan_perkebunan.index');

Route::get('/pengelolaan_perkebunan/create', [PengelolaanKebunController::class, 'create'])->name('pengelolaan_perkebunan.create');

Route::get('peta_persebaran', [PetaPersebaranController::class, 'peta_persebaran'])->name('peta_persebaran');

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
