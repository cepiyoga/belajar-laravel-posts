<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\TestCepi;

class PostController extends Controller
{
    public function index(){
        return view('posts',[
            'title'=>'Post', 
            'posts' => Post::all()
        ]);
    }
    
    //Route::get('/posts/{post:slug}', [PostController::class,'show']);
    public function show(Post $post){
        return view('post',[
            'title' => 'Single Post', 
            'post' => $post
        ]);
    }

    public function test($slug){
        //$post_data = DB::table('posts')->get();
        $post_data = DB::select("SELECT * from posts where slug=?",[$slug]);
        return view('test',[
            'title'=> 'Test',
            'datas'=> $post_data
    
        ]);
    }
}
