<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Index');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/mahasiswa', function () {
    return view('Mahasiswa');
});

Route::get('/profile', function () {
    $nama = 'Hafizh';
    return view('Profile' ,compact('nama'));
});