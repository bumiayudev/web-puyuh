<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/video', function () {
    return view('video');
})->name('video');
