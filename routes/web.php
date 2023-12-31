<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengelolaanKebunController;
use App\Http\Controllers\InformasiPasarController;
use App\Http\Controllers\PetaPersebaranController;
use App\Http\Controllers\PengajuanPemesananController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('home_awal');});

Route::get('/', [SessionController::class, 'index'])->name('home');

Route::get('/', [SessionController::class, 'indexLogin'])->name('indexLogin');

Route::post('/home', [SessionController::class, 'login'])->name('login');

Route::get('/login', [AdminController::class, 'index'])->name('home');

Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

// Pengelolaan Kebun
//Route::get('/pengelolaan_perkebunan', [PengelolaanKebunController::class, 'create'])->name('pengelolaan_perkebunan.create');

Route::get('/pengelolaan_perkebunan/index', [PengelolaanKebunController::class, 'index'])->name('pengelolaan_perkebunan.index');

Route::get('/pengelolaan_perkebunan/create', [PengelolaanKebunController::class, 'create'])->name('pengelolaan_perkebunan.create');

Route::post('/pengelolaan_perkebunan/store', [PengelolaanKebunController::class, 'store'])->name('pengelolaan_perkebunan.store');

Route::get('/pengelolaan_perkebunan/edit/{id}', [PengelolaanKebunController::class, 'edit'])->name('pengelolaan_perkebunan.edit');

Route::post('/pengelolaan_perkebunan/update/{id}', [PengelolaanKebunController::class, 'update'])->name('pengelolaan_perkebunan.update');

Route::get('/pengelolaan_perkebunan/destroy/{id}', [PengelolaanKebunController::class, 'destroy'])->name('pengelolaan_perkebunan.destroy');


//Peta Sebaran
Route::get('peta_persebaran', [PetaPersebaranController::class, 'peta_persebaran'])->name('peta_persebaran');


// Route Pemesanan 
Route::get('/pemesanan/create', [PengajuanPemesananController::class, 'create'])->name('pemesanan.create');

Route::post('/pemesanan/store', [PengajuanPemesananController::class, 'store'])->name('pemesanan.store');

Route::get('/pemesanan/index', [PengajuanPemesananController::class, 'index'])->name('pemesanan.index');

Route::get('/pemesanan/update/{id}', [PengajuanPemesananController::class, 'update'])->name('pemesanan.update');

Route::post('/pemesanan/replace/{id}', [PengajuanPemesananController::class, 'replace'])->name('pemesanan.replace');

Route::get('/pemesanan/detailsPengajuan/{id}', [PengajuanPemesananController::class, 'show'])->name('pemesanan.show');

Route::delete('/pemesanan/{id}', [PengajuanPemesananController::class, 'destroy'])->name('pemesanan.destroy');

// Route Informasi Pasar
Route::get('/informasi_pasar/create', [InformasiPasarController::class, 'create'])->name('informasi_pasar.create');

Route::post('/informasi_pasar/store', [InformasiPasarController::class, 'store'])->name('informasi_pasar.store');

Route::get('/informasi_pasar/index', [InformasiPasarController::class, 'index'])->name('informasi_pasar.index');

Route::get('/informasi_pasar/update/{id}', [InformasiPasarController::class, 'update'])->name('informasi_pasar.update');

Route::post('/informasi_pasar/replace/{id}', [InformasiPasarController::class, 'replace'])->name('informasi_pasar.replace');

Route::delete('/informasi_pasar/{id}', [InformasiPasarController::class, 'destroy'])->name('informasi_pasar.destroy');

// Route::middleware(['guest'])->group(function () {
//     Route::get('/', [HomeController::class, 'index'])->name('home_awal');

//     Route::get('/login', [LoginController::class, 'indexLogin'])->name('loginPage');

//     Route::post('/login', [LoginController::class, 'login'])->name('login');

//     Route::get('/register', [AuthRegisterController::class, 'registerForm'])->name('registerForm');

//     Route::post('/login', [AuthRegisterController::class, 'register'])->name('register');

// });

Auth::routes();


// Log out Route
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home_awal', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //Normal User Routes List 
// Route::middleware(['auth', 'user-access::user'])->group(function () {

//     Route::get('/home', [HomeController::class, 'userHome'])->name('userHome');

//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//     //Submit Pengajuan_Pemesanan cuma bisa user yg udh login
//     Route::post('/pemesanan/store', [PengajuanPemesananController::class, 'store'])->name('pemesanan.store');

//     // Tampilan pemesanan
//     Route::get('/pemesanan/indexUser', [PengajuanPemesananController::class, 'indexUser'])->name('pemesanan.indexUser');
// });

// Admin Route List 
// Route::middleware(['auth', 'user-access:admin'])->group(function () {

//     Route::get('/adminHome', [HomeController::class, 'adminHome'])->name('adminHome');

//     Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//     Route::post('/pemesanan/index', [PengajuanPemesananController::class, 'indexAdmin'])->name('pemesanan.indexAdmin');

//     Route::get('/pemesanan/update/{id}', [PengajuanPemesananController::class, 'update'])->name('pemesanan.update');

//     Route::post('/pemesanan/replace/{id}', [PengajuanPemesananController::class, 'replace'])->name('pemesanan.replace');

//     Route::delete('/pemesanan/{id}', [PengajuanPemesananController::class, 'destroy'])->name('pemesanan.destroy');
// });

 

Route::prefix('admin')->group(function () {
    
    Route::get('peta_persebaran', [PetaPersebaranController::class, 'index'])->name('admin.peta_persebaran');

    Route::get('tambah_data_persebaran', [PetaPersebaranController::class, 'create'])->name('admin.tambah_data_persebaran');

    Route::post('store_data_persebaran', [PetaPersebaranController::class, 'store'])->name('admin.store_data_persebaran');

    Route::get('hapus_data_peta/{id}', [PetaPersebaranController::class, 'destroy'])->name('admin.hapus_data_peta');

    Route::get('edit_data_persebaran/{id}', [PetaPersebaranController::class, 'edit'])->name('admin.edit_data_persebaran');

    Route::post('update_data_persebaran/{id}', [PetaPersebaranController::class, 'update'])->name('admin.update_data_persebaran');


  
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // Auth::routes();

// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
