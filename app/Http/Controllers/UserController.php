<?php namespace App\Http\Controllers;

use Auth;
use Hash;
use Request;

class UserController extends Controller {

	
	public function getlogin()
	{
		return view('auth/login');
	}

	public function postlogin()
	{
		$request = Request::all();
		$usernumber = $request['usernumber'];
		$password = $request['password'];
		if(Auth::attempt(['usernumber' => $usernumber, 'password' => $password, 'used' => 0])){
			return redirect('/');
		}
		return view('auth/login')->with('errors',['Login Failed']);
	}

	public function getlogout(){
		Auth::logout();
		redirect('login');
	}

	public function getdisableaccount()
	{
		Auth::User()->used = 1;
		Auth::User()->save();
		Auth::logout();
		return view('voted');
	}
}
