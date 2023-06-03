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
        <!-- <div class=" fixed top-20 right-3">
            <a class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-3 mb-1"
                href="{{ route('data-siswa.create') }}">Tambah Siswa</a> <br><br>
            </a>
            <div class="input-group input-group-sm">
                <input type="search" class="form-control mr-sm-2" name="search" aria-label="Cari Siswa" value="{{request('search')}}" id="search">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>

            </div>
        </div> -->
        
        <nav class="flex flex-nowrap fixed top-20 right-3">
        {{-- <!-- <button type="button" class="px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ route('data-siswa.create') }}">Tambah Siswa</button> --> --}}
        <a class="btn btn-success" href="{{ route('data-siswa.create') }}"> Tambah Siswa</a>
            <form class="form-inline p-4">
            <button type="button" class="px-2 py-1 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ route('data-siswa.create') }}">Tambah Siswa</button>
                <input type="search" class="form-control mr-sm-2" name="search" aria-label="Cari" value="{{request('search')}}" id="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>

            </form>
        </nav>
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
                    {{ $Siswa->kelas->nama_kelas}}
                </td>
                <td class="px-6 py-4">
                    {{ $Siswa->no_absen}}
                </td>
                <td class="px-6 py-4">
                    <form action="{{ route('data-siswa.destroy',$Siswa->nis) }}" method="POST">
                        <!-- <a class="btn btn-info" href="{{ route('data-siswa.show',$Siswa->nis) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('data-siswa.edit',$Siswa->nis) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button> -->
                        <a class="text-black" href="{{ route('data-siswa.show',$Siswa->nis) }}"><i class='fas fa-file-alt mr-4' style='font-size:24px'></i></a>
                        <a class="text-black" href="{{ route('data-siswa.edit',$Siswa->nis) }}"><i class='fas fa-pencil-alt mr-4' style='font-size:24px'></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-black"><i class='fas fa-trash-alt' style='font-size:24px'></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
    </table>
    <div class="d-flex">
    {{ $siswa->links() }}
</div>
    @endsection
