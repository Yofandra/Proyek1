<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proccessLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('pageAdmin');
        }
        if (Auth::guard('guru')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('pageGuru');
        }
        if (Auth::guard('siswa')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('pageSiswa');
        }
 
        return back()->withErrors([
            'username' => 'Username atau Password yang anda masukkan salah!',
        ])->onlyInput('username');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function username(){
        return 'username';
    }

}

