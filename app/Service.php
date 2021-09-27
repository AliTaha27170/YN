<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];
    public $timestamps  = false;

    public function dad(){
        return $this->belongsTo('App\Service','parent_service');
    }
    public function sons(){
        return $this->hasMany('App\Service','parent_service');
    }

}
