@extends('siswa.materi')
@section('contentMateri')
<div class="pagetitle">
    <h1>Materi</h1>
</div>
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        <div class="p-6 sm:w-1/2 xl:w-3/4">
            <div class="flex px-5 py-6 bg-white">
                <div class="p-2">
                    <center>
                        <h1>Hewan Berdarah Panas</h1>
                    </center><br>

                    Homoiterm atau berdarah panas adalah kemampuan hewan untuk mengatur suhu tubuhnya terhadap
                    lingkungan.
                    Kemampuan ini dapat membuat hewan berkeringat ketika suhu panas, dan kedinginan ketika suhu dingin.
                    Namun, hewan-hewan berdarah panas dapat menurunkan suhu tubuhnya ketika suhu lingkungan sedang
                    tinggi, dan sebaliknya.
                    Contoh hewan berdarah panas adalah kucing, harimau, anjing, ayam, burung, dan hewan mamalia.

                    <center>
                        <h7>Contoh Hewan Berdarah Panas</h7>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/harimau_dp.jpg')}}" alt="">
                    </center><br>
                </div>
            </div>
        </div>
        @include('siswa.materi.navbar_materi')
    </div>
</div>
</div>
@endsection
