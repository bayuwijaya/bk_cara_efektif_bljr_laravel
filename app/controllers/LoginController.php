<?php
class LoginController extends BaseController 
{
	public function showLogin()
	{
		return View::make('login');
	}
	public function processLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if ($username === 'prince' && $password === 'p@s') 
		{
			return 'Access granted!';
		} 
		else 
		{
			return 'Access denied! Wrong username or password.';
		}
  }
}
