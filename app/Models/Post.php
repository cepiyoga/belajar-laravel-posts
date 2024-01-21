<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = ['id'];

    protected $with = ['category','author'];



    public function scopeFilter($query, array $filters){
        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title','like','%'.$filters['search'].'%')
        //     ->orWhere('body','like','%'.$filters['search'].'%');
        // } 

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title','like','%'.$search.'%')
            ->orWhere('body','like','%'.$search.'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category',function($query) use($category){
                $query->where('slug',$category);
            });
        });

        $query->when($filter['author'] ?? false, fn($query, $author)=>
            $query->whereHas('author',fn($query)=>
            $query->where('username',$author))
        
         );

    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function author():BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    // public function category()
    // {
    //     return $this->belongsTo("Category",'category_id');
    // }

    
}
