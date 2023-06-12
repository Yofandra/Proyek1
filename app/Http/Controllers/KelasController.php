<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Admin;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::first();
        $kelas = Kelas::all();
        $posts = Kelas::orderBy('id', 'asc');
        return view('admin.kelas.index_Kelas', compact('kelas','admin'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all(); // mendapatkan data dari kelas
        return view('admin.kelas.create_Kelas',['guru'=>$guru]);
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
            'nama_kelas' => 'required',
            ]);
            // Guru::create($request->all());
            $kelas = new Kelas;
            $kelas->nama_kelas = $request->get('nama_kelas');

            $guru = new Guru;
            $guru->nip = $request->get('guru');

            $kelas->guru()->associate($guru);
            $kelas->save();
            return redirect()->route('data-kelas.index') 
            -> with('success', 'Data Kelas Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idKelas)
    {
        $kelas = Kelas::find($idKelas);
        $guru = Guru::all();
        return view('admin.kelas.edit_Kelas', compact('kelas','guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idKelas)
    {
        $request->validate([
            'nama_kelas' => 'required',
            ]);
            // Guru::create($request->all());
            $kelas = Kelas::where('idKelas', $idKelas)->first();
            $kelas->nama_kelas = $request->get('nama_kelas');
            $kelas->save();

            $guru = new Guru;
            $guru->nip = $request->get('guru');

            $kelas->guru()->associate($guru);
            $kelas->save();
            return redirect()->route('data-kelas.index') 
            -> with('success', 'Data Kelas Berhasil Di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idKelas)
    {
        Kelas::find($idKelas)->delete();
        return redirect()->route('data-kelas.index')
        -> with('success', 'Data Kelas Berhasil Dihapus');
    }
}
