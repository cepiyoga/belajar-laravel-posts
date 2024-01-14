<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SalesData;

class ItemCode extends Model
{
    use HasFactory;
    protected $fillable = ['id','Description','Unit'];


    /**
     * Get all of the salesdata for the ItemCode
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesdata(): HasMany
    {
        return $this->hasMany(SalesData::class, 'ItemNumber', 'ItemNumber');
    }

    // protected $guarded = ['id'];

    // public function category(){
    //     return $this->belongsTo(Category::class);
    // }

}
