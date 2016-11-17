<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/landing';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    /**
     * Change Column From 'email' to 'username' When Logging In
     * */
	public function username(){
		
		return 'username';
	}
	
	/**
	 * Double Check If Username Fails -> Check With Email
	 * */
	protected function sendFailedLoginResponse(Request $request)
	{
		if (Auth::attempt(['email' => $request->input('username'), 'password' => $request->input('password')])) {
			
			return $this->sendLoginResponse($request);
		}
		
		return redirect()->back()
			->withInput($request->only($this->username(), 'remember'))
			->withErrors([
				$this->username() => Lang::get('auth.failed'),
			]);
	}
	
	/**
	 * When Authenticated
	 */
	protected function authenticated(Request $request, $user)
	{
		//logging or maybe check something...
	}
	
}
