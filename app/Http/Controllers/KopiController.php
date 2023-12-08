<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KopiController extends Controller
{
	public function indexkopi()
	{
    	// mengambil data dari table kopi
		// $kopi = DB::table('kopi')->get();
        $kopi = DB::table('kopi')->paginate(15);

    	// mengirim data kopi ke view indexkopi
		 return view('indexkopi',['kopi' => $kopi]);


	}

	// method untuk menampilkan view form tambahkopi
	public function tambahkopi()
	{

		// memanggil view tambahkopi
		return view('tambahkopi');

	}

	// method untuk insert data ke table kopi
	public function store(Request $request)
	{
		// insert data ke table kopi
		DB::table('kopi')->insert([
			'kodekopi' => $request->kodekopi,
			'merkkopi' => $request->merkkopi,
			'stockkopi' => $request->stockkopi,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kopi
		return redirect('/kopi');

	}

	// method untuk edit data kopi
	public function editkopi($id)
	{
		// mengambil data kopi berdasarkan id yang dipilih
		$kopi = DB::table('kopi')->where('kodekopi',$id)->get();
		// passing data kopi yang didapat ke view editkopi.blade.php
		return view('editkopi',['kopi' => $kopi]);

	}

	// update data kopi
	public function update(Request $request)
	{
		// update data kopi
		DB::table('kopi')->where('kodekopi',$request->id)->update([
			'merkkopi' => $request->merkkopi,
			'stockkopi' => $request->stockkopi,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman kopi
		return redirect('/kopi');
	}

	// method untuk hapus data kopi
	public function hapus($id)
	{
		// menghapus data kopi berdasarkan id yang dipilih
		DB::table('kopi')->where('kodekopi',$id)->delete();

		// alihkan halaman ke halaman kopi
		return redirect('/kopi');
	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table kopi sesuai pencarian data
		$kopi = DB::table('kopi')
		->where('merkkopi','like',"%".$cari."%")
		->paginate();

    		// mengirim data kopi ke view indexkopi
		return view('indexkopi',['kopi' => $kopi, 'cari'=>$cari]);

	}

    public function viewkopi($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $kopi = DB::table('kopi')
                    ->where('kodekopi', $id)
                    ->get();

        // passing data pegawai yang didapat ke view edit.blade.php
        return view('viewkopi', ['kopi' => $kopi]);
    }

}
