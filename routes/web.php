<?php

use App\Http\Controllers\LoginCT;
use App\Http\Controllers\RegisterCT;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('/login', [LoginCT::class, 'index'])->name('login');
Route::get('/register', [RegisterCT::class, 'index'])->name('register');
Route::post('/register', [RegisterCT::class, 'store'])->name('register_account');
