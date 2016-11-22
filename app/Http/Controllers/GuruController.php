<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
	public function index(){
		
		return view('guru.home');
	}

	public function indexData(){
		
		return redirect('/');
	}
	public function indexDataDataDiriGuru(){
		
		return view('guru.data.data-diri-guru');
	}
		
	public function indexBukuKerja(){
		
		return redirect('/');
	}
		
	public function indexBukuKerjaBukuKerja1(){
		
		return view('guru.buku-kerja.buku-kerja-1');
	}
	
	public function indexBukuKerjaBukuKerja2(){
		
		return view('guru.buku-kerja.buku-kerja-2');
	}
	
	public function indexBukuKerjaBukuKerja3(){
		
		return view('guru.buku-kerja.buku-kerja-3');
	}
	
	public function indexBukuKerjaBukuKerja4(){
		
		return view('guru.buku-kerja.buku-kerja-4');
	}

}
