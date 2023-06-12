@extends('guru.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="mt-2 px-6 py-2 text-center">
                <h2>DATA SISWA</h2>
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
        @foreach ($siswa as $Siswa)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="p-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Siswa->nis}}
                </th>
                <td class="p-2">
                    <img width="60px" height="60px" src="{{asset('storage/'.$Siswa->foto)}}">
                </td>
                <td class="p-2">
                    {{ $Siswa->nama}}
                </td>
                
                <td class="p-2">
                    {{ $Siswa->kelas->nama_kelas}}
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
