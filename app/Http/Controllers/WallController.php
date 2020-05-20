<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Film;

class WallController extends Controller
{
    //
    public function index(){
        $posts = Post::all();
        $movies = Film::all();
        return view('wall', ['posts' => $posts]);

    }
    // public function write(Request $request){
    //     $post = new Post;
    //     $post->content = $request->content;
    //     $post->save();

    //     return redirect('wall');
    // }
}
