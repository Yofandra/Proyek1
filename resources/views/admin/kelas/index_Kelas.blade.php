@extends('admin.layoutAdmin')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI KELAS</h2>
            </div>
            <div class="fixed top-20 right-2">
                <a class="px-2 py-2 mr-4 text-sm font-medium text-center text-white bg-green-logo rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ route('kelas.create') }}" >Tambah Kelas</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-x text-left text-gray-500">
        <thead class="text-x text-semibold text-gray-700 uppercase bg-green-100 dark:bg-gray-700 ">
            <tr>
                <th scope="col" class="px-6 py-3 text-center text-bold">
                    NO
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Guru Pengajar
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <?php $i=1 ?>
        @foreach ($kelas as $Kelas)
        <tbody>
            <tr class="bg-white border-b ">
                <td class="px-6 py-2 text-center text-bold">
                    {{$i}}
                </td>
                <td class="px-6 py-2">
                    {{ $Kelas->nama_kelas}}
                </td>
                <td class="px-6 py-2">
                    {{ $Kelas->guru->nama_guru}}
                </td>
                <td class="px-6 py-2 text-center">
                    <form action="{{ route('kelas.destroy',$Kelas->idKelas) }}" method="POST">
                        <!-- <a class="text-white text-semibold bg-sky-500 hover:bg-sky-600 font-medium rounded-lg text-sm p-2 m-2 w-2xl" href="{{ route('kelas.edit',$Kelas->idKelas) }}" >Edit</a> -->
                        <a class="text-black" href="{{ route('kelas.edit',$Kelas->idKelas) }}"><i class='fas fa-pencil-alt mr-4' style='font-size:24px'></i></a>
                        @csrf
                        @method('DELETE')
                        <!-- <button type="submit" class="text-white text-semibold bg-red-500 hover:bg-red-600 font-medium rounded-lg text-sm p-2 m-2">Delete</button> -->
                        <button type="submit" class="text-black"><i class='fas fa-trash-alt' style='font-size:24px'></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php $i++ ?>
        @endforeach
    </table>
</div>

@endsection