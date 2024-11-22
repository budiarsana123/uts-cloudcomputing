<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Mobil</title>
    <div class="button-container">
        <a href="/" class="btn btn-primary">Kembali</a>
    </div>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Mobil - <a href="https://www.toyotagazooracing,com" target="_blank">Toyota GR</a>
            </div>
            <div class="card-body">
                <a href="/mobil/tambah" class="btn btn-primary">Input Data Baru</a>
                <br />
                <br />
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Tahun</th>
                            <th>Warna</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mobil as $m)
                        <tr>
                            <td>{{ $m->nama_mobil }}</td>
                            <td>{{ $m->harga_mobil }}</td>
                            <td>{{ $m->tahun_mobil }}</td>
                            <td>{{ $m->warna_mobil }}</td>
                            <td>
                                <a href="/mobil/edit/{{ $m->id }}" class="btn btn-warning">Edit</a>
                                |
                                <a href="/mobil/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>