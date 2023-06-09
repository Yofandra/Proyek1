<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{

    public function index()
    {
   
        $guru = Guru::orderBy('nip', 'desc')->paginate(3);
        return view('admin.indexGuru', compact('guru'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('admin.createGuru');
    }

    public function store(Request $request)
    {
        if($request->file('foto')){
            $image_name = $request->file('foto')->store('image', 'public');
        }
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'foto' => 'required',
            'username' => 'required',
            'password' => 'required',
            ]);
            // Guru::create($request->all());
            $guru = new Guru;
            $guru->nip = $request->get('nip');
            $guru->nama_guru = $request->get('nama_guru');
            $guru->foto =$image_name;
            $guru->username = $request->get('username');
            $guru->password = Hash::make($request->get('password'));

            $guru->save();
            return redirect()->route('data-guru.index') 
            -> with('success', 'Data Guru Berhasil Ditambahkan');
    }

    public function show($nip)
    {
        $Guru = Guru::find($nip);
        return view('admin.detailGuru', compact('Guru'));
    }

    public function edit($nip)
    {
        $Guru = Guru::find($nip);
        return view('admin.editGuru', compact('Guru'));
    }

    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required',
            'nama_guru' => 'required',
            'foto' => 'nullable',
            'username' => 'required',
            'password' => 'required',
            ]);
            
            $guru = Guru::where('nip', $nip)->first();
            $guru->nip = $request->get('nip');
            $guru->nama_guru = $request->get('nama_guru');
            if($request->hasFile('foto')){
                if($guru->foto && file_exists(storage_path('app/public/' . $guru->foto))) {
                    Storage::delete('public/' . $guru->foto);
                }
                $image_name = $request->file('foto')->store('image', 'public');
                $guru->foto = $image_name;
            }
            $guru->username = $request->get('username');
            $guru->password = Hash::make($request->get('password'));
            $guru->save();

            return redirect()->route('data-guru.index') 
                ->with('success', 'Data Guru Berhasil Diupdate');
    }

    public function destroy($nip)
    {
        Guru::find($nip)->delete();
        return redirect()->route('data-guru.index') -> with('success', 'Data Guru Berhasil Dihapus');
    }
}
