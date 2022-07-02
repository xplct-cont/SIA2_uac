<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'email' => 'email|required',
            'password' => 'string|required'
        ]);

        $login = auth()->attempt($request->only('email','password'));

        if(!$login){
            return back()->with('Error','Invalid user Credentials');
        }
        return redirect('/dashboard');
    }
    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        auth()->logout();
        return redirect('/login');
    }
    public function users(){
        return view('users');
    }
}