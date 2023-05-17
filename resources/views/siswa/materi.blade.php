@extends('siswa.layoutSiswa')
@section('content')
    <div class="pagetitle">
      <h1>Materi</h1>
    </div>
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        <div class="p-6 sm:w-1/2 xl:w-3/4">
            <div class="flex items-center px-5 py-6 bg-white">
                materi
            </div>
        </div>
        <div class="p-6 sm:w-1/2 xl:w-1/4">
            
            <div class="flex items-center px-2 py-2 rounded-md bg-white">
                <div class="p-4 rounded-full bg-grey-600 bg-opacity-20">
                    <i class="fas fa-book fa-2x" style="color:#ffff"></i>
                </div>
                Daftar materi
            </div>
        </div>
    </div>
</div>
@endsection