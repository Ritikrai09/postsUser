<?php

namespace App\Http\Controllers;
use  App\Models\Order;
use  App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderItemController extends Controller
{
    function store(Request $request) {
   
        $id = 3;
            
         $orders = new Order;   
         $orders->customer_id = Customer::where('id','=',$id)->first();
         
         if ($orders->customer_id == null) {

            $orders->save();
            return back();
        
        }else {
        
            return back()->with('failed','Id already exist');  
        }
      }
}
