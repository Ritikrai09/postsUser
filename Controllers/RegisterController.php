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

    if($request->is('seller/register')){
          $this->validate($request,[
                'SellerName' =>'required|max:255',
                'CompanyName' =>'required|max:255',
                'email' =>'required|email|max:255',
                'password' =>'required|confirmed',
                'contact' =>'required|digits:10',
                'officeAddress' =>'required',
                'city' =>'required',
                'state' =>'required',
          ]);

          Seller::create([
            'SellerName' =>$request->SellerName,
            'CompanyName' =>$request->CompanyName,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'contact' =>$request->contact,
            'officeAddress' =>$request->officeAddress,
            'city' =>$request->city,
            'state' =>$request->state,
        ]);
       
        auth()->attempt($request->only('email','password'));

        return redirect()->route('seller.dashboard')->with('success','your are registered successfully...');
    
    } else{

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
}
