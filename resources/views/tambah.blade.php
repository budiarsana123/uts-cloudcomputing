
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah Data</title>
		<div class="card-body">
            <a href="/mobil" class="btn btn-primary">Kembali</a>
		</div>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mobil - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">Toyota GR</a>
                </div>
                <div class="card-body">
                    <a href="/mobil/tambah" class="btn btn-primary">Hapus Semua</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/mobil/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama Mobil</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Mobil ..">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Harga Mobil</label>
                            <textarea name="harga" class="form-control" placeholder="Harga Mobil .."></textarea>
 
                             @if($errors->has('harga'))
                                <div class="text-danger">
                                    {{ $errors->first('harga')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Tahun Mobil</label>
                            <textarea name="tahun" class="form-control" placeholder="Tahun Mobil .."></textarea>
 
                             @if($errors->has('tahun'))
                                <div class="text-danger">
                                    {{ $errors->first('tahun')}}
                                </div>
                            @endif
 
                        </div>
                        <div class="form-group">
                            <label>Warna Mobil</label>
                            <textarea name="warna" class="form-control" placeholder="Warna Mobil .."></textarea>
 
                             @if($errors->has('warna'))
                                <div class="text-danger">
                                    {{ $errors->first('warna')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
            </div>
        </div>
    </body>
</html>