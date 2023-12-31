<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index() {
        return view('home_awal');
    }

    function indexAdmin() {
        return view('adminPage');
    }
    
    function indexLogin() {
        return view('login');
    }

    public function login(Request $request) 
    {

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
                return redirect('admin');
        }else{
            return redirect()->withErrors('Email-Address and Password are Wrong. ');
        } 
    }

    public function logout() 
        {
            Auth::logout();
            return redirect('');
        }
}
