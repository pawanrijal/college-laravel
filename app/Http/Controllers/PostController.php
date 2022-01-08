<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $post = new Post();
        $post->title = "Hello";
        $post->post = "ANfks dfiohi sodfisdfk ndkfnkds nfien";
        $post->save();

        dd($post);
    }

     public function browse(){
         $posts=Post::where('title','Hello')->get();
         return response()->json($posts,200);
        }

     public function edit(){
        $post=Post::find(5);
        $post->title="NEw Title";
        $post->save();

        dd($post);
     }


     public function delete(){
        $post=Post::find(5);
        $post->destroy(5);

        dd($post);
     }


}
