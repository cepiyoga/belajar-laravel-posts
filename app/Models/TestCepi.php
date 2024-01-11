<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TestCepi 
{
    
   

    public static function all(){
        $data_post = DB::table('posts')->get();
        return collect($data_post);
    }


    public static function find(){
        $data_post = DB::table('posts')->get();
        return $data_post->first();
    }

}



// public static function all(){
//     return collect(self::$blog_posts) ;
// }

// public static function find($slug){
//     $posts = static::all();
//     return $posts->firstWhere('slug',$slug);

// }