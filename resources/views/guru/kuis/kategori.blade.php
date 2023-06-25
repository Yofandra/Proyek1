@extends('guru.layout')
@section('content')
    <div class="flex flex-col items-center pb-10">
        
        <h5 class="mb-1 text-xl font-semibold text-black py-3">Tambah Kategori</h5>
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
                <form method="post" action="{{ route('soal.storeKategori') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Kategori Kuis</label>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Masukkan nama" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <input type="hidden" value="{{ Auth::user()->nip }}" name="guru_nip" id="guru_nip">                    
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
