<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', fn()=>view('login'));

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

