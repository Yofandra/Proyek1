@extends('siswa.layoutSiswa')
@section('content')
    <div class="px-4 py-3">
      <h1>Daftar Kuis</h1>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        @foreach($kategori as $Kategori)
        <div class="p-6 sm:w-1/2 xl:w-1/2">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-address-card fa-2x" style="color:#464255"></i>
                </div>

                <div class="mx-4">
                    <h1 class="text-xl font-bold text-gray-700 mb-4">{{$Kategori->nama}}</h1>
                    <a class="btn btn-info" href="{{ route('kuis.show',$Kategori->id)}}">Kerjakan</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection