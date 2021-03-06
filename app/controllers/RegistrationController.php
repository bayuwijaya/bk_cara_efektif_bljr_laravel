<?php

class RegistrationController extends \BaseController {


	public function login()
	{
		return View::make('login');
	}
	public function authenticate()
	{
		$user = array(
		'email' => Input::get('email'),
		'password' => Input::get('password')
		);
		if (Auth::attempt($user))
		{
			return Redirect::to('profile');
		}
		return Redirect::to('login')->with('login_error','Could not log in.');
	}


	public function register()
	{
		return View::make('registration');
	}

	public function store()
	{
			$rules = array(
			'email' => 'required|email|unique:users',
			'password' => 'required|same:password_confirm',
			'name' => 'required'
			);
			$validation = Validator::make(Input::all(), $rules);
			if ($validation->fails())
			{
				return Redirect::to('register')->withErrors
				($validation)->withInput();
			}
			$user = new User;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->name = Input::get('name');
			$user->admin = Input::get('admin') ? 1 : 0;
			if ($user->save())
			{
				Auth::loginUsingId($user->id);
				return Redirect::to('login');
			}
			return Redirect::to('register')->withInput();
	}


	public function profile()
	{
		
		if (Auth::check())
		{
			return View::make('dashboard.dashboard')->with('user',Auth::user());
		}
		else
		{
			return Redirect::to('login')->with('login_error','You must login first.');
		}
	}
	
	public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }
}
