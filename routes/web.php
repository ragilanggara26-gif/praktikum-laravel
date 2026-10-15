<?php

use App\Http\Controllers\SuratKeluarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

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

Route::get('/index', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

route::get('/surat-keluar', [SuratKeluarController::class, 'index'])->name('surat-keluar.index');
route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])->name('surat-keluar.show');

