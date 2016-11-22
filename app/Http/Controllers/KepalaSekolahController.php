<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
	public function index(){
		
		return view('kepala-sekolah.home');
	}
	public function indexData(){
	
		return redirect('/');
	}
	
	public function indexDataDataDiriKepalaSekolah(){
		
		return view('kepala-sekolah.data.data-diri-kepala-sekolah');
	}
	
	public function indexDataDataGuru(){
		
		return view('kepala-sekolah.data.data-guru');
	}
	
	public function indexSekolah(){
		
		return redirect('/');
	}
	
	public function indexSekolahEvaluasiDiriSekolah(){
		
		return view('kepala-sekolah.sekolah.evaluasi-diri-sekolah');
	}
	
}
