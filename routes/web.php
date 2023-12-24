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
    return view('home');
});

Route::get('/pengelolaan_perkebunan', [ShowroomController::class, 'index'])-> name('pengelolaan_perkebunan.index');

Route::get('/pengelolaan_perkebunan/create', [ShowroomController::class, 'create'])-> name('pengelolaan_perkebunan.create');

