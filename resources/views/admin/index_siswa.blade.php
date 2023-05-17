@extends('admin.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>SMP NEGERI 1 KESAMBEN</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btnsuccess" href="{{ route('siswa.create') }}"> Input Siswa</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>Nis</th>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>No Absen </th>
    </tr>
    @foreach ($siswa as $Siswa)
    <tr>
        <td>{{ $Siswa->Nis }}</td>
        <td>{{ $Siswa->Username }}</td>
        <td>{{ $Siswa->Password }}</td>
        <td>{{ $Siswa->Nama }}</td>
        <td>{{ $Siswa->Kelas }}</td>
        <td>{{ $Siswa->No Absen }}</td>
        <td>
            <form action="{{ route('siswa.destroy',$Siswa->nis) }}" method="POST">
                <a class="btn btn-info" href="{{ route('siswa.show',$Siswa->nis) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('siswa.edit',$Siswa->nis) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
