<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin(){
        $admin = Admin::first();
        if ($admin) {
            $namaAdmin = $admin->nama_admin; // Mengakses properti nama_admin dari objek tunggal admin
            // Lakukan operasi lain dengan $namaAdmin
        }
        return view('admin.layoutAdmin', compact('admin'));
    }

    public function guru(){
        $guru = Guru::first();
        if ($guru) {
            $namaGuru = $guru->nama_guru; // Mengakses properti nama_admin dari objek tunggal admin
            // Lakukan operasi lain dengan $namaAdmin
        }
        return view('guru.layoutGuru', compact('guru'));
    }

    public function siswa(){
        $siswa = Siswa::all();
        if($siswa) {
            $namaSiswa = $siswa->nama_siswa;
        }
        return view('siswa.layoutSiswa', compact('siswa'));
    }
}
