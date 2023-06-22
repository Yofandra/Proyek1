<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Models\Kelas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $siswa = Siswa::where('nis', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('no_absen', 'LIKE', '%' . request('search') . '%')
                ->paginate(1);
    
            return view('admin.index_siswa', ['siswa' => $siswa]);
        }else{

            $siswa = Siswa::orderBy('nis', 'desc')->paginate(5);
            return view('admin.index_siswa', compact('siswa'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.create_siswa');

        $kelas = Kelas::all(); 
        return view('admin.create_siswa',['kelas'=>$kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if($request->file('foto')){
                $image_name = $request->file('foto')->store('image', 'public');
            }

        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'foto' => 'required',
            // 'kelas' => 'required',
            'username' => 'required',
            'password' => 'required',
            'no_absen' => 'required',
            ]);

            // Siswa::create($request->all());

            $siswa = new Siswa;
            $siswa->nis = $request->get('nis');
            $siswa->nama = $request->get('nama');
            $siswa->foto =$image_name;
            $siswa->username = $request->get('username');
            $siswa->password = Hash::make($request->get('password'));
            $siswa->no_absen = $request->get('no_absen');

            $kelas = new Kelas;
            $kelas->idKelas = $request->get('kelas');

            $siswa->kelas()->associate($kelas);
            $siswa->save();
            return redirect()->route('data-siswa.index')
            ->with('success', 'Siswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($nis)
    {
        $Siswa = Siswa::find($nis);
        return view('admin.detail_siswa', compact('Siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($nis)
    {
        $Siswa = Siswa::find($nis);
        $kelas = Kelas::all();
        return view('admin.edit_siswa', compact('Siswa', 'kelas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nis)
    {
        
        $request->validate([
            'nis' => 'required',
            'username' => 'required',
            'password' => 'required',
            'foto'=>'nullable',
            'nama' => 'required',
            'kelas' => 'required',
            'no_absen' => 'required',
            ]);

            $siswa = Siswa::where('nis', $nis)->first();
            $siswa->nis = $request->get('nis');
            $siswa->nama = $request->get('nama');
            if($request->hasFile('foto')){
                if($siswa->foto && file_exists(storage_path('app/public/' . $siswa->foto))) {
                    Storage::delete('public/' . $siswa->foto);
                }
                $image_name = $request->file('foto')->store('image', 'public');
                $siswa->foto = $image_name;
            }
            $siswa->username = $request->get('username');
            $siswa->password = Hash::make($request->get('password'));
            $siswa->save();

            $kelas = new Kelas;
            $kelas->idKelas = $request->get('kelas');

            $siswa->kelas()->associate($kelas);
            $siswa->save();

        return redirect()->route('data-siswa.index')
        ->with('success', 'Siswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($nis)
    {
        Siswa::find($nis)->delete();
        return redirect()->route('data-siswa.index')
        -> with('success', 'Siswa Berhasil Dihapus');
    }
    public function kuis(){
        return view('siswa.kuis');
    }
}
