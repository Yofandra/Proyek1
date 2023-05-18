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
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="flex flex-wrap -mx-6 bg-green-200">
            <form class="w-full max-w-screen-md mx-auto">
                <div class="pagetitle p-4">
                    <h1 class="text-center">KUIS</h1>
                </div>
                <fieldset class="space-y-6 bg-white p-4 m-6">
                    <div class="flex items-center justify-center py-4 border-b border-gray-300">
                        <h2>pertanyaan</h2>
                    </div>
                <fieldset>
                    <div class="flex items-center mb-4">
                        <input id="country-option-1" type="radio" name="countries" value="USA" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-1" aria-describedby="country-option-1">
                        <label for="country-option-1" class="text-sm font-medium text-gray-900 ml-2 block">
                        United States
                        </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="country-option-2" type="radio" name="countries" value="Germany" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-2" aria-describedby="country-option-2">
                        <label for="country-option-2" class="text-sm font-medium text-gray-900 ml-2 block">
                        Germany
                        </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="country-option-3" type="radio" name="countries" value="Spain" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-3" aria-describedby="country-option-3">
                        <label for="country-option-3" class="text-sm font-medium text-gray-900 ml-2 block">
                        Spain
                        </label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="country-option-4" type="radio" name="countries" value="United Kingdom" class="h-4 w-4 border-gray-300 focus:ring-2 focus:ring-blue-300" aria-labelledby="country-option-4" aria-describedby="country-option-4">
                        <label for="country-option-4" class="text-sm font-medium text-gray-900 ml-2 block">
                        United Kingdom
                        </label>
                    </div>

                </fieldset>
                    <div class="flex space-x-2 justify-center">
                        <button class="bg-red-400 border border-white p-2 rounded text-gray-700 flex items-center focus:outline-none focus:shadow-outline">
                            <svg width="24" height="24" viewBox="0 0 16 16">
                            <path d="M9 4 L5 8 L9 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" />
                            </svg>
                            <span class="mx-2">Back</span>
                        </button>
                        <button class="bg-green-400 border border-green-800 shadow p-2 rounded text-white flex items-center focus:outline-none focus:shadow-outline">
                            <span class="mx-2">Next</span>
                            <svg width="24" height="24" viewBox="0 0 16 16">
                            <path d="M7 4 L11 8 L7 12" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex space-x-2 float-right">
                        <button class="bg-blue-400 border border-green-800 shadow p-2 rounded text-white text-semibold flex items-center focus:outline-none focus:shadow-outline">
                        <span class="mx-2">Selesai</span>
                    </button>
                    </div>
                    
                </div>
                <div class="d-flex">
                    {{-- {{ $mahasiswas->links() }} --}}
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