<?php

namespace App\Http\Controllers;
use  App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __construct() {
        $this->middleware(['guest']);
    }
    public function store(Request $request) {

        $this->validate($request,[
            'name' =>'required|max:255',
            'username' =>'required|max:255',
            'email' =>'required|email|max:255',
            'password' =>'required|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'username' =>$request->username,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password'));

        return redirect()->route('dashboard')->with('success','you are registered successfully...');
    }
         // we will get array of values
            //redirect()->back()->with('success','your are registered successfully...');
}
