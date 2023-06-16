@extends('guru.layout')
@section('content')
    <div class="flex flex-col items-center pb-10">
        
        <h5 class="mb-1 text-xl font-semibold text-black py-3">Edit Soal</h5>
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
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form method="post" action="{{ route('soal.update', $Soal->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="soal">Soal</label>
                        <input type="text" name="soal" value="{{$Soal->soal}}" class="form-control" id="soal" aria-describedby="soal"  class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_a">Opsi 1</label>
                        <input type="text" name="opsi_a" value="{{$Soal->opsi_a}}" class="form-control" id="opsi_a" aria-describedby="opsi_a" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_b">Opsi 2</label>
                        <input type="text" name="opsi_b" value="{{$Soal->opsi_b}}" class="form-control" id="opsi_b" aria-describedby="opsi_b" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_c">Opsi 3</label>
                        <input type="text" name="opsi_c" value="{{$Soal->opsi_c}}" class="form-control" id="opsi_c" aria-describedby="opsi_c" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_d">Opsi 4</label>
                        <input type="text" name="opsi_d" value="{{$Soal->opsi_d}}" class="form-control" id="opsi_d" aria-describedby="opsi_d" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    <div class="form-group">
                        <label for="opsi_benar">Opsi Benar</label>
                        <input type="number" name="opsi_benar" value="{{$Soal->opsi_benar}}" class="form-control" id="opsi_benar" aria-describedby="opsi_benar" class="formcontrol bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                    
                    
                    <div class="flex space-x-2 float-right">
                        <a class="bg-green-400 border shadow p-2 rounded text-white text-semibold flex items-center focus:outline-none focus:shadow-outline hover:bg-green-900" href="javascript:history.back()">Kembali</a>
                        <button type="submit" class="bg-blue-400 border shadow p-2 rounded text-white text-semibold flex items-center focus:outline-none focus:shadow-outline hover:bg-blue-900">
                            <span class="mx-2">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
