    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css','resources/js/app.js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <title>Page Siswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="dist/css/style.css">
    {{-- ctrl+h untuk block semua kata --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0//dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
<body class="hold-transition">
    <div class="wrapper">
        <div class="content-wrapper bg-white">
            <div class="container-fluid">
                <div class="flex flex-col items-center pb-10">
                    <h1 class="mb-1 font-bold text-black py-3 ">KUIS</h1>
                    <div class="w-3/5 py-3 px-8 bg-white border border-gray-400 rounded-lg shadow-2xl">
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
                            <form method="post" action="{{ route('kuis.store',['nis' => Auth::user()->nis])}}" id="myForm">
                                @csrf
                                @foreach ($soal as $Soal)
                                    <div class=" mt-4 mb-2 rounded-lg border-b border-gray-300">
                                        <h5 class="p-2 text-gray-900">{{ $loop->iteration }}. {{ $Soal->soal }}</h5>
                                    </div>
                                    
                                    <div class="flex items-center mb-2 rounded-lg p-1 w-1/2">
                                        <input type="radio" name="jawab_{{$Soal->id}}" value="1" class="h-4 w-4 bg-gray-100 border-gray-600 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1">
                                        <label class="text-x font-medium text-gray-900 my-2 mx-4">
                                        {{ $Soal->opsi_a }}
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-2 bg-gray-200 rounded-lg p-1">
                                        <input type="radio" name="jawab_{{$Soal->id}}" value="2" class="h-4 w-4 bg-gray-100 border-gray-600 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-2" aria-describedby="country-option-2">
                                        <label class="text-x font-medium text-gray-900 my-2 mx-4">
                                        {{ $Soal->opsi_b }}
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-2  rounded-lg p-1">
                                        <input type="radio" name="jawab_{{$Soal->id}}" value="3" class="h-4 w-4 bg-gray-100 border-gray-600 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-3" aria-describedby="country-option-3">
                                        <label class="text-x font-medium text-gray-900 my-2 mx-4">
                                        {{ $Soal->opsi_c}}
                                        </label>
                                    </div>

                                    <div class="flex items-center mb-2 bg-gray-200 rounded-lg p-1">
                                        <input type="radio" name="jawab_{{$Soal->id}}" value="4" class="h-4 w-4 bg-gray-100 border-gray-600 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-4" aria-describedby="country-option-4">
                                        <label class="text-x font-medium text-gray-900 my-2 mx-4">
                                        {{ $Soal->opsi_d}}
                                        </label>
                                    </div>
                                @endforeach
                                <input type="hidden" value="{{ Auth::user()->nis }}" name="siswa_nis" id="siswa_nis">
                                <input type="hidden" value="{{$Soal->kategori->id}}" name="kategori_id" id="kategori_id">
                                <div class="flex space-x-2 float-right">
                                    <button type="submit" class="bg-blue-400 border shadow p-2 rounded text-white text-semibold flex items-center focus:outline-none focus:shadow-outline hover:bg-blue-900">
                                        <span class="mx-2">Submit</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE -->
    <script src="dist/js/adminlte.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard3.js"></script>
    </body>

    </html>