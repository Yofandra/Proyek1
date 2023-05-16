<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $posts = Siswa::orderBy('idSiswa', 'asc')->paginate(6);
        return view('siswa.index', compact('siswa'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
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
            'idSiswa' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'nis' => 'required',
            'no_absen' => 'required',
            ]);

            Siswa::create($request->all());

            return redirect()->route('siswa.index')
            ->with('success', 'Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($idSiswa)
    {
        $Siswa = Siswa::find($idSiswa);
        return view('siswa.detail', compact('Siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($idSiswa)
    {
        $Siswa = Siswa::find($idSiswa);
        return view('siswa.edit', compact('Siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSiswa)
    {
        $request->validate([
            'nis' => 'required',
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'no_absen' => 'required',
            ]);

        Siswa::find($idSiswa)->update($request->all());

        return redirect()->route('siswa.index')
        ->with('success', 'Siswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSiswa)
    {
        Siswa::find($idSiswa)->delete();
        return redirect()->route('siswa.index')
        -> with('success', 'Siswa Berhasil Dihapus');
    }
}
