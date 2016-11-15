<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Guru
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	public function handle($request, Closure $next)
    {
	    if (Auth::user()) {
		
		    if (Auth::user()->id_guru <> null){
			
			    return $next($request);
		    }
			
		    /*redirect if column id_... is empty*/
		    return redirect('/');
	    }
	    
		/*redirect if not auth*/
	    return redirect('/');
    }
	
}
