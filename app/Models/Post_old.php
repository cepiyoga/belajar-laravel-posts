<?php

namespace App\Models;


class Post 
{
   private static $blog_posts =[
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

        public static function all(){
            return collect(self::$blog_posts) ;
        }

        public static function find($slug){
            $posts = static::all();
            return $posts->firstWhere('slug',$slug);

        }
}
