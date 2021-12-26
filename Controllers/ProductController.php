<?php

namespace App\Http\Controllers;
use  App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
 
    public function store(Request $request) {

        $this->validate($request,[
            'productName' =>'required|max:255',
            'quantity' =>'required',
            'weight' =>'required',
            'boxes' =>'required',
            'MRP' =>'required',
            'costPrice' =>'required',
            'image' =>'required|image|mimes:png,jpeg,jpg,gif,svg|max:2048',
            'productDesc' =>'required',
        ]);

        $imageName = time().'.'.$request->image->extension();

        Product::create([
            'productName' => $request->productName,
            'quantity' => $request->quantity,
            'weight' => $request->weight,
            'boxes' => $request->boxes,
            'MRP' => $request->MRP,
            'costPrice' =>$request->costPrice,
            'productDesc' =>$request->productDesc,
            'image' =>$request->image->move(public_path('images'),$imageName)
        ]);
        
    //    auth()->attempt($request->only('email','password')); // we will get array of values

        return back()->with('success','Product stocked Successfully...');  //redirect()->back()->with('success','your are registered successfully...');
    }
}
