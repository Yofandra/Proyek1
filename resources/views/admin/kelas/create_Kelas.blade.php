@extends('admin.layoutAdmin')
@section('content')
    <div class="flex flex-col items-center pb-10">
        
        <h5 class="mb-1 text-xl font-semibold text-black py-3">Tambah Data Kelas</h5>
        <div class="w-full py-3 px-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
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
                <form method="post" action="{{ route('data-kelas.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" aria-describedby="nama_kelas" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="guru">Guru Pengajar</label>
                        <select name="guru" class="form-control">
                        @foreach($guru as $Guru)
                            <option value={{$Guru->nip}}>{{$Guru->nama_guru}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="flex space-x-2 float-right">
                        <button type="submit" class="bg-blue-400 border shadow p-2 rounded text-white text-semibold flex items-center focus:outline-none focus:shadow-outline hover:bg-blue-900">
                            <span class="mx-2">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
