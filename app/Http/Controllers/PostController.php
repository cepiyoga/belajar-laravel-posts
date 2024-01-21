<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostData;
use App\Models\TestCepi;

class PostController extends Controller
{
    public function index(){
        
        return view('posts',[
            'title'=>'All Posts', 
            'active'=>'posts',
            'posts' =>Post::latest()->filter(request(['search']))->get()
        ]);
    }


    // Route::get('/user/{id}', function (Request $request, string $id) {
    //     return 'User '.$id;
    // });
    
    //Route::get('/posts/{post:slug}', [PostController::class,'show']);
    public function show(Post $post){
        return view('post',[
            'title' => 'Single Post', 
            'active'=>'posts',
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

    public function lihat(){
        //$ambilData = DB::select("SELECT * FROM posts");
        return view('lihat',[
            'title'=>'Coba Data',
            'datas'=> DB::select("SELECT * FROM posts")
        ]);
    }
}
