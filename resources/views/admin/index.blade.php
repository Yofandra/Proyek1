@extends('admin.layoutAdmin')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>Selamat Datang, {{ Auth::user()->nama_admin }}</h2>
            </div>
        </div>
    </div>
    <div class="m-6">
        <div class="flex flex-wrap -mx-6">
            <div class="p-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-4 py-3 shadow-sm rounded-md bg-white-200 shadow">
                    <div class="p-6 rounded-full bg-green-200 ">
                        <i class="fas fa-chalkboard-teacher fa-2x" style="color:#464255"></i>
                    </div>
                    <div class="mx-8">
                        <h5 class="font-semi-bold text-gray-800 mb-2">Jumlah Guru</h5>
                        <h1 class="text-xl text-center font-bold text-gray-700 mb-2">{{ $jumlahGuru }}</h1>
                        
                        <button class="rounded-lg float-right"><a class="text-sm text-gray-700 p-2 align-center" href="{{ route('data-guru.index')}}">Lihat<i class="pl-2 fas fa-arrow-right"></i></a></button>
                    </div>                
                </div>
            </div>
            <div class="p-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-4 py-3 shadow-sm rounded-md bg-white-200 shadow">
                    <div class="p-6 rounded-full bg-green-200 ">
                        <i class="fas fa-users fa-2x" style="color:#464255"></i>
                    </div>
                    <div class="mx-8">
                        <h5 class="font-semi-bold text-gray-800 mb-2">Jumlah Kelas</h5>
                        <h1 class="text-xl text-center font-bold text-gray-700 mb-2">{{ $jumlahKelas }}</h1>
                        
                        <button class="rounded-lg float-right"><a class="text-sm text-gray-700 p-2 align-center" href="{{ route('data-kelas.index')}}">Lihat<i class="pl-2 fas fa-arrow-right"></i></a></button>
                    </div>                
                </div>
            </div>
                        <div class="p-6 sm:w-1/2 xl:w-1/3">
                <div class="flex items-center px-4 py-3 shadow-sm rounded-md bg-white-200 shadow">
                    <div class="p-6 rounded-full bg-green-200 ">
                        <i class="fas fa-book-reader fa-2x" style="color:#464255"></i>
                    </div>
                    <div class="mx-8">
                        <h5 class="font-semi-bold text-gray-800 mb-2">Jumlah Siswa</h5>
                        <h1 class="text-xl text-center font-bold text-gray-700 mb-2">{{ $jumlahSiswa }}</h1>
                        
                        <button class="rounded-lg float-right"><a class="text-sm text-gray-700 p-2 align-center" href="{{ route('data-siswa.index')}}">Lihat<i class="pl-2 fas fa-arrow-right"></i></a></button>
                    </div>                
                </div>
            </div
        </div>
    </div>
    
@endsection
