<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\KategoriController;


use App\Http\Controllers\PeminjamanController;


Route::get('/', fn()=>view('login'))->name('login');

Route::post('/login',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'logout']);

Route::middleware(['auth','role:admin'])->group(function(){
    Route::view('/admin','admin');
});

Route::middleware(['auth','role:petugas'])->group(function(){
    Route::view('/petugas','petugas');
});

Route::middleware(['auth','role:peminjam'])->group(function(){
    Route::view('/peminjam','peminjam');
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::resource('alat', AlatController::class);
});

Route::middleware(['auth','role:admin'])->group(function(){
    Route::resource('kategori', KategoriController::class);
});

// PEMINJAM
Route::middleware(['auth','role:peminjam'])->group(function(){
    Route::get('/pinjam',[PeminjamanController::class,'create']);
    Route::post('/pinjam',[PeminjamanController::class,'store']);
    Route::get('/peminjaman',[PeminjamanController::class,'index']);
    Route::get('/kembali/{id}',[PeminjamanController::class,'kembali']);
});

// PETUGAS
Route::middleware(['auth','role:petugas'])->group(function(){
    Route::get('/approve',[PeminjamanController::class,'approveList']);
    Route::get('/approve/{id}',[PeminjamanController::class,'approve']);
});