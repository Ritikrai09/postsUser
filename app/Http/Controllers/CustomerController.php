<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{

    function index(Request $request) {

        $id = $request->input('customer_id');

        $customer = Customer::all()->where('seller_id','=',$request->user('seller')->id);
        $exist =  $customer->where('id',$id)->first();
        
        return view('layouts.ecommerce.bill',[
            'customer'=> $customer,
            'exist'=> $exist
        ]);
    }

    function store(Request $request) {

        $validate = Validator::make($request->all(),[
            'name' =>'required|max:255',
            'contact' =>'required|digits:10|unique:sellers',
            'Address' =>'required',
            'flatNo' =>'required|nullable',
            'city' =>'required',
            'state' =>'required',
        ]);
       
        if ($validate->fails()) {
         
            return back()->withErrors($validate)->withInput(); 
       
        }else{
            
        $request->user('seller')->customers()->create([
            'name' =>$request->input('name'),
            'contact' =>$request->input('contact'),
            'flatNo' =>$request->input('flatNo'),
            'Address' =>$request->input('Address'),
            'city' =>$request->input('city'),
            'state' =>$request->input('state'),
            'seller_id' =>$request->user('seller')->id,
        ]);

            return back()->with('success','Customer Added');        
      }
       
    }

    function storing(Request $request){

        $validate = Validator::make($request->all(),[
            'customer_id' =>'required',
        ]);
          
         $orders = new Order;   
         $orders->customer_id = $request->input('customer_id');
         
          
          if ($validate->fails() && Customer::has('id',$id)) {
            
            return back()->with('failed','Id already exist');  

        }else {
               
        Order::create([
            'customer_id' =>$request->input('customer_id'),
        ]);
            return back();

     }
  }

}
