<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'formlogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');


Route::get('/register',[AuthController::class,'formregister']);
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::get('/kategori',[KategoriController::class,'index']);
Route::post('/kategori',[KategoriController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/kategori',[KategoriController::class,'index']);
Route::post('/kategori',[KategoriController::class,'store'])->name('kategori');
