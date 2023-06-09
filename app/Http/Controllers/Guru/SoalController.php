<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use App\Models\Soal;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nip = session('nip');
        $kategori = Kategori::where('guru_nip', $nip)->get();
        return view('guru.kuis.index', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nip = session('nip');
        $kategori = Kategori::where('guru_nip', $nip)->get();
        return view('guru.kuis.create', ['kategori' => $kategori]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'soal' => 'required',
                'opsi_a' => 'required',
                'opsi_b' => 'required',
                'opsi_c' => 'required',
                'opsi_d' => 'required',
                'opsi_benar' => 'required',
            ]);

            $soal = new Soal();
            $soal->soal = $request->get('soal');
            $soal->opsi_a = $request->get('opsi_a');
            $soal->opsi_b = $request->get('opsi_b');
            $soal->opsi_c = $request->get('opsi_c');
            $soal->opsi_d = $request->get('opsi_d');
            $soal->opsi_benar = $request->get('opsi_benar');

            $kategori = new Kategori;
            $kategori->id = $request->get('kategori');

            $soal->kategori()->associate($kategori);
            $soal->save();

            return redirect()->route('soal.create')
                ->with('success', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori = Kategori::find($id);
        $soal = Soal::where('kategori_id', $id)->get();
        return view('guru.kuis.list_soal', compact('soal','kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Soal = Soal::find($id);
        return view('guru.kuis.edit', compact('Soal'));
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
        
        $request->validate([
                'soal' => 'required',
                'opsi_a' => 'required',
                'opsi_b' => 'required',
                'opsi_c' => 'required',
                'opsi_d' => 'required',
                'opsi_benar' => 'required',
            ]);

            $soal = Soal::where('id', $id)->first();
            $soal->soal = $request->get('soal');
            $soal->opsi_a = $request->get('opsi_a');
            $soal->opsi_b = $request->get('opsi_b');
            $soal->opsi_c = $request->get('opsi_c');
            $soal->opsi_d = $request->get('opsi_d');
            $soal->opsi_benar = $request->get('opsi_benar');
            $soal->save();

            return redirect()->route('soal.index')
                ->with('success', 'Soal Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Soal::find($id)->delete();
        return redirect()->route('soal.index')-> with('success', 'Data Soal Berhasil Dihapus');
    }

    public function createKategori(){
        return view('guru.kuis.kategori');
    }

    public function storeKategori(Request $request){
        $request->validate([
            'nama' => 'required',

        ]);
        $kategori = new Kategori;
        $kategori->nama = $request->get('nama');

        $guru = new Guru;
        $guru->nip = $request->get('guru_nip');

        $kategori->guru()->associate($guru);
        $kategori->save();
        return redirect()->route('soal.create')
        ->with('success', 'Kategori Berhasil ditambahkan, silahkan pilih pada list');
    }

    public function hapusSoal(Request $request)
    {
        $id = $request->get('kategori_id');
        Soal::where('kategori_id', $id)->delete();

        return redirect()->back()->with('success', 'Soal direset.');
    }
}
