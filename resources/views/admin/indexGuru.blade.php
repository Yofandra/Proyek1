@extends('admin.layoutAdmin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>INFORMASI GURU</h2>
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
            <th>NIP</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Password</th>
            <th width="300px">Action</th>
        </tr>
        @foreach ($guru as $Guru)
        <tr>

        <td>{{ $Guru->nip }}</td>
        <td>{{ $Guru->username }}</td>
        <td>{{ $Guru->nama_guru }}</td>
        <td>{{ $Guru->kelas }}</td>
        <td>{{ $Guru->password }}</td>
        <td>
        <form action="{{ route('guru.destroy',$Guru->idGuru) }}" method="POST">

            <a class="btn btn-info" href="{{ route('guru.show',$Guru->idGuru) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('guru.edit',$Guru->idGuru) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </table>
@endsection