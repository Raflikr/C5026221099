@extends('master2')
@section('judulhalaman','Nilai Kuliah')

@section('konten')
	<h2>Nilai Kuliah Mahasiswa Sistem Informasi ITS</h2>

	<a href="/nilaikuliah/tambah2" class="btn btn-primary"> + Tambah Nilai Baru</a>
    <br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>NilaiAngka</th>
			<th>SKS</th>
			<th>NilaiHuruf</th>
            <th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @php
                    $nilaiHuruf = '';
                    $bobot = $n->NilaiAngka * $n->SKS;

                    if ($n->NilaiAngka <= 40) {
                        $nilaiHuruf = 'D';
                    } elseif ($n->NilaiAngka <= 60) {
                        $nilaiHuruf = 'C';
                    } elseif ($n->NilaiAngka <= 80) {
                        $nilaiHuruf = 'B';
                    } else {
                        $nilaiHuruf = 'A';
                    }
                @endphp
                {{ $nilaiHuruf }}
            </td>
            <td>{{ $bobot }}</td>

		</tr>
		@endforeach
	</table>

@endsection
