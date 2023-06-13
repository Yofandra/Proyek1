@extends('siswa.layoutSiswa')
@section('content')

<div class="flex flex-wrap">
    <div class="xl:w-3/4">
        <div class="flex items-center mx-0 px-5 py-6 bg-white">
            @yield('contentMateri')
        </div>
    </div>
    @include('siswa.materi.navbar_materi')
</div>
@endsection