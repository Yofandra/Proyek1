@extends('guru.layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>Selamat Datang, {{ Auth::user()->nama_guru }}</h2>
            </div>
        </div>
    </div>
    <div class="m-6">
        <div class="flex flex-wrap -mx-6">
            @foreach ($kelas as $kelas)
                <div class="p-6 sm:w-1/2 xl:w-1/4">
                <div class="flex items-center px-4 py-3 shadow-sm rounded-md bg-white-200 shadow">
                    <div class="p-6 rounded-full bg-green-200 ">
                        <i class="fas fa-chalkboard-teacher fa-2x" style="color:#464255"></i>
                    </div>
                    <div class="mx-2">
                        <h5 class="font-semi-bold text-gray-800 mb-2">Kelas </h5>
                        <h1 class="text-xl text-center font-bold text-gray-700 mb-2">{{ $kelas->nama_kelas }}</h1>
                    </div>                
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
@endsection
