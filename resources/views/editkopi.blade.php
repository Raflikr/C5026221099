@extends('master2')
@section('judulhalaman','Edit Kopi')

@section('konten')
  <h2><a href="https://www.malasngoding.com">Cafe Nongki Santai</a></h2>
  <h3>Edit Jenis Kopi</h3>

  <a href="/kopi"> Kembali</a>

  <br/>
  <br/>

  @foreach($kopi as $k)
  <form action="/kopi/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $k->kodekopi }}"> <br/>
    <div class="form-group row">
        <label for="merkkopi" class="col-sm-1 col-form-label mr-2">Merk</label>
        <div class="col-sm-4">
            <input type="text" required="required" class="form-control" name="merkkopi" value="{{ $k->merkkopi }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="stockkopi" class="col-sm-1 col-form-label mr-2">Stok</label>
        <div class="col-sm-4">
            <input type="number" required="required" class="form-control" name="stockkopi" value="{{ $k->stockkopi }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="tersedia" class="col-sm-1 col-form-label mr-2">Ketersediaan</label>
        <div class="col-sm-4">
            <input type="text" required="required" class="form-control" name="tersedia" value="{{ $k->tersedia }}">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-9 offset-sm-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </div>
  </form>
  @endforeach

@endsection
