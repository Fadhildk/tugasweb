<?php

use App\Http\Controllers\HubungiController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.homepage'));
Route::get('/tentangkami', fn() => view('pages.tentangkami'));
Route::get('/layanankami', fn() => view('pages.layanankami'));
Route::get('/kontak', fn() => view('pages.kontak'));
Route::get('/artikel', fn() => view('pages.artikel'));

// Halaman Hubungi Kami (GET)
Route::get('/hubungi', fn() => view('pages.hubungi'))->name('hubungi');

// Aksi kirim form hubungi (POST)
Route::post('/hubungi', [HubungiController::class, 'kirim'])->name('hubungi.kirim');

Route::get('/layanankami', function () {
    return view('pages.layanankami');
});
