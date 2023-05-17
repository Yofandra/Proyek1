@extends('admin.layoutAdmin')
<<<<<<< HEAD

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Guru
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

        <form method="post" action="{{ route('guru.update', $Guru->nip) }}" id="myForm">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" name="nip" class="formcontrol" id="nip" value="{{ $Guru->nip }}" ariadescribedby="nip" >
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $Guru->nama_guru }}" ariadescribedby="nama" >
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <input type="kelas" name="kelas" class="formcontrol" id="kelas" value="{{ $Guru->kelas }}" ariadescribedby="kelas" >
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="formcontrol" id="username" value="{{ $Guru->username }}" ariadescribedby="username" >
            </div>
            <div class="form-group">
                <label for="Jurusan">Password</label>
                <input type="Jurusan" name="Jurusan" class="formcontrol" id="Jurusan" value="{{ $Guru->Jurusan }}" ariadescribedby="Jurusan" >
            </div>
            <div class="form-group">
                <label for="No_Handphone">No_Handphone</label>
                <input type="No_Handphone" name="No_Handphone" class="formcontrol" id="No_Handphone" value="{{ $Guru->No_Handphone }}" ariadescribedby="No_Handphone" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
=======
@section('content')

    <div class="flex flex-col items-center pb-10">
        <h5 class="mb-1 text-xl font-medium text-black dark:text-white py-3">Edit Data Guru</h5>
        <div class="max-w-sm py-3 px-20 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="input-body">
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
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" value="{{$guru->nip}}" aria-describedby="nip" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="nama_guru">Nama</label>
                        <input type="text" name="nama_guru" id="nama_guru" value="{{$guru->nama_guru}}" aria-describedby="nama_guru" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="image">Foto</label>
                        <input type="text" name="image" id="image" value="{{$guru->foto}}" aria-describedby="kelas" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                        <img width="100px" src="{{asset('storage/'.$guru->foto)}}">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="{{$guru->username}}" aria-describedby="username" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" value="{{$guru->password}}" aria-describedby="password" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <br>
                    <button type="submit" class="text-white bg-green-logo hover:bg-green-600 focus:ring-2 focus:ring-green-logo font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Submit</button>
                </form>
            </div>
        </div>
    </div>
>>>>>>> 6fcbc44b16ed35d531d275469dc5d6ecc5cac339
@endsection