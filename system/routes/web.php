<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [BukuController::class, 'home']);

Route::get( 'buku', [BukuController::class, 'index']);
Route::get( 'buku/tambah', [BukuController::class, 'tambah']);