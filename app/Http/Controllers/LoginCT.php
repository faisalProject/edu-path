<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginCT extends Controller
{
    public function index() {
        if ( Auth::check() ) {
            if ( Auth::user()->role === 'superadmin' ) {
                return redirect()->route('superadmin_dashboard');
            } elseif ( Auth::user()->role === 'teacher' ) {
                return redirect()->route('teacher_dashboard');
            } elseif ( Auth::user()->role === 'user' ) {
                return redirect()->route('user_dashboard');
            }
        } else {
            return view("login");
        }
    }

    public function store( LoginRequest $request ) {
        $user = $request->validated();
        // dd($user);

        if ( Auth::attempt($user) ) {
            if ( Auth::user()->role === 'superadmin' ) {
                Alert::success('Berhasil', 'Selamat datang Superadmin!');
                return redirect()->route('superadmin_dashboard');
            } elseif ( Auth::user()->role === 'teacher' ) {
                Alert::success('Berhasil', 'Selamat datang di Edu Path!');
                return redirect()->route('teacher_dashboard');
            } elseif ( Auth::user()->role === 'user' ) {
                Alert::success('Berhasil', 'Selamat datang di Edu Path!');
                return redirect()->route('user_dashboard');
            }
        } else {
            Alert::error('Gagal', 'Email atau password salah!');
            return redirect('login');
        }
    }

}
