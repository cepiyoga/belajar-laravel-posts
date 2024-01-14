<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prooduct extends Model
{
    protected $table = "prooducts";
    protected $primaryKey = "id";
    protected $keyType = "string";
    public $incrementing = false;
    public $timeStamps = false;
    
    public function category(): BelongsTO
    {
        return $this->belongsTo(Caategory::class,"category_id","id");
    }
}
