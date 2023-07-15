<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [UserController::class,'index'])->name('index');

Route::get('/create', [UserController::class,'create'])->name('create');
