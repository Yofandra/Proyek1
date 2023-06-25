<?php

namespace App\Http\Controllers\Guru;

use PDF;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\Siswa;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function show($nip, Request $request)
    {
        $nipGuru = Auth::user()->nip; // NIP guru yang sedang login

        $kelas = Kelas::where('guru_nip', $nipGuru)->get();

        // Mengambil siswa yang terdaftar dalam kelas
        $siswa = Siswa::whereIn('kelas_idKelas', $kelas->pluck('idKelas'))->get();

        // Filter siswa berdasarkan pencarian berdasarkan nama
        if ($request->has('search')) {
            $siswa = Siswa::whereIn('kelas_idKelas', $kelas->pluck('idKelas'))
            ->where('nama', 'LIKE', '%' . $request->input('search') . '%')
            ->get();
        }
        
        // Mengambil nilai siswa berdasarkan siswa yang terdaftar
        $nilai = Nilai::whereIn('siswa_nis', $siswa->pluck('nis'))
            ->orderBy('kategori_id')
            ->orderBy('waktu_pengerjaan', 'desc')
            ->get();

        $kategori = Kategori::where('guru_nip', $nip)->get();

        return view('guru.nilai.index', ['nilai' => $nilai, 'kategori'=>$kategori, 'kelas'=>$kelas]);
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
        $nip = Auth::user()->nip;
        Nilai::find($id)->delete();
        return redirect()->route('nilai.show', ['nilai' => $nip])->with('success', 'Data Nilai Berhasil Dihapus');
    }

    public function cetak_pdf(Request $request)
    {
        $nip = Auth::user()->nip;

        // Mengambil kelas yang diajar oleh guru
        $kelas = Kelas::where('guru_nip', $nip)->get();

        // Filter berdasarkan kelas
        $kelasFilter = $request->get('kelas');

        if ($kelasFilter) {
            $kelas = $kelas->where('idKelas', $kelasFilter);
        }

        // Mengambil siswa yang terdaftar dalam kelas
        $siswa = Siswa::whereIn('kelas_idKelas', $kelas->pluck('idKelas'))->get();

        $nilai = Nilai::whereIn('siswa_nis', $siswa->pluck('nis'))
            ->orderBy('kategori_id')
            ->orderBy('waktu_pengerjaan', 'desc')
            ->get();
            
        $pdf = PDF::loadview('guru.nilai.cetak_pdf', ['nilai' => $nilai]);
        return $pdf->stream();
    }

    public function resetData(Request $request)
    {
        $id = $request->get('kategori_id');
        Nilai::where('kategori_id', $id)->delete();

        return redirect()->back()->with('success', 'Data berhasil direset.');
    }
}
