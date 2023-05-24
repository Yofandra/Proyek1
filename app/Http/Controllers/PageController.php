<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        return view('admin.layoutAdmin');
    }

    public function guru(){
        return view('guru.layoutGuru');
    }

    public function siswa(){
        return view('siswa.layoutSiswa');
    }
}
