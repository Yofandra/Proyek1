<?php

namespace App\Http\Controllers\Guru;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeGuruController extends Controller
{
    public function index(){
        return view('guru.index');
    }
}
