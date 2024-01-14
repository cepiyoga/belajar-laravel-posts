<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class SalesData extends Model
{
    use HasFactory;
    use HasUuids;
    protected $guarded = ['id'];

    /**
     * Get the itemnumber that owns the SalesData
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itemcode(): BelongTo
    {
        return $this->belongsTo(ItemCode::class, 'id', 'ItemNumber');
    }
}
