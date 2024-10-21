<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterCT extends Controller
{
    public function index() {
        return view('register');
    }

    public function store ( RegisterRequest $request )
    {
        
        $user = $request->validated();

        $email = User::all();
        foreach ( $email as $e ) {
            if( $user['email'] === $e['email'] ) {
                Alert::error('Gagal', 'Email sudah pernah digunakan');
                return redirect()->route('register');
            }
        }

        // cek password
        if ( $user['password'] !== $request->input('password-confirmation') ) {
            Alert::error('Gagal', 'Konfirmasi password tidak sesuai');
            return redirect()->route('register');
        }

        User::create($user);
        Alert::success('Berhasil', 'Akun berhasil didaftarkan');
        return redirect()->route('login');
    }
}
