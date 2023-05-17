@extends('admin.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Siswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nis: </b>{{$Siswa->nis}}</li>
                    <li class="list-group-item"><b>Username: </b>{{$Siswa->username}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$Siswa->kelas}}</li>
                    <li class="list-group-item"><b>Password: </b>{{$Siswa->password}}</li>
                    <li class="list-groupitem"><b>Nama: </b>{{$Siswa->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$Siswa->kelas}}</li>
                    <li class="list-groupitem"><b>No Absen: </b>{{$Siswa->no_absen}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-
3" href="{{ route('mahasiswas.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection
