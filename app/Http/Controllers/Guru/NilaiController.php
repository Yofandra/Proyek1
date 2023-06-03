<?php

namespace App\Http\Controllers\Guru;

use PDF;
use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::all();
        return view('guru.nilai.index', compact('nilai'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nip)
    {
        $guru = Guru::find($nip);

        // Mengambil kelas yang diajar oleh guru
        $kelas = $guru->kelas;

        // Mengambil siswa yang terdaftar dalam kelas
        $siswa = Siswa::whereIn('kelas_idKelas', $kelas->pluck('idKelas'))->get();

        // Mengambil nilai siswa berdasarkan siswa yang terdaftar
        $nilai = Nilai::whereIn('siswa_nis', $siswa->pluck('nis'))->get();

        return view('guru.nilai.index', ['guru' => $guru, 'nilai' => $nilai]);
    
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
    public function cetak_pdf(){
        $nilai = Nilai::all();
        $pdf = PDF::loadview('guru.nilai.cetak_pdf', ['nilai'=>$nilai]);
        return $pdf->stream();
    }
}
