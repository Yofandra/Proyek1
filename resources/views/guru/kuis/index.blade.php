@extends('guru.layout')
@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI KUIS</h2>
            </div>
            <div class="fixed top-20 right-2">
                <a class="text-white text-semibold bg-[#00B074] hover:bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2" href="{{ route('soal.create') }}" >Tambah Kuis</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
<div class="m-6">
    <div class="flex flex-wrap -mx-6">
        @foreach($kategori as $Kategori)
        <div class="p-6 sm:w-1/2 xl:w-1/2">
            <div class="flex items-center px-5 py-6 shadow-sm rounded-md bg-white shadow">
                <div class="p-6 rounded-full bg-green-600 bg-opacity-20">
                    <i class="fas fa-address-card fa-2x" style="color:#464255"></i>
                </div>

                <div class="mx-4">
                    <h1 class="text-xl font-bold text-gray-700">{{$Kategori->nama}}</h1>
                    <a class="btn btn-info" href="{{ route('soal.show',$Kategori->id) }}">Show</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
