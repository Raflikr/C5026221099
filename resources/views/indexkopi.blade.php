@extends('master2')
@section('judulhalaman','Stok Kopi')

@section('konten')
	<h2>Cafe Nongki Santai</h2>
	<h3>Stok Kopi</h3>


	<a href="/kopi/tambahkopi" class="btn btn-primary mb-3 mt-2" > + Tambah Jenis Kopi</a>

	<br/>
    <p>Cari Jenis Kopi :</p>
    <form action="/kopi/cari" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="cari" placeholder="Cari Jenis Kopi"
                value="{{ old('cari', isset($cari) ? $cari : '') }}">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">CARI</button>
            </div>
        </div>
    </form>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode ID</th>
			<th>Merk</th>
			<th>Stok</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($kopi as $k)
		<tr>
			<td>{{ $k->kodekopi }}</td>
			<td>{{ $k->merkkopi }}</td>
			<td>{{ $k->stockkopi }}</td>
			<td>{{ $k->tersedia }}</td>
			<td>
                <a href="/kopi/viewkopi/{{ $k->kodekopi }}" class="btn btn-success">View</a>
                |
				<a href="/kopi/editkopi/{{ $k->kodekopi }}" class="btn btn-warning">Edit</a>
				|
				<a href="/kopi/hapus/{{ $k->kodekopi }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$kopi->links() }}

@endsection
