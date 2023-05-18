@extends('siswa.layoutSiswa')
@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <h5>Selamat Datang user!</h5>
    </div>
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-school fa-3x" style="color:#464255"></i>
                </div>

                <div class="mx-5">
                    <h1 class="text-4xl font-bold text-gray-700">7A</h1>
                    <div class="text-gray-500">Kelas</div>
                </div>
            </div>
        </div>
        <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-medal fa-3x" style="color:#464255"></i>
                </div>

                <div class="mx-5">
                    <h1 class="text-4xl font-bold text-gray-700">7A</h1>
                    <div class="text-gray-500">Kelas</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection