<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	
	public function index(Request $request){
		
		if (Auth::check()){
			
			return redirect('/landing');
		} else {
			
			return redirect('/login');
		}
	}
    public function landing(Request $request){
	
	    if (! Auth::check()){
		
		    return redirect('/login');
	    }
	    
	    if (! $request->session()->exists('default_home')){
		    
		    $data = array();
			$auth = Auth::user();
		    
		    if ($auth->id_administrator <> null){
			
			    $administrator = new \stdClass();
			    $administrator->name = "Administrator";
			    $administrator->url = str_slug($administrator->name);
			
			    array_push($data, $administrator);
		    }
		
		    if ($auth->id_pengawas_sekolah <> null){
			
			    $pengawas_sekolah = new \stdClass();
			    $pengawas_sekolah->name = "Pengawas Sekolah";
			    $pengawas_sekolah->url = str_slug($pengawas_sekolah->name);
			
			    array_push($data, $pengawas_sekolah);
		    }
		
		    if ($auth->id_operator_sekolah <> null){
			
			    $operator_sekolah = new \stdClass();
			    $operator_sekolah->name = "Operator Sekolah";
			    $operator_sekolah->url = str_slug($operator_sekolah->name);
			
			    array_push($data, $operator_sekolah);
		    }
		    
		    if ($auth->id_kepala_sekolah <> null){
			
			    $kepala_sekolah = new \stdClass();
			    $kepala_sekolah->name = "Kepala Sekolah";
			    $kepala_sekolah->url = str_slug($kepala_sekolah->name);
			
			    array_push($data, $kepala_sekolah);
		    }
		
		    if ($auth->id_guru <> null){
			
			    $guru = new \stdClass();
			    $guru->name = "Guru";
			    $guru->url = str_slug($guru->name);
			
			    array_push($data, $guru);
		    }
		
		    if (count($data) == 0){
			
			    /**
			     * Already handled at middleware, don't worry about Privileges Violence
			     */
			    $logout = new \stdClass();
			    $logout->name = "Logout";
			    $logout->url = str_slug($logout->name);
			
			    array_push($data, $logout);
		    }
		
		    return view('landing', ['redirects' => $data]);
	    } else {
			
		    $auth = Auth::user();
		    if ($auth->id_administrator == null){
			
			    $administrator = new \stdClass();
			    $administrator->name = "Administrator";
			    $administrator->url = str_slug($administrator->name);
			    
			    if ('/'. $administrator->url == $request->session()->get('default_home')){
				    
				    $request->session()->forget('default_home');
				    return redirect('/landing');
			    }
		    }
		
		    if ($auth->id_pengawas_sekolah == null){
			
			    $pengawas_sekolah = new \stdClass();
			    $pengawas_sekolah->name = "Pengawas Sekolah";
			    $pengawas_sekolah->url = str_slug($pengawas_sekolah->name);
			
			    if ('/'. $pengawas_sekolah->url == $request->session()->get('default_home')){
				
				    $request->session()->forget('default_home');
				    return redirect('/landing');
			    }
		    }
		
		    if ($auth->id_operator_sekolah == null){
			
			    $operator_sekolah = new \stdClass();
			    $operator_sekolah->name = "Operator Sekolah";
			    $operator_sekolah->url = str_slug($operator_sekolah->name);
			
			    if ('/'. $operator_sekolah->url == $request->session()->get('default_home')){
				
				    $request->session()->forget('default_home');
				    return redirect('/landing');
			    }
		    }
		
		    if ($auth->id_kepala_sekolah == null){
			
			    $kepala_sekolah = new \stdClass();
			    $kepala_sekolah->name = "Kepala Sekolah";
			    $kepala_sekolah->url = str_slug($kepala_sekolah->name);
			
			    if ('/'. $kepala_sekolah->url == $request->session()->get('default_home')){
				
				    $request->session()->forget('default_home');
				    return redirect('/landing');
			    }
		    }
		
		    if ($auth->id_guru == null){
			
			    $guru = new \stdClass();
			    $guru->name = "Guru";
			    $guru->url = str_slug($guru->name);
			
			    if ('/'. $guru->url == $request->session()->get('default_home')){
				
				    $request->session()->forget('default_home');
				    return redirect('/landing');
			    }
		    }
		    
		    return redirect($request->session()->get('default_home'));
	    }
    }
	
	public function setting(Request $request){
		
		if (! Auth::check()){
			
			return redirect('/login');
		}
		
		$data = array();
		$auth = Auth::user();
		
		if ($auth->id_administrator <> null){
			
			$administrator = new \stdClass();
			$administrator->name = "Administrator";
			$administrator->url = str_slug($administrator->name);
			
			array_push($data, $administrator);
		}
		
		if ($auth->id_pengawas_sekolah <> null){
			
			$pengawas_sekolah = new \stdClass();
			$pengawas_sekolah->name = "Pengawas Sekolah";
			$pengawas_sekolah->url = str_slug($pengawas_sekolah->name);
			
			array_push($data, $pengawas_sekolah);
		}
		
		if ($auth->id_operator_sekolah <> null){
			
			$operator_sekolah = new \stdClass();
			$operator_sekolah->name = "Operator Sekolah";
			$operator_sekolah->url = str_slug($operator_sekolah->name);
			
			array_push($data, $operator_sekolah);
		}
		
		if ($auth->id_kepala_sekolah <> null){
			
			$kepala_sekolah = new \stdClass();
			$kepala_sekolah->name = "Kepala Sekolah";
			$kepala_sekolah->url = str_slug($kepala_sekolah->name);
			
			array_push($data, $kepala_sekolah);
		}
		
		if ($auth->id_guru <> null){
			
			$guru = new \stdClass();
			$guru->name = "Guru";
			$guru->url = str_slug($guru->name);
			
			array_push($data, $guru);
		}
		
		if (count($data) == 0){
			
			/**
			 * Already handled at middleware, don't worry about Privileges Violence
			 */
			$logout = new \stdClass();
			$logout->name = "Logout";
			$logout->url = str_slug($logout->name);
			
			array_push($data, $logout);
		}
		
		return view('setting', ['redirects' => $data]);
	}
}
