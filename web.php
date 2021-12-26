<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home',function(){
    return view('layouts.home');
})->name('home');

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/users/{user:name}/posts', [UserPostController::class,'index'])->name('users.posts');

Route::get('/register', function(){return view('layouts.register');})->name('register');
Route::post('/register', [RegisterController::class,'store']);

Route::post('/logout', [logoutController::class,'store'])->name('logout');

Route::post('/login', [LoginController::class,'store']);
Route::get('/login', [LoginController::class,'index'])->name('login');

Route::get('/posts', [PostController::class,'index'])->name('posts');
Route::get('/posts/{post}', [PostController::class,'show'])->name('layouts.show');
Route::post('/posts', [PostController::class,'store']);
Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('posts.destroy');

Route::post('/posts/{post:id}/likes', [LikeController::class,'store'])->name('posts.likes');
Route::delete('/posts/{post:id}/likes', [LikeController::class,'destroy'])->name('posts.likes');

Route::get('/seller', [SellerController::class,'index'])->name('seller');

Route::get('/product', function () {
    return view('layouts.index');
});

///-------------------------------------------------------------------ecommerce----------------------------

Route::get('/seller/dashboard',function(){return view('layouts.selldash');})->name('sellerdashboard');
Route::get('/orders',function(){return view('layouts.ecommerce.order');})->name('orders');
Route::get('/products',function(){ return view('layouts.ecommerce.product');})->name('products');
Route::post('/products', [ProductController::class,'store']);
Route::get('/customers',function(){ return view('layouts.ecommerce.customer');})->name('customers');
Route::get('/report',function(){ return view('layouts.ecommerce.report');})->name('report');
Route::get('/billings',function(){ return view('layouts.ecommerce.bill');})->name('billings');

Route::prefix('seller')->group(function(){
Route::get('/register',function(){ return view('layouts.ecommerce.sellerRegister');})->name('sellerRegister');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/login',function(){ return view('layouts.ecommerce.sellerLogin');})->name('sellerlogin');
});