@extends('admin.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Siswa
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
                <form method="post" action="{{ route('siswa.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="text" name="nis" class="formcontrol" id="nis" aria-describedby="nis">
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" name="username" class="formcontrol" id="username" aria-describedby="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="formcontrol" id="password" aria-describedby="password">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="nama" name="nama" class="formcontrol" id="nama" aria-describedby="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="kelas" name="kelas" class="formcontrol" id="kelas"
                            aria-describedby="kelas">
                    </div>
                    <div class="form-group">
                        <label for="no_absen">No Absen</label>
                        <input type="no_absen" name="no_absen" class="formcontrol" id="no_absen"
                            aria-describedby="no_absen">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
