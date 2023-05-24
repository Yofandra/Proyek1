<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        
        // return view('admin.layoutAdmin');
        return redirect()->route('admin.index');

    }

    public function guru(){
        // return view('guru.layoutGuru');
        return redirect()->route('guru.dashboard');
    }

    public function siswa(){
        return redirect()->route('siswa.dashboard');
        // return view('siswa.layoutSiswa');
    }
}
