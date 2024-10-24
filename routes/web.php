<?php

use App\Http\Controllers\LoginCT;
use App\Http\Controllers\RegisterCT;
use App\Http\Controllers\user\CourseCT;
use App\Http\Controllers\user\DashboardCT;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    if ( Auth::check() ) {
        if ( Auth::user()->role === 'superadmin' ) {
            return redirect()->route('superadmin_dashboard');
        } elseif ( Auth::user()->role === 'teacher' ) {
            return redirect()->route('teacher_dashboard');
        } elseif ( Auth::user()->role === 'user' ) {
            return redirect()->route('user_dashboard');
        }
    } else {
        return view('index');
    }
});

Route::get('/login', [LoginCT::class, 'index'])->name('login');
Route::post('/login', [LoginCT::class, 'store'])->name('login_to_system');
Route::get('/register', [RegisterCT::class, 'index'])->name('register');
Route::post('/register', [RegisterCT::class, 'store'])->name('register_account');

Route::middleware([AuthMiddleware::class . ':user'])->group(function(){
    Route::get('/course', [CourseCT::class, 'index'])->name('user_course');
    Route::get('/dashboard', [DashboardCT::class, 'index'])->name('user_dashboard');
});

