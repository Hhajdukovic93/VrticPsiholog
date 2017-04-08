<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vrtic extends Model
{
    //
    protected $table = 'vrtic';

    public function skupina(){
        return $this->hasMany('App\skupina');
    }
}
