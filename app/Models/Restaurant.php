<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurant extends Model
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
     * @return HasMany
     */
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    /**
     * @return BelongsToMany
     */
    public function dining_areas()
    {
        return $this->belongsToMany(DiningArea::class, 'dining_area_restaurant');
    }
}
