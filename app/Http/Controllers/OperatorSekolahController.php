<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorSekolahController extends Controller
{
	public function index(){
		
		return view('operator-sekolah.home');
	}
	public function indexDataGuruDanMataPelajaran(){
	
		return redirect('/');
	}
		
	public function indexDataGuruDanMataPelajaranDataGuru(){
		
		return view('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-guru');
	}
		
	public function indexDataGuruDanMataPelajaranMataPelajaran(){
		
		return view('operator-sekolah.data-guru-dan-data-mata-pelajaran.data-mata-pelajaran');
	}
		
	public function indexDataKelasDanDataSiswa(){
		
		return redirect('/');
	}
		
	public function indexDataKelasDanDataSiswaDataKelas(){
		
		return view('operator-sekolah.data-kelas-dan-data-siswa.data-kelas');
	}
		
	public function indexDataKelasDanDataSiswaDataSiswa(){
		
		return view('operator-sekolah.data-kelas-dan-data-siswa.data-siswa');
	}
		
	public function indexDataSekolahDanDataSarpras(){
		
		return redirect('/');
	}
		
	public function indexDataSekolahDanDataSarprasDataSekolah(){
		
		return view('operator-sekolah.data-sekolah-dan-data-sarpras.data-sekolah');
	}
		
	public function indexDataSekolahDanDataSarprasDataSarpras(){
		
		return view('operator-sekolah.data-sekolah-dan-data-sarpras.data-sarpras');
	}
		
}
