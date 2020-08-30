<?php

namespace App\Http\Controllers;
class AuthController extends Controller
{
	 /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function login()
    {

        return view('auth.login'); 
    }

    public function register()
    {

        return view('auth.register'); 
    }

    public function password()
    {
        return view('auth.password'); 
    }
}
