@extends('master2')
@section('judulhalaman','Data Kopi')

@section('konten')

	<h2><a href="https://www.malasngoding.com">Cafe Nongki Santai</h2>
	<h3>Jenis Kopi</h3>

	<a href="/kopi"> Kembali</a>

	<br/>
	<br/>

	<form action="/kopi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkkopi" class="col-sm-1 col-form-label mr-2">Merk</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="merkkopi" name="merkkopi">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockkopi" class="col-sm-1 col-form-label mr-2">Stok</label>
            <div class="col-sm-4">
            <input type="number" class="form-control" id="stockkopi" name="stockkopi">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-1 col-form-label mr-2">Ketersediaan</label>
            <div class="col-sm-4">
            <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
		<div class="form-group row">
            <div class="col-sm-9 offset-sm-1">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
	</form>

@endsection
