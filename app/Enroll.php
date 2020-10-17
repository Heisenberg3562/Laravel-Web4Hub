<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id','user_id'
    ];

}
