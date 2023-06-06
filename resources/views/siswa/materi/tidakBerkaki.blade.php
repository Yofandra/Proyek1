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
                        <h1>Hewan Tidak Berkaki/h1>
                    </center><br>

                    Terdapat banyak hewan invertebrata yang tidak memiliki kaki. Beberapa contoh hewan invertebrata yang
                    tidak memiliki kaki adalah sebagai berikut:
                    1. Cacing: Cacing tanah dan cacing usus adalah contoh hewan invertebrata yang tidak memiliki kaki.
                    Mereka memiliki tubuh berbentuk silinder yang memungkinkan mereka merayap melalui tanah atau media
                    lainnya.
                    2. Siput: Siput adalah hewan invertebrata yang tidak memiliki kaki yang terlihat secara kasat mata.
                    Namun, mereka memiliki kaki termodifikasi dalam bentuk lempengan yang disebut "kaki perut" atau
                    "kaki perut telanjang" yang mereka gunakan untuk meluncur di permukaan licin.
                    3. Ubur-ubur: Ubur-ubur adalah hewan invertebrata yang tidak memiliki kaki. Mereka memiliki tubuh
                    lendir yang terdiri dari kantong badan dan tentakel yang digunakan untuk berenang dan mencari makan.
                    4. Teripang: Teripang, juga dikenal sebagai timun laut, adalah hewan invertebrata yang tidak memiliki
                    kaki. Mereka memiliki tubuh berbentuk silinder yang dilengkapi dengan tentakel dan "tube feet" yang
                    mereka gunakan untuk bergerak di dasar laut.
                    5. Cumi-cumi: Cumi-cumi adalah hewan invertebrata yang tidak memiliki kaki. Mereka memiliki tubuh
                    berbentuk kerucut dan menggunakan sirip dan tentakel untuk berenang dan berburu.

                    Ini hanya beberapa contoh hewan invertebrata yang tidak memiliki kaki. Invertebrata memiliki beragam
                    adaptasi dan struktur tubuh yang memungkinkan mereka untuk bergerak dan beradaptasi dengan
                    lingkungan mereka tanpa menggunakan kaki

                    <center>
                        <h7>Contoh Hewan Invertebrata yang Tidak Berkaki</h7>
                        <img class="w-66 h-30" src="{{asset('storage/image/gambarMateri/ubur_tanpa.jpg')}}" alt="">
                    </center><br>
                </div>
            </div>
        </div>
        @include('siswa.materi.navbar_materi')
    </div>
</div>
</div>
@endsection
