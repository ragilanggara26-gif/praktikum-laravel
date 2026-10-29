<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('surat-masuk', SuratMasukController::class)
    ->parameters(['surat-masuk' => 'id']);

Route::resource('surat-keluar', SuratKeluarController::class)
    ->parameters(['surat-keluar' => 'id']);
