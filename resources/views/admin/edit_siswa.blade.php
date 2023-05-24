@extends('admin.layoutAdmin')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Siswa
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
                <form method="post" action="{{ route('siswa.update', $Siswa->nis) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="text" name="nis" class="form-control" id="nis" value="{{ $Siswa->nis }}"ariadescribedby="nis">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" value="{{ $Siswa->username }}"ariadescribedby="username">
                    </div>
                    <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <input type="Kelas" name="Kelas" class="form-control" id="Kelas" value="{{ $Siswa->Kelas }}" ariadescribedby="Kelas">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="{{ $Siswa->password }}" ariadescribedby="password">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" name="nama" class="form-control" id="nama" value="{{ $Siswa->nama }}" ariadescribedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="kelas" name="kelas" class="form-control" id="kelas" value="{{ $Siswa->kelas }}" ariadescribedby="kelas">
                    </div>
                    <div class="form-group">
                        <label for="no_absen">No Absen</label>
                        <input type="no_absen" name="no_absen" class="form-control" id="no_absen" value="{{ $Siswa->no_absen }}" ariadescribedby="no_absen">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
