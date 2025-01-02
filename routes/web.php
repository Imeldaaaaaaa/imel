<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home'); // Halaman utama
});

Route::get('/about', function () {
    return view('about'); // Halaman about
});

Route::get('/profile', function () {
    return view('profile'); // Halaman profile
});

Route::get('/contact', function () {
    return view('contact'); // Halaman contact
});
