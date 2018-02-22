<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getRegister()
	{
		return view('/auth/register');
	}
	
    public function postRegister(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|string|min:3',
			'email' => 'required|string|email|unique:users',
			'password' => 'required|string|min:6|confirmed'
		]);
		
		User::create([
			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password)
		]);
		return redirect()->route('auth.login');
	}

	public function getLogin()
	{	
		return view('/auth/login');
	}

	public function postLogin(Request $request )
	{
		if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])){
			
			return redirect()->back();
		}
		
		return redirect()->route('auth.layout');
	}

	public function logout()
	{
		auth()->logout();
		
		return redirect()->route('auth.login');
	}

}
