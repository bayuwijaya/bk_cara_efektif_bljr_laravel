<?php

use Illuminate\Support\Facades\Input;

    class LoginController extends BaseController 
    {
        public function showLogin()
        {
            return View::make('bab_5.login');
        }
        public function processLogin()
        {
            $username = Input::get('username');
            $password = Input::get('password');
            if ($username === 'prince' && $password === 'p@s')
            {
                return 'Akses diperbolehkan';
            }
            else 
            {
                return 'Akses ditolak ! Username atau Password Salah.';
            }
        }
    }
