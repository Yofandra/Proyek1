@extends('guru.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2 px-6 py-2 flex">
                <div class="col-lg-10">
                    <h2>INFORMASI SISWA</h2>
                </div>
                
                <div class="float-right col-lg-2">
                    <form action="{{ route('tampilSiswa') }}" method="GET">
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Semua Kelas</option>
                            @foreach ($kelas as $Kelas)
                                <option value="{{ $Kelas->idKelas }}">{{ $Kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary float-right">Filter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-2">
                    NIS
                </th>
                <th scope="col" class="p-2">
                    Foto <img width="100px">
                </th>
                <th scope="col" class="p-2">
                    Nama
                </th>
                <th scope="col" class="p-2">
                    Kelas
                </th>

            </tr>
        </thead>

        <tbody>
        @foreach ($siswa as $Siswa)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="p-2 w-20">
                    {{ $Siswa->nis}}
                </td>
                <td class="p-2 w-20">
                    <img width="60px" height="60px" src="{{asset('storage/'.$Siswa->foto)}}">
                </td>
                <td class="p-2 w-40">
                    {{ $Siswa->nama}}
                </td>
                
                <td class="p-2 w-20">
                    {{ $Siswa->kelas->nama_kelas}}
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
