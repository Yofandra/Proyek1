@extends('admin.layoutAdmin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            <center>Detail Data Siswa</center>
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>NIS: </b>{{$Siswa->nis}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$Siswa->nama}}</li>
                <li class="list-group-item"><b>Foto: </b><img width="100px" height="100px" src="{{asset('storage/'.$Siswa->foto)}}"></li>
                <li class="list-group-item"><b>Username: </b>{{$Siswa->username}}</li>
                <li class="list-group-item"><b>Password: </b>{{$Siswa->password}}</li>
                <li class="list-group-item"><b>Kelas: </b>{{$Siswa->kelas->idKelas}}</li>
                <li class="list-group-item"><b>No Absen: </b>{{$Siswa->no_absen}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt3" href="{{ route('data-siswa.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection