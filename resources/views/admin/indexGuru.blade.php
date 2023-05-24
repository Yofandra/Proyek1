@extends('admin.layoutAdmin')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI GURU</h2>
            </div>
            <div class="fixed top-20 right-2">
                <a class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{ route('guru.create') }}" >Tambah Guru</a>
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
                    NIP
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
                    Action
                </th>
            </tr>
        </thead>
        @foreach ($guru as $Guru)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $Guru->nip}}
                </th>
                <td class="px-6 py-4">
                    {{ $Guru->nama_guru}}
                </td>
                <td class="px-6 py-4">
                <img width="100px" height="100px" src="{{asset('storage/'.$Guru->foto)}}">
                </td>
                <td class="px-6 py-4">
                    {{ $Guru->username}}
                </td>
                <td class="px-6 py-4">
                    {{ $Guru->password}}
                </td>
                <td class="px-6 py-4">
                    {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> --}}
                    <form action="{{ route('guru.destroy',$Guru->nip) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('guru.show',$Guru->nip) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('guru.edit',$Guru->nip) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

@endsection