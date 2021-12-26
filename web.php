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
