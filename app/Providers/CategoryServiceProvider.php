<?php

namespace App\Providers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
   public function boot()
   {
    
      View::composer('*',function($view) {
         $view->with('product', Product::with(['category']));
   });
}
}
