<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengawasSekolahController extends Controller
{
	public function index(){
		
		return view('pengawas-sekolah.home');
	}

	public function indexManajemenData(){
	
		return redirec('/');
	}
	
	public function indexManajemenDataGuru(){
		
		return view('pengawas-sekolah.manajemen-data.guru');
	}
	
	public function indexManajemenDataKepalaSekolah(){
		
		return view('pengawas-sekolah.manajemen-data.kepala-sekolah');
	}
	
	public function indexManajemenDataPengawas(){
		
		return view('pengawas-sekolah.manajemen-data.pengawas');
	}
	
	public function indexManajemenDataSekolahBinaan(){
		
		return view('pengawas-sekolah.manajemen-data.sekolah-binaan');
	}
	
	public function indexInstrumenSupervisi(){
		
		return redirec('/');
	}
	
	public function indexInstrumenSupervisiAkademik(){
		
		return view('pengawas-sekolah.instrumen-supervisi.akademik');
	}
	
	public function indexInstrumenSupervisiManajerial(){
		
		return view('pengawas-sekolah.instrumen-supervisi.manajerial');
	}
	
}
