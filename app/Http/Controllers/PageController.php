<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
      return redirect()->route('admin.index');
    }

    public function guru(){
      return redirect()->route('guru.dashboard');
    }

    public function siswa(){
        // $siswa = Siswa::all();
        // if($siswa) {
        //     $namaSiswa = $siswa->nama_siswa;
        // }
        // return view('siswa.layoutSiswa', compact('siswa'));
      return redirect()->route('siswa.dashboard');

    }
}
