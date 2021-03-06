<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{

   /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'terrain';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "name"
    ];
}
