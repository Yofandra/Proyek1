@extends('siswa.layoutSiswa')
@section('content')

<div class="pagetitle">
    <h1>Materi</h1>
</div>
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        <div class="p-6 sm:w-1/2 xl:w-3/4">
            <div class="flex px-5 py-6 bg-white">
                <div class="p-2">
                    <center>
                        <h1>Pengenalan Klasifikasi Hewan</h1>
                    </center><br>

                    <h6>Urutan Takson</h6>
                    <center>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/takson.jpg')}}" alt="">
                    </center><br>
                   
                    <h6>Kelompok Hewan</h6>
                    <center>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/bagan1.jpg')}}" alt="">
                    </center><br>
                    Hewan yang terdapat di muka bumi ini sangat beragam, baik dari segi bentuk maupun ukurannya. Secara umum hewan dapat diklasifikasikan menjadi 2 yaitu hewan vertebrata (bertulang belakang) dan hewan invertebrata (tidak bertulang belakang).
                </div>
            </div>
        </div>
        @include('siswa.materi.navbar_materi')
    </div>
</div>
@endsection
