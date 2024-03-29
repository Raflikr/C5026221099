@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
	<h2>PT. Sumber Makmur Persero Tbk.</h2>
	<h3>Data Pegawai</h3>


	<a href="/pegawai/tambah" class="btn btn-primary mb-3 mt-2" > + Tambah Pegawai Baru</a>

	<br/>
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nama Pegawai"
                value="{{ old('cari', isset($cari) ? $cari : '') }}">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">CARI</button>
            </div>
        </div>
    </form>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$pegawai->links() }}

@endsection
