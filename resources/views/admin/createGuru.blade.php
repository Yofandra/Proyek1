@extends('admin.layoutAdmin')

@section('content')

    {{-- <div class="flex flex-col items-center pb-10">
        <h5 class="mb-1 text-xl font-medium text-black dark:text-white">Tambah Guru</h5>
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('guru.store') }}" id="myForm">
                    @csrf    
                    <div class="form-group">
                        <label for="nip" class="text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                        <input type="text" id="nip" aria-describedby="nip" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="nama_guru" class="text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama_guru" aria-describedby="nama_guru" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="kelas" class="text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" id="kelas" aria-describedby="kelas" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="username" class="text-sm font-medium text-gray-900 dark:text-white">Username</label>
                        <input type="text" id="username" aria-describedby="username" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="password" class="text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="text" id="password" aria-describedby="password" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <br>
                    <button type="submit" class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Submit</button>
            </form>
        </div>
    </div> --}}

    
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Guru
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('guru.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nip">NIP</label><br>
                        <input type="text" name="nip" class="formcontrol" id="nip" aria-describedby="nip">
                    </div>
                    <div class="form-group">
                        <label for="nama_guru">Nama</label><br>
                        <input type="Nama" name="nama_guru" class="formcontrol" id="nama_guru" aria-describedby="nama_guru">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label><br>
                        <input type="kelas" name="kelas" class="formcontrol" id="kelas" aria-describedby="kelas">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label><br>
                        <input type="username" name="username" class="formcontrol" id="username" aria-describedby="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" class="formcontrol" id="password" aria-describedby="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection