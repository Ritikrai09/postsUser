<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index() {

     $posts = Post::with(['user','likes'])->paginate(20);   // using simplePaginate for next and previous links 

      return view('layouts.post',[
          'posts' => $posts
      ]);
    }

    public function show(Post $post) {

         return view('layouts.show',[
             'post' => $post
         ]);
       }

    public function store(Request $request) {
        
        $this->validate($request,[
            'body' => 'required',
        ]);
      
        if (!auth()->user()) {
          
            return back()->with('fail','Not an Authenticated user');
       
        }
            $request->user()->posts()->create([    // user is storing the /post/ comes from input request to 'posts' table
            'body' => $request->body
        ]);
       
        return back();
    }

    
    public function destroy(Post $post) {
        
        $post->delete();

        return back();
    }
}
