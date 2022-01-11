<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DiningArea extends Model
{
    //
    protected $fillable = ['name'];

    /*
  |--------------------------------------------------------------------------
  | Relations database
  |--------------------------------------------------------------------------
  |
  */

    /**
     * @return BelongsToMany
     */
    public function restaurants()
    {
        return $this->belongsToMany(Restaurant::class, 'dining_area_restaurant');
    }
}
