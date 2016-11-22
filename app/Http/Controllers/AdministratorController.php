<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index(){
	    
	    return view('administrator.home');
    }

	public function indexInputData(){
		
		return redirect('/');
	}
	public function indexInputDataGuru(){
		
		return view('administrator.input-data.guru');
	}
	public function indexInputDataKepalaSekolah(){
		
		return view('administrator.input-data.kepala-sekolah');
	}
	public function indexInputDataOperatorSekolah(){
		
		return view('administrator.input-data.operator-sekolah');
	}
	public function indexInputDataPengawasSekolah(){
		
		return view('administrator.input-data.pengawas-sekolah');
	}
	
	public function indexKontrolData(){
		
		return redirect('/');
	}
	public function indexKontrolDataGuru(){
		
		return view('administrator.kontrol-data.guru');
	}
	public function indexKontrolDataKepalaSekolah(){
		
		return view('administrator.kontrol-data.kepala-sekolah');
	}
	public function indexKontrolDataOperatorSekolah(){
		
		return view('administrator.kontrol-data.operator-sekolah');
	}
	public function indexKontrolDataPengawasSekolah(){
		
		return view('administrator.kontrol-data.pengawas-sekolah');
	}
}
