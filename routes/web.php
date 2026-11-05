<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;


// // Route dengan parameter
// Route::get('/surat-masuk/{id}', function ($id) {
//     return 'Detail Surat Masuk Dengan ID:' . $id;
// });

// //Named Route
// Route::get('/surat-masuk', function () {
//     return view('index');
// });

//Check Named Route
//php artisan route:list


// Hanya untuk yang BELUM login
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');
    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.submit');
});

// Hanya untuk yang SUDAH login
Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');

    // ---------- SURAT MASUK ----------
    // Create/store/edit/update/destroy DIDEFINISIKAN LEBIH DULU
    // agar /surat-masuk/create tidak tertangkap oleh /surat-masuk/{id}
    Route::resource('surat-masuk', SuratMasukController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-masuk' => 'id'])
        ->middleware('can:manage-letters');

    Route::resource('surat-masuk', SuratMasukController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-masuk' => 'id']);

    // ---------- SURAT KELUAR ----------
    Route::resource('surat-keluar', SuratKeluarController::class)
        ->except(['index', 'show'])
        ->parameters(['surat-keluar' => 'id'])
        ->middleware('can:manage-letters');

    Route::resource('surat-keluar', SuratKeluarController::class)
        ->only(['index', 'show'])
        ->parameters(['surat-keluar' => 'id']);
});
