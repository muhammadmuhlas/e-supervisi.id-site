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
		    
		    $user['id_administrator'] = "
		    		<br>
                    <br>
                    <a href='/administrator' type='button' class='btn btn-primary'>Lanjutkan Sebagai Administrator</a>
            ";
		    
	    }
	
	    if (Auth::user()->id_operator_sekolah <> null){
		
		    $user['id_guru'] = "
                    <br>
                    <br>
                    <a href='/operator-sekolah' type='button' class='btn btn-primary'>Lanjutkan Sebagai Operator Sekolah</a>		    
		    ";
		
	    }
	
	    if (Auth::user()->id_pengawas_sekolah <> null){
		
		    $user['id_kepala_sekolah'] = "
		    		<br>
                    <br>
                    <a href='/pengawas-sekolah' type='button' class='btn btn-primary'>Lanjutkan Sebagai Pengawas Sekolah</a>
            ";
		
	    }
	
	    if (Auth::user()->id_kepala_sekolah <> null){
		
		    $user['id_operator_sekolah'] = "
					<br>
                    <br>
                    <a href='/kepala-sekolah' type='button' class='btn btn-primary'>Lanjutkan Sebagai Kepala Sekolah</a>		    
		    ";
		
	    }
	
	    if (Auth::user()->id_guru <> null){
		
		    $user['id_pengawas_sekolah'] = "
		    		<br>
                    <br>
                    <a href='/guru' type='button' class='btn btn-primary'>Lanjutkan Sebagai Guru</a>
		    ";
		
	    }
	    
	    if (count($user) == 0){
		
		    $user['error'] = "<code>Not Registered User</code>";
	    }
	    
	    return view('landing', ['redirects' => $user]);
    }
}
