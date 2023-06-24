@extends('guru.layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 margin-tb">
            <div class="pull-left mt-2 px-6 py-2">
                <h2>INFORMASI HASIL KUIS</h2>
                <form action="{{ route('nilai.show', Auth::user()->nip) }}" method="GET">
                    <div class="flex col-lg-6">
                        <input class="form-control" type="text" name="search" placeholder="Cari siswa..."
                            value="{{ $search ?? '' }}">
                        <button type="submit"
                            class="bg-blue-400 border shadow rounded text-white text-semibold items-center">
                            <span class="mx-2">Cari</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="fixed top-20 right-2">
                <button type="button"
                    class="text-white text-semibold bg-green hover:bg-red-500 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2"
                    data-toggle="modal" data-target="#cetak-pdf">
                    {{ __('Cetak Laporan') }}
                </button>
                <button type="button"
                    class="text-white text-semibold bg-red hover:bg-red-500 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2"
                    data-toggle="modal" data-target="#reset">
                    {{ __('Reset Nilai') }}
                </button>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-x text-left text-gray-500">
            <thead class="text-x text-semibold text-gray-700 uppercase bg-green-100 dark:bg-gray-700 ">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center text-bold">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Siswa
                    </th>
                    <th scope="col" class="px-6 py-3 text-center text-bold">
                        Sesi
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Nilai
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Selesai
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            @foreach ($nilai as $Nilai)
                <tbody>
                    <tr class="bg-white border-b ">
                        <td class="px-6 py-2 text-center text-bold">
                            {{ $i }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $Nilai->siswa->nama }}
                        </td>
                        <td class="px-6 py-2">
                            {{ $Nilai->kategori->nama }}
                        </td>
                        <td class="px-6 py-2 text-center">
                            {{ $Nilai->nilai }}
                        </td>
                        <td class="px-6 py-2 text-center">
                            {{ date('d F Y, h:i A', strtotime($Nilai->waktu_pengerjaan)) }}
                        </td>
                        <td class="px-6 py-2 text-center">
                            <form action="{{ route('nilai.destroy', $Nilai->id) }}" method="POST"
                                onsubmit="return confirm('Apakah anda yakin?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-black"><i class='fas fa-trash-alt'
                                        style='font-size:24px'></i></button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; ?>
            @endforeach
        </table>
    </div>
    <!-- Modal Cetak PDF-->
    <div class="modal fade" id="cetak-pdf" tabindex="-1" role="dialog" aria-labelledby="cetakLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cetakLabel">Pilih Kelas yang ingin di cetak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <label>Kelas</label>
                    <div class="form-group">
                        <form action="{{ route('nilai.cetak_pdf') }}" method="GET">
                            <select name="kelas" id="kelas" class="form-control">
                                <option value="">Semua Kelas</option>
                                @foreach ($kelas as $Kelas)
                                    <option value="{{ $Kelas->idKelas }}">{{ $Kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                            <div><i>Silahkan Pilih Kelas yang Laporan nilainya ingin anda cetak</i></div>
                            <button type="submit" class="btn btn-primary float-right">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Reset Nilai-->
    <div class="modal fade" id="reset" tabindex="-1" role="dialog" aria-labelledby="resetLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="resetLabel">Pilih Kategori yang ingin di hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <label>Kategori</label>
                    <div class="form-group">
                        <form action="{{ route('nilai.resetData') }}" method="POST"
                            onsubmit="return confirm('Apakah anda yakin untuk menghapus semua nilai siswa pada kategori tersebut?')">
                            @csrf
                            @method('DELETE')
                            <select class="form-control" name="kategori_id" id="kategori_id">
                                @foreach ($kategori as $Kategori)
                                    <option value="{{ $Kategori->id }} ">{{ $Kategori->nama }}</option>
                                @endforeach
                            </select>
                            <div><i>Sebelum menghapus pastikan kategori yang anda pilih benar, Data yang sudah
                                    direset tidak
                                    bisa dikembalikan!</i></div>
                            <button type="submit"
                                class="text-white float-right text-semibold bg-red hover:bg-red-500 font-medium rounded-lg text-sm px-2 py-2.5 mr-2 mb-2">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
