@extends('guru.layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI SOAL</h2>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @foreach($soal as $Soal)
    <div class="relative overflow-x-auto">
        <fieldset class="space-y-4 bg-white p-2 m-4">
            
                    <div class="flex text-semibold items-center justify-center py-2 border-b border-gray-300">
                        <h5>{{$Soal->soal}}</h5>
                    </div>
        <fieldset>
                    <div class="flex items-center mb-2">
                        <input id="opsi_a" type="radio" name="jawab" value="opsi_a" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="opsi_a" aria-describedby="opsi_a">
                        <label for="opsi_a" class="text-sm font-medium text-gray-900 ml-2 block">
                        {{$Soal->opsi_a}}
                        </label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="opsi_b" type="radio" name="jawab" value="opsi_b" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="opsi_b" aria-describedby="opsi_b">
                        <label for="opsi_b" class="text-sm font-medium text-gray-900 ml-2 block">
                        {{$Soal->opsi_b}}
                        </label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="opsi_c" type="radio" name="jawab" value="opsi_c" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="opsi_c" aria-describedby="opsi_c">
                        <label for="opsi_c" class="text-sm font-medium text-gray-900 ml-2 block">
                        {{$Soal->opsi_c}}
                        </label>
                    </div>

                    <div class="flex items-center mb-2">
                        <input id="opsi_d" type="radio" name="jawab" value="opsi_d" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="opsi_d" aria-describedby="opsi_d">
                        <label for="opsi_d" class="text-sm font-medium text-gray-900 ml-2 block">
                        {{$Soal->opsi_d}}
                        </label>
                    </div>
                    <form action="{{ route('soal.destroy',$Soal->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-2 font-medium rounded-lg text-sm px-3 py-2.5 mr-2 mb-2">Hapus Soal</button>
                    </form>
                    
        
    </div>
    @endforeach
@endsection
