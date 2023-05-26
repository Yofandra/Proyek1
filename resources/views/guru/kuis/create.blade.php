@extends('guru.layout')
@section('content')
    <div class="flex flex-col items-center pb-10">
        
        <h5 class="mb-1 text-xl font-semibold text-black py-3">Tambah Kuis</h5>
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
                <form method="post" action="{{ route('soal.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="kategori">Kategori Kuis</label>
                        <select name="kategori" class="form-control">
                        @foreach($kategori as $Kategori)
                            <option value={{$Kategori->id}}>{{$Kategori->nama}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="soal">Soal</label>
                        <input type="text" name="soal" class="form-control" id="soal" aria-describedby="soal" placeholder="Masukkan Soal" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_a">Opsi 1</label>
                        <input type="text" name="opsi_a" class="form-control" id="opsi_a" aria-describedby="opsi_a" placeholder="Masukkan Opsi Jawaban Ke 1" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_b">Opsi 2</label>
                        <input type="text" name="opsi_b" class="form-control" id="opsi_b" aria-describedby="opsi_b" placeholder="Masukkan Opsi Jawaban Ke 2" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_c">Opsi 3</label>
                        <input type="text" name="opsi_c" class="form-control" id="opsi_c" aria-describedby="opsi_c" placeholder="Masukkan Opsi Jawaban Ke 3" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_d">Opsi 4</label>
                        <input type="text" name="opsi_d" class="form-control" id="opsi_d" aria-describedby="opsi_d" placeholder="Masukkan Opsi Jawaban Ke 4" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_benar">Opsi Benar</label>
                        <input type="number" name="opsi_benar" class="form-control" id="opsi_benar" aria-describedby="opsi_benar" placeholder="Masukkan angka dari Opsi 1-4 yang benar" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
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
