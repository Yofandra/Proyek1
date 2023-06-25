<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeGuruController extends Controller
{
    public function index(){
        $nipGuru = Auth::user()->nip; // NIP guru yang sedang login

        $kelas = Kelas::where('guru_nip', $nipGuru)->get();

        return view('guru.index', compact('kelas'));
        // return view('guru.index');
    }
    public function tampilSiswa(){
        $nipGuru = Auth::user()->nip; // NIP guru yang sedang login

        $guru = Guru::with('kelas.siswa')->where('nip', $nipGuru)->first();

        $siswa = collect(); // Membuat koleksi kosong untuk menampung siswa

        foreach ($guru->kelas as $kelas) {
            $siswa = $siswa->merge($kelas->siswa);
        }
        $kelas = Kelas::where('guru_nip', $nipGuru)->get();// Mengambil daftar kelas untuk digunakan sebagai opsi filter
        // Tambahkan logika filter kelas
        $kelasFilter = request()->get('kelas');
        if ($kelasFilter) {
            $siswa = $siswa->where('kelas_idKelas', $kelasFilter);
        }

        return view('guru.siswa', compact('siswa','kelas'));
    }
}
