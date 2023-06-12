<html>

<head>
    <title>Hasil Kuis</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="container mt-2 text-center">
            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h2>Hasil Kuis</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Sesi</th>
                                <th>Nilai</th>
                                <th>Selesai</th>
                            </tr>
                            <?php $i = 1; ?>
                            @foreach ($nilai as $Nilai)
                                <tbody>
                                    <td>
                                        {{ $i }}
                                    </td>
                                    <td>
                                        {{ $Nilai->siswa->nama }}
                                    </td>
                                    <td>
                                        {{ $Nilai->kategori->nama}}
                                    </td>
                                    <td>
                                        {{ $Nilai->nilai }}
                                    </td>
                                    <td>
                                        {{ date('d F Y, h:i A', strtotime($Nilai->waktu_pengerjaan)) }}
                                    </td>
                                    </tr>
                                </tbody>
                                <?php $i++; ?>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
