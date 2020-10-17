<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body','date', 'type', 'fees','status','poster'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class);
    }
}
