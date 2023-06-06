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
                        <h1>Hewan Memiliki Kaki</h1>
                    </center><br>

                    Invertebrata memiliki beragam pembagian kaki, tergantung pada kelompok taksonomi mereka. Beberapa
                    contoh pembagian kaki pada invertebrata adalah sebagai berikut:
                    1. Arachnida: Arachnida seperti laba-laba, kalajengking, dan tungau memiliki delapan kaki.
                    2. Insecta: Serangga, seperti lalat, lebah, dan ngengat, umumnya memiliki enam kaki.
                    3. Crustacea: Hewan krustasea, seperti kepiting, udang, dan lobster, biasanya memiliki sepuluh atau
                    lebih kaki.
                    4. Chilopoda: Kelas Chilopoda mencakup hewan seperti lipan dan kelabang. Mereka memiliki banyak segmen
                    tubuh yang dilengkapi dengan satu pasang kaki di setiap segmen.
                    5. Diplopoda: Kelas Diplopoda termasuk hewan seperti lipan dan kecoa kayu. Mereka memiliki banyak
                    segmen tubuh yang dilengkapi dengan dua pasang kaki di setiap segmen.
                    6. Mollusca: Hewan molluska, seperti siput, kerang, dan cumi-cumi, biasanya memiliki kaki yang
                    termodifikasi menjadi struktur yang berbeda, seperti tentakel atau cakar.
                    7. Echinodermata: Hewan echinodermata, seperti bintang laut dan teripang, memiliki ekstremitas yang
                    disebut "tube feet" yang digunakan untuk bergerak.

                    Ini hanya beberapa contoh pembagian kaki pada invertebrata. Setiap kelompok invertebrata memiliki
                    karakteristik khusus dan variasi dalam struktur dan jumlah kaki mereka

                    <center>
                        <h7>Contoh Hewan Invertebrata yang Memiliki Kaki</h7>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/semut_berkaki.jpg')}}" alt="">
                    </center><br>
                </div>
            </div>
        </div>
        @include('siswa.materi.navbar_materi')
    </div>
</div>
</div>
@endsection
