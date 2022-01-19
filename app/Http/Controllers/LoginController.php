<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('layouts.login');
    }
    
    public function store(Request $request) {
        
        $this->validate($request,[
            'email' =>'required|email|max:255',
            'password' =>'required',
        ]);
     
        if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','Invalid Login Credentials');
        }

        return redirect()->route('dashboard');       
    }
}
