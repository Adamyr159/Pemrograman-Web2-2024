<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/salam', function () {
    return "Selamat Datang Adam di Laravel 11";
});

Route::get('/profile', function () {
    return "Halaman Profile";
});


// Praktikum Laravel 2
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


// Praktikum Laravel 3
Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);
Route::get('/dashboard/pasien', [PasienController::class, 'index']);

// Praktikum Laravel 4
Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);
