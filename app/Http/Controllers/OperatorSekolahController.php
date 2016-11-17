<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorSekolahController extends Controller
{
	public function index(){
		
		return view('operator-sekolah.home');
	}
}
