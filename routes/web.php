<?php
use Illuminate\Session\Middleware\AuthenticateSession;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home',[
        'title'=>'Home',
        'active'=>'home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title'=>'About',
        'active'=>'about',
        'name'=>'Cepi Yoga',
         'email'=>'cepiyoga@gmail.com',
         'image'=>'cepi.jpg']);
});


Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post:slug}', [PostController::class,'show']);

Route::get('/categories/{category:slug}',function(Category $category){
    return view('posts',[
        'title'=> "Post by Category: $category->name",
        'posts'=> $category->posts->load('category','author'),
        'active'=>'categories',
        
    ]);
});

Route::get('/categories',function(){
    return view('categories',[
        'title'=> 'Post Categories',
        'categories'=> Category::all(),
        'active'=>'categories',
    ]);
});


Route::get('/test/{slug}',[PostController::class,'test']);
Route::get('/lihat',[PostController::class,'lihat']);

Route::get('/authors/{author:username}',function(User $author){
    return view("posts",[
        'title'=>"Post by Author : $author->name",
        'posts'=>$author->post->load('category','author'),
        'active'=>'posts',
        
    ]);
});

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');