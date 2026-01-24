<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('home', [
        'banners' => DB::table('banners')->orderBy('created_at', 'asc')->get(),
    ]);
})->name('home');
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/video', function () {
    $row = DB::table('videos')->first();
    $videos = DB::table('videos')->orderBy('created_at', 'desc')->get();
    return view('video', compact('row', 'videos'));
})->name('video');
Route::get('/product-doq', function () {
    return view('product-doq');
})->name('product-doq');
Route::get('/product-pst', function () {
    return view('product-pst');
})->name('product-pst');
Route::get('/cage', function () {
    return view('cage');
})->name('cage');
Route::get('/starter-pack', function () {
    return view('starter-pack');
})->name('starter-pack');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login_submit'])->name('login.submit');
Route::middleware(['middleware' => 'auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('dashboard', ['count_users' => DB::table('users')->count(),
        'count_videos' => DB::table('videos')->count(),
        'count_banners' => DB::table('banners')->count(),]);
    })->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/users', [UserController::class, 'store'])->name('user.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/banners', [BannerController::class, 'index'])->name('banner.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('banner.create');
    Route::post('/banners', [BannerController::class, 'store'])->name('banner.store');
    Route::get('/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
    Route::put('/banners/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');
    Route::get('/videos', [VideoController::class, 'index'])->name('video.index');
    Route::get('/videos/create', [VideoController::class, 'create'])->name('video.create');
    Route::post('/videos', [VideoController::class, 'store'])->name('video.store');
    Route::get('/videos/{id}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('/videos/{id}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('/videos/{id}', [VideoController::class, 'destroy'])->name('video.destroy');
});
