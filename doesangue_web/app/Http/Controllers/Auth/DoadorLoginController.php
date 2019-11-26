<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class DoadorLoginController extends Controller
{

	public function __construct(){
		$this->middleware('guest:doador');
	}

    public function showLoginForm(){
    	return view('auth.doador-login');
    }

    public function login(Request $request){
    	//return true;

    	//validate the fform data
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	//attempt to login the user in
    

    	if(Auth::guard('doador')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){

    		//if successfull, then redirect to their intended location
    		return redirect()->intended(route('doador.dashboard'));
    	}
    	

    	// if unsuccessful, then redirect back to the login with the form data
    return redirect()->back()->withInput($request->only('email','remember'));

    }
}
