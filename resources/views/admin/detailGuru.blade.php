@extends('admin.layoutAdmin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Guru
            </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>NIP: </b>{{$Guru->nip}}</li>
                <li class="list-group-item"><b>Nama: </b>{{$Guru->nama_guru}}</li>
                <li class="list-group-item"><b>Foto: </b><img width="100px" height="100px" src="{{asset('storage/'.$Guru->foto)}}"></li>
                <li class="list-group-item"><b>Username: </b>{{$Guru->username}}</li>
                <li class="list-group-item"><b>Password: </b>{{$Guru->password}}</li>
            </ul>
        </div>
        <a class="btn btn-success mt3" href="{{ route('guru.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection