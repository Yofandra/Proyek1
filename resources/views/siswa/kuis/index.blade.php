@extends('siswa.layoutSiswa')
@section('content')
    <div class="pagetitle">
      <h1>Daftar Kuis</h1>
    </div>
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        <div class="p-6 sm:w-1/2 xl:w-max">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-address-card fa-2x" style="color:#464255"></i>
                </div>

                <div class="mx-4">
                    <h1 class="text-xl font-bold text-gray-700">Ulangan Harian</h1>
                    <div class="text-gray-500">30 SOAL</div>
                    <div class="text-gray-500">60 MENIT</div>
                    <button class="bg-green-500 text-white font-bold px-4 py-2 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-white-600">Kerjakan</button>
                </div>
                
            </div>
        </div>
        <div class="p-6 sm:w-1/2 xl:w-max">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-address-card fa-2x" style="color:#464255"></i>
                </div>

                <div class="mx-4">
                    <h1 class="text-xl font-bold text-gray-700">Ulangan Harian</h1>
                    <div class="text-gray-500">30 SOAL</div>
                    <div class="text-gray-500">60 MENIT</div>
                    <div class="text-grey font-bold text-sm py-2 uppercase ">Selesai</div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection