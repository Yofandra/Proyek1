@extends('admin.layoutAdmin')
@section('content')
<div class="row">
    <div class="col-lg-6 margin-tb">
        <div class="pull-left mt-2 px-6 py-4">
            <h2>
                <center> DATA SISWA <br> SMP NEGERI 1 KESAMBEN
            </h2>
            </center>
        </div>
        <div class=" fixed top-20 right-3">
            <a class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-3 mb-1"
                href="{{ route('siswa.create') }}">Tambah Siswa</a> <br><br>
            </a>
            <div class="input-group input-group-sm">
                <input type="search" class="form-control mr-sm-2" name="search" aria-label="Cari Siswa" value="{{request('search')}}" id="search">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>

            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NIS
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto <img width="100px">
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Password
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    No Absen
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        @foreach ($siswa as $Siswa)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Siswa->nis}}
                </th>
                <td class="px-6 py-4">
                    {{ $Siswa->nama}}
                </td>
                <td class="px-6 py-4">
                    <img width="100px" height="100px" src="{{asset('storage/'.$Siswa->foto)}}">
                </td>
                <td class="px-6 py-4">
                    {{ $Siswa->username}}
                </td>
                <td class="px-6 py-4">
                    {{ $Siswa->password}}
                </td>
                <td class="px-6 py-4">
                    {{ $Siswa->kelas}}
                </td>
                <td class="px-6 py-4">
                    {{ $Siswa->no_absen}}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('siswa.destroy',$Siswa->nis) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('siswa.show',$Siswa->nis) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('siswa.edit',$Siswa->nis) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
    @endsection
