<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Soal;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasId = session('kelas_idKelas');
        $nipGuru = Kelas::where('idKelas', $kelasId)->value('guru_nip');

        // Mengambil siswa yang termasuk dalam kelas siswa
        $siswa = Siswa::where('kelas_idKelas', $kelasId)->get();

        // Mengambil data kategori berdasarkan NIP guru dan siswa yang termasuk dalam kelas
        $kategori = Kategori::where('guru_nip', $nipGuru)->get();

        return view('siswa.kuis.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $waktu = now(); // Mendapatkan waktu saat ini
        $soal = Soal::all();
        
        $score = 0;
        foreach($soal as $Soal){
            $jawab = $request->get('jawab_' . $Soal->id);
            if($jawab == $Soal->opsi_benar){
                $score ++;
            }
        }
        $kategoriId = $request->get('kategori_id');
        $jmlh_soal = Soal::where('kategori_id', $kategoriId)->count();
        $score_akhir = ($score / $jmlh_soal) * 100;
        $nilai_akhir = round($score_akhir, 2);

        $siswa = Siswa::find($request->siswa_nis);
        $kategori = Kategori::find($request->kategori_id);

        // Menyimpan data nilai
        $nilai = new Nilai;
        $nilai->nilai = $nilai_akhir;
        $nilai->waktu_pengerjaan = $waktu;

        $siswa->kategori()->attach($kategori, ['nilai' => $nilai->nilai, 'waktu_pengerjaan'=>$nilai->waktu_pengerjaan]);
        return redirect()->route('kuis.index')
            ->with('success', 'Jawaban anda telah disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soal = Soal::where('kategori_id', $id)->get();
        return view('siswa.kuis.kuis', compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tampil_kuis($kelasId){
        // $kategori = Kategori::all();
        // return view('siswa.kuis.index', ['kategori' => $kategori]);

        $nipGuru = Kelas::where('idKelas', $kelasId)->value('guru_nip');

        // Mengambil siswa yang termasuk dalam kelas siswa
        $siswa = Siswa::where('kelas_idKelas', $kelasId)->get();

        // Mengambil data kategori berdasarkan NIP guru dan siswa yang termasuk dalam kelas
        $kategori = Kategori::where('guru_nip', $nipGuru)->get();

        return view('siswa.kuis.index', ['kategori' => $kategori]);
    }
}
