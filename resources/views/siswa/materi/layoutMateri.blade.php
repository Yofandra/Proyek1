@extends('siswa.layoutSiswa')
@section('content')

<div class="flex flex-wrap -mx-6">
    <div class="sm:w-1/2 xl:w-3/4">
        <div class="flex items-center px-5 py-6 bg-white">
            @yield('contentMateri')
        </div>
    </div>
    @include('siswa.materi.navbar_materi')
</div>
@endsection