<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Soal;
use App\Models\Nilai;
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
        $soal = Soal::all(); // mendapatkan data dari kelas
        return view('siswa.kuis.kuis', ['soal' => $soal]);

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
        $soal = Soal::all();
        
        $score = 0;
        foreach($soal as $Soal){
            $jawab = $request->get('jawab_' . $Soal->id);
            if($jawab == $Soal->opsi_benar){
                $score ++;
            }
        }
        $jmlh_soal = Soal::count();
        $nilai_akhir = ($score / $jmlh_soal) * 100;
        

        $nilai = new Nilai();
        $nilai->nilai = $nilai_akhir;
        $nilai->save();
        return redirect()->route('kuis.tampil_kuis')
            ->with('success', 'Kuis Sudah Dikerjakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        public function tampil_kuis(){
        $kategori = Kategori::all();
        return view('siswa.kuis.index', ['kategori' => $kategori]);
    }
}
