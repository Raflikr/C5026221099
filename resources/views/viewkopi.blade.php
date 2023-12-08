@extends('master2')
@section('judulhalaman', 'Jenis Kopi')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">Cafe Nongki Santai</a></h2>
        <h3>View Jenis Kopi</h3>
        <a href="/kopi"> Kembali</a>
    </div>

    <div class="row mt-4">
        <div class="col-6 border border-primary">

        </div>
        <div class="col-6">
            @foreach ($kopi as $k)
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Merk</strong>
                    </div>
                    <div class="col-8">
                        : {{ $k->merkkopi }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Stok</strong>
                    </div>
                    <div class="col-8">
                        : {{ $k->stockkopi }}
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <strong>Ketersediaan</strong>
                    </div>
                    <div class="col-8">
                        : {{ $k->tersedia }}
                    </div>
                </div>

            @endforeach

            <div class="text-center mt-4">
                <a href="/kopi" class="btn btn-primary btn-block" style="max-width: 30%; margin: 0 auto;">Ok</a>
            </div>
        </div>
    </div>
@endsection
