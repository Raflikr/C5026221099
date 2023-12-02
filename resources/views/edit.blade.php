@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
  <h2><a href="https://www.malasngoding.com">PT. Sumber Makmur Persero Tbk.</a></h2>
  <h3>Edit Pegawai</h3>

  <a href="/pegawai"> Kembali</a>

  <br/>
  <br/>

  @foreach($pegawai as $p)
  <form action="/pegawai/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
    <div class="form-group row">
        <label for="nama" class="col-sm-1 col-form-label mr-2">Nama</label>
        <div class="col-sm-4">
            <input type="text" required="required" class="form-control" name="nama" value="{{ $p->pegawai_nama }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="jabatan" class="col-sm-1 col-form-label mr-2">Jabatan</label>
        <div class="col-sm-4">
            <input type="text" required="required" class="form-control" name="jabatan" value="{{ $p->pegawai_jabatan }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="umur" class="col-sm-1 col-form-label mr-2">Umur</label>
        <div class="col-sm-4">
            <input type="number" required="required" class="form-control" name="umur" value="{{ $p->pegawai_umur }}">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat" class="col-sm-1 col-form-label mr-2">Alamat</label>
        <div class="col-sm-4">
            <textarea required="required" class="form-control" name="alamat"  rows="8">{{ $p->pegawai_alamat }}</textarea>
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
