
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data</title>
	<div class="card-body">
        <a href="/mobil" class="btn btn-primary">Kembali</a>
	</div>
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Mobil - <strong>EDIT DATA</strong> - <a href="https://www.toyotagazooracing.com" target="_blank">Toyota GR</a>
            </div>
			@foreach($mobil as $m)
            <div class="card-body">
                <a href="/mobil/edit/{{ $m->id }}" class="btn btn-primary">Reset</a>
                <br/>
                <br/>
                    
                <form action="/mobil/update/{{ $m->id }}" method="post">
 
                    {{ csrf_field() }}

					<input type="hidden" name="id" value="{{ $m->id }}">

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama mobil .." value="{{ $m->nama_mobil }}">
 
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
 
                    </div>
 
                    <div class="form-group">
                        <label></label>
                        <textarea name="harga" class="form-control" placeholder="Harga Mobil ..">{{ $m->harga_mobil }}</textarea>
 
                        @if($errors->has('harga'))
                            <div class="text-danger">
                                {{ $errors->first('harga')}}
                            </div>
                        @endif
 
                    </div>

                    <div class="form-group">
                        <label></label>
                        <textarea name="tahun" class="form-control" placeholder="Tahun Mobil ..">{{ $m->tahun_mobil }}</textarea>
 
                        @if($errors->has('tahun'))
                            <div class="text-danger">
                                {{ $errors->first('tahun')}}
                            </div>
                        @endif
 
                    </div>

                    <div class="form-group">
                        <label></label>
                        <textarea name="warna" class="form-control" placeholder="Warna Mobil ..">{{ $m->warna_mobil }}</textarea>
 
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
			@endforeach
        </div>
    </div>
</body>
</html>
