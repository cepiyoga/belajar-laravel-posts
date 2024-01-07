<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',['title'=>'Home']);
});

Route::get('/about', function () {
    return view('about',['title'=>'About','name'=>'Cepi Yoga', 'email'=>'cepiyoga@gmail.com','image'=>'cepi.jpg']);
});





Route::get('/blog', function () {
    $blog_posts = 
[
    [
        'title' => 'Judul Post Pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Sandika Galih',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo corporis quas cum. Fugit sequi aliquam doloremque eveniet neque tempore, vitae amet. Odio libero tempore omnis velit iste laborum adipisci reiciendis aliquam. Quos esse nesciunt rerum iste amet, asperiores quod velit architecto laudantium? Exercitationem aut laborum sit sequi doloribus voluptatum qui laboriosam ut iure. Soluta dicta sit fuga in laboriosam, deleniti magni ipsa, nihil iusto eos tempora commodi repellendus suscipit. Eveniet nemo ipsum dolorem, excepturi error laudantium fugiat odit illum illo perspiciatis quod inventore harum tenetur ex eum? Dicta iure voluptatem reiciendis quaerat excepturi ut veritatis ullam cumque accusantium. Ut, nostrum!'
    ],
    [
        'title' => 'Judul Post Kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'Cepi Yoga Asmara',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo corporis quas cum. Fugit sequi aliquam doloremque eveniet neque tempore, vitae amet. Odio libero tempore omnis velit iste laborum adipisci reiciendis aliquam. Quos esse nesciunt rerum iste amet, asperiores quod velit architecto laudantium? Exercitationem aut laborum sit sequi doloribus voluptatum qui laboriosam ut iure. Soluta dicta sit fuga in laboriosam, deleniti magni ipsa, nihil iusto eos tempora commodi repellendus suscipit. Eveniet nemo ipsum dolorem, excepturi error laudantium fugiat odit illum illo perspiciatis quod inventore harum tenetur ex eum? Dicta iure voluptatem reiciendis quaerat excepturi ut veritatis ullam cumque accusantium. Ut, nostrum!'
    ]
];
    return view('posts',['title'=>'Blog', 'posts' => $blog_posts]);
});


//Single Post

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = 
[
    [
        'title' => 'Judul Post Pertama',
        'slug' => 'judul-post-pertama',
        'author' => 'Sandika Galih',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo corporis quas cum. Fugit sequi aliquam doloremque eveniet neque tempore, vitae amet. Odio libero tempore omnis velit iste laborum adipisci reiciendis aliquam. Quos esse nesciunt rerum iste amet, asperiores quod velit architecto laudantium? Exercitationem aut laborum sit sequi doloribus voluptatum qui laboriosam ut iure. Soluta dicta sit fuga in laboriosam, deleniti magni ipsa, nihil iusto eos tempora commodi repellendus suscipit. Eveniet nemo ipsum dolorem, excepturi error laudantium fugiat odit illum illo perspiciatis quod inventore harum tenetur ex eum? Dicta iure voluptatem reiciendis quaerat excepturi ut veritatis ullam cumque accusantium. Ut, nostrum!'
    ],
    [
        'title' => 'Judul Post Kedua',
        'slug' => 'judul-post-kedua',
        'author' => 'Cepi Yoga Asmara',
        'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo corporis quas cum. Fugit sequi aliquam doloremque eveniet neque tempore, vitae amet. Odio libero tempore omnis velit iste laborum adipisci reiciendis aliquam. Quos esse nesciunt rerum iste amet, asperiores quod velit architecto laudantium? Exercitationem aut laborum sit sequi doloribus voluptatum qui laboriosam ut iure. Soluta dicta sit fuga in laboriosam, deleniti magni ipsa, nihil iusto eos tempora commodi repellendus suscipit. Eveniet nemo ipsum dolorem, excepturi error laudantium fugiat odit illum illo perspiciatis quod inventore harum tenetur ex eum? Dicta iure voluptatem reiciendis quaerat excepturi ut veritatis ullam cumque accusantium. Ut, nostrum!'
    ]
];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post['slug'] == $slug){
            $new_post = $post;
        }
    }


    return view('post',['title' => 'Single Post', 'post' => $new_post]);
});