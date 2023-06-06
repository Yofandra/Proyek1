<?php

namespace App\Http\Controllers\Siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MateriController extends Controller
{
    public function materi(){
        return view('siswa.materi.layoutMateri');
    }

    public function darahPanas(){
        return view('siswa.materi.darahPanas');
    }

    public function darahDingin(){
        return view('siswa.materi.darahDingin');
    }

    public function memilikiKaki(){
        return view('siswa.materi.memilikiKaki');
    }

    public function tanpaKaki(){
        return view('siswa.materi.tidakBerkaki');
    }
}
