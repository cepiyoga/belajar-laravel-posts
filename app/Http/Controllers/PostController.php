<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            'title'=>'Post', 
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            'title' => 'Single Post', 
            'post' => $post
        ]);
    }

    public function test(){
        $post_data = DB::table('posts')->get();
        return view('test',[
            'title'=> 'Test',
            'datas'=> $post_data,
    
        ]);
    }
}
