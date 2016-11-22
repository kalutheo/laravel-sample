<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'model', 'manufacturer', 'description',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function user(){
        return $this->belongsTo('App\User');
    }
}
