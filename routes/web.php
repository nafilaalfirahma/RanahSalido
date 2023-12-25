<?php

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
    return view('dashboard');
});

Route::get('/pengelolaan_perkebunan', [PengelolaanKebunController::class, 'index'])-> name('pengelolaan_perkebunan.index');

Route::get('/pengelolaan_perkebunan/create', [PengelolaanKebunController::class, 'create'])-> name('pengelolaan_perkebunan.create');

Route::post('/pengelolaan_perkebunan/store', [PengelolaanKebunController::class, 'store'])-> name('pengelolaan_perkebunan.store');

Route::post('/pengelolaan_perkebunan/update', [PengelolaanKebunController::class, 'update'])-> name('pengelolaan_perkebunan.update');

Route::post('/pengelolaan_perkebunan/destroy', [PengelolaanKebunController::class, 'destroy'])-> name('pengelolaan_perkebunan.destroy');
