<?php

namespace App\Http\Controllers;
use  App\Models\OrderItem;
use  App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

   function store(Request $request){
      
      $validate = Validator::make($request->all(),[
         'qty' =>'required',
     ]);
      
    
      $orders1 = new OrderItem;
      $orders1->order_id = $request->user('seller')->customerLatest();
      $orders1->product_id = $request->input('productName');
      $orders1->qty = $request->qty;
      

      if ($validate->fails()) {
         
         return back()->withErrors($validate)->withInput(); 
    
     }else{
            
          $orders1->save(); 
          return back()->with('successed','Product stocked Successfully...');  //redirect()->back()->with('success','your are registered successfully...');
      } //redirect()->back()->with('success','your are registered successfully...');
     }

}
