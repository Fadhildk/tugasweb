<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/layanankami', function () {
    return view('layanankami');
});

Route::get('/kontak', function () {
    return view('kontak');
});
