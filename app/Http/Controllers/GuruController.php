<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function index()
    {
        return view('guru.layoutGuru');
        $guru = Guru::all();
        $posts = Guru::orderBy('idGuru', 'desc')->paginate(6);
        return view('guru.index', compact('guru'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'idGuru' => 'required',
            'nama_guru' => 'required',
            'kelas' => 'required',
            'nip' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);
            
            Guru::create($request->all());
            
            return redirect()->route('guru.index') -> with('success', 'Data Guru Berhasil Ditambahkan');
    }

    public function show($idGuru)
    {
        $Guru = Guru::find($idGuru);
        return view('guru.detail', compact('Guru'));
    }

    public function edit($idGuru)
    {
        $Guru = Guru::find($idGuru);
        return view('guru.edit', compact('Guru'));
    }

    public function update(Request $request, $idGuru)
    {
        $request->validate([
            'idGuru' => 'required',
            'nama_guru' => 'required',
            'kelas' => 'required',
            'nip' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);
           
            Guru::find($idGuru)->update($request->all());
           
            return redirect()->route('guru.index') -> with('success', 'Data Guru Berhasil Diupdate');
    }

    public function destroy($idGuru)
    {
        Guru::find($idGuru)->delete();
        return redirect()->route('guru.index') -> with('success', 'Data Guru Berhasil Dihapus');
    }
}
