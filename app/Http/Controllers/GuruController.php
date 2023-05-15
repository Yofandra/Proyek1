<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{

    public function index()
    {
        $guru = Guru::all();
        $posts = Guru::orderBy('nip', 'desc')->paginate(6);
        return view('admin.indexGuru', compact('guru'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.createGuru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'kelas' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);
            
            Guru::create($request->all());
            
            return redirect()->route('guru.index') -> with('success', 'Data Guru Berhasil Ditambahkan');
    }

    public function show($nip)
    {
        $Guru = Guru::find($nip);
        return view('guru.detailGuru', compact('Guru'));
    }

    public function edit($nip)
    {
        $Guru = Guru::find($nip);
        return view('guru.editGuru', compact('Guru'));
    }

    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'kelas' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);
           
            Guru::find($nip)->update($request->all());
           
            return redirect()->route('guru.indexGuru') -> with('success', 'Data Guru Berhasil Diupdate');
    }

    public function destroy($nip)
    {
        Guru::find($nip)->delete();
        return redirect()->route('guru.index') -> with('success', 'Data Guru Berhasil Dihapus');
    }
}
