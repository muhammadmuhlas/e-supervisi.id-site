<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OperatorSekolah
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
			
			if (Auth::user()->id_operator_sekolah <> null){
				
				$request->session()->put('default_home', '/operator-sekolah');
				return $next($request);
			}
			
			/*redirect if column id_... is empty*/
			return redirect('/');
		}
		
		/*redirect if not auth*/
		return redirect('/');
	}
}
