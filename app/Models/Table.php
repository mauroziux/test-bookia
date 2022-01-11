<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Table extends Model
{
    //
    protected $fillable = [
        'name',
        'minimum_capacity',
        'maximum_capacity',
        'active',
        'restaurant_id',
        'dining_area_id',
    ];

    /*
  |--------------------------------------------------------------------------
  | Relations database
  |--------------------------------------------------------------------------
  |
  */

    /**
     * @return BelongsTo
     */
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * @return BelongsTo
     */
    public function dining_area(){
        return $this->belongsTo(DiningArea::class,'dining_area_id');
    }
}
