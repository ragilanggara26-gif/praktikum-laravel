<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

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

Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');

