<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	
	public function index(){
		
		if (Auth::check()){
			
			return redirect('/landing');
		} else {
			
			return redirect('/login');
		}
	}
    public function landing(){
	    
	    $user = array();
	    
	    if (Auth::user()->id_administrator <> null){
		    
		    $user['id_administrator'] = Auth::user()->id_administrator;
		    
	    }
	
	    if (Auth::user()->id_guru <> null){
		
		    $user['id_guru'] = Auth::user()->id_guru;
		
	    }
	
	    if (Auth::user()->id_kepala_sekolah <> null){
		
		    $user['id_kepala_sekolah'] = Auth::user()->id_kepala_sekolah;
		
	    }
	
	    if (Auth::user()->id_operator_sekolah <> null){
		
		    $user['id_operator_sekolah'] = Auth::user()->id_operator_sekolah;
		
	    }
	
	    if (Auth::user()->id_pengawas_sekolah <> null){
		
		    $user['id_pengawas_sekolah'] = Auth::user()->id_pengawas_sekolah;
		
	    }
	    
	    if (count($user) == 0){
		    
		    return "Insufficient Permission";
	    }
	    
	    return $user;
    }
}
