<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caategory extends Model
{
    protected $table = "caategories";
    protected $primaryKey = "id";
    protected $keyType = "string";
    public $incrementing = false;
    public $stampstamps = false;

    protected $fillable = ["id","name","description"];

    public function products():HasMany
    {
        return $this->hasMany(Prooduct::class,"category_id","id");
    }


}
