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
                        <h1>Hewan Berdarah Dingin</h1>
                    </center><br>

                    <h6>Urutan Takson</h6>
                    <center>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/takson.jpg')}}" alt="">
                    </center><br>
                    Poikiloterm atau berdarah dingin adalah jenis hewan yang tidak bisa mengatur suhu tubuhnya.
                    Artinya, ketika suhu lingkungan tinggi, maka suhu tubuhnya ikut meningkat.
                    Sebaliknya, ketika suhu lingkungan rendah, maka suhu tubuh hewan tersebut menjadi turun.
                    Contoh hewan berdarah dingin adalah hewan reptil, ikan, hewan amfibi, serangga, dan hewan
                    invertebrata.
                    Hewan reptil contohnya kadal, ular, hewan amfibi contohnya katak, hewan invertebrata contohnya
                    cacing dan ubur-ubur
                </div>
            </div>
        </div>
        @include('siswa.materi.navbar_materi')
    </div>
</div>
</div>
@endsection
