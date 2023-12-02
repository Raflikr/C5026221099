@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">PT. Sumber Makmur Persero Tbk.</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label mr-2">Nama</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label mr-2">Jabatan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label mr-2">Umur</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label mr-2">Alamat</label>
            <div class="col-sm-4">
                <textarea class="form-control" name="alamat" id="alamat" cols="22" rows="10"></textarea>

            </div>
        </div>

		<div class="form-group row">
            <div class="col-sm-9 offset-sm-1">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
	</form>

@endsection
