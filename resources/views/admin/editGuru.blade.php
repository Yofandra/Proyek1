@extends('admin.layoutAdmin')

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
@endsection